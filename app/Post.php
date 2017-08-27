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

    protected $appends = ['comments', 'limited_comments', 'dribbles', 'published_at', 'thumb_image', 'small_image', 'big_image', 'has_dribble', 'fanbase'];

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

    public function getSmallImageAttribute()
    {
        $image = Redis::get('post:image:small:' . $this->id);
        if (empty($image)) {
            $cloudImage = \Cloudinary\Uploader::upload(
                $this->image,
                array(
                    "quality" => 100,
                    "crop" => "limit",
                    "width" => 384,
                    "height" => 216
                ));

            $image = $cloudImage['url'];

            Redis::set('post:image:small:' . $this->id, $image);
        }
        return $image;
    }


    public function getBigImageAttribute()
    {
        $image = Redis::get('post:image:big:' . $this->id);
        if (empty($image)) {
            $cloudImage = \Cloudinary\Uploader::upload(
                $this->image,
                array(
                    "crop" => "fill",
                    "quality" => 100,
                    "width" => 1236,
                    "height" => 695,
                    "x" => 0,
                    "y" => 0
                ));

            $image = $cloudImage['url'];
            Redis::set('post:image:big:' . $this->id, $image);
        }
        return $image;
    }


    public function getThumbImageAttribute()
    {
        $image = Redis::get('post:image:thumb:' . $this->id);
        if (empty($image)) {
            $cloudImage = \Cloudinary\Uploader::upload(
                $this->image,
                array(
                    "crop" => "thumb",
                    "quality" => 100,
                    "width" => 90,
                    "height" => 90
                ));

            $image = $cloudImage['url'];
            Redis::set('post:image:thumb:' . $this->id, $image);
        }
        return $image;
    }

    public function getMeta($url)
    {
        $meta = [
            "url" => $url,
            "title" => $this->title,
            "description" => $this->summary,
            "image" => $this->getBigImageAttribute()
        ];

        return $meta;
    }
}
