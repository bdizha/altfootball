<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use MartinBean\Database\Eloquent\Sluggable;
use Illuminate\Support\Facades\Redis;

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

    public function getDate()
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
        foreach($this->fanbases as $fanbase)
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
            if(empty($image)){
                $image = file_get_contents("http://images.altfootball.dev?url=" . $this->image . "&" . $dimensions);
                Redis::set('post:image:' . $this->id, $image);
            }
            return $image;
        } catch (\Exception $e) {
//           dd($e);
        }
    }
}
