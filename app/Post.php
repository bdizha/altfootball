<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;
use MartinBean\Database\Eloquent\Sluggable;

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

    protected $appends = ['comments', 'published_at'];

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

    public function getCommentsAttribute()
    {
        return Comment::where("type_id", $this->id)
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
    public function fanbase()
    {
        foreach ($this->fanbases as $fanbase)
            return $fanbase;
    }

    public function getHtmlContent()
    {
        return str_replace("height=", "", str_replace("width=", "", $this->content));
    }

    public function getImage($dimensions = "width=370&height=208")
    {
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

        preg_match_all('/(\w+)\s*=\s*(?|"([^"]*)"|\'([^\']*)\')/', $this->getImage(), $imageParts, PREG_SET_ORDER);

        if(!empty($imageParts[3][2])){
            $imageParts = explode(" ", $imageParts[3][2]);
        }

        if(!empty($imageParts[0])){
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
