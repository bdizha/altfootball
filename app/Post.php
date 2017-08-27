<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;
use MartinBean\Database\Eloquent\Sluggable;
use Auth;

class Post extends Model
{
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'credit',
        'external_url',
        'summary',
        'image',
        'content',
        'user_id',
        'created_at',
        'slug'
    ];

    protected $appends = ['comments', 'limited_comments', 'dribbles', 'published_at', 'resized_image', 'square_image', 'has_dribble', 'fanbase'];

    public function getPublishedAtAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function getSlugColumnName()
    {
        return 'slug';
    }

    public function getSluggableString()
    {
        return $this->title;
    }

    public function getHasDribbleAttribute()
    {
        if (Auth::check()) {
            $user = Auth::user();

            $dribble = Dribble::where('type_id', $this->id)
                ->where('user_id', $user->id)
                ->where('type', 'post')->first();

            return !empty($dribble);
        } else {
            return false;
        }
    }

    public function getCommentsAttribute()
    {
        return Comment::where("type_id", $this->id)
            ->orderBy('created_at', 'DESC')
            ->with('user')
            ->where('type', 'post')
            ->get();
    }

    public function getLimitedCommentsAttribute()
    {
        return Comment::where("type_id", $this->id)
            ->orderBy('created_at', 'DESC')
            ->with('user')
            ->where('type', 'post')
            ->take(2)
            ->get();
    }

    public function getDribblesAttribute()
    {
        return Dribble::where("type_id", $this->id)
            ->orderBy('created_at', 'DESC')
            ->with('user')
            ->where('type', 'post')
            ->get();
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tags_posts');
    }

    public function views()
    {
        return $this->belongsToMany(View::class, 'tags_posts');
    }

    public function fanbases()
    {
        return $this->belongsToMany(Fanbase::class, 'fanbases_posts');
    }

    /**
     * The fanbase to which the post belongs
     */
    public function getFanbaseAttribute()
    {
        foreach ($this->fanbases as $fanbase) {
            return $fanbase;
        }
        return new Fanbase();
    }

    public function getHtmlContent()
    {
        $searches = [
            '<p><inline style="background-color: initial; font-size: 1em;"><br></inline></p>',
            '<p><span style="background-color: initial; font-size: 1em;"><br></span></p>',
            '<p><i class="wrapper" contenteditable="false"></i>
</p>'
        ];

        $content = str_replace($searches, '', $this->content);
        $content = nl2br($content);
        return str_replace("height=", "", str_replace("width=", "", $content));
    }

    public function getSquareImageAttribute()
    {
        $dimensions = 'width=100&height=100';
        $image = Redis::get('post:image:square:' . $this->id);
        if (empty($image)) {
            $data = file_get_contents($this->image);

            $fileParts = explode('.', $this->image);

            $fileExt = $fileParts[count($fileParts) - 1];

            if(!in_array(strtolower($fileExt), ['jpg', 'jpeg', 'gif', 'png'])){
                $fileExt = 'jpg';
            }

            $filename = "/images/posts/" . md5($this->image) . ".{$fileExt}";

            file_put_contents(public_path() . $filename, $data);

            $image = file_get_contents("http://images.altfootball.dev?url=" . url('/') . $filename . "&" . $dimensions);
            Redis::set('post:image:square:' . $this->id, $image);
        }
        return $image;
    }


    public function getResizedImageAttribute()
    {
        $dimensions = "width=370&height=208";
        try {
            $image = Redis::get('post:image:' . $this->id);
            if (empty($image)) {
                $image = file_get_contents("http://images.altfootball.dev?url=" . $this->image . "&" . $dimensions);

                Redis::set('post:image:' . $this->id, $image);
            }
            return $image;
        } catch (\Exception $e) {
        }
    }

    public function getMeta($url)
    {
        $image = "";

        preg_match_all('/(\w+)\s*=\s*(?|"([^"]*)"|\'([^\']*)\')/', $this->getResizedImageAttribute(), $imageParts, PREG_SET_ORDER);

        if (!empty($imageParts[3][2])) {
            $imageParts = explode(" ", $imageParts[3][2]);
        }

        if (!empty($imageParts[0])) {
            $image = $imageParts[0];
        }

        $meta = [
            "url" => $url,
            "title" => $this->title,
            "description" => $this->summary,
            "image" => $image
        ];

        return $meta;
    }
}
