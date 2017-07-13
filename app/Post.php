<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
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
        'external_url',
        'summary',
        'image',
        'content',
        'user_id',
        'created_at',
        'slug'
    ];

    public function getSlugColumnName()
    {
        return 'slug';
    }

    public function getSluggableString()
    {
        return $this->title;
    }

    public function user() {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function getImage($dimensions = "width=370&height=208")
    {
        try {
            return file_get_contents("http://images.altfootball.dev?url=" . $this->image . "&" . $dimensions);
        } catch (\Exception $e) {
            return "";
        }
    }
}
