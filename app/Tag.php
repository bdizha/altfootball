<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MartinBean\Database\Eloquent\Sluggable;

class Tag extends Model
{
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'slug'
    ];


    public function getSlugColumnName()
    {
        return 'slug';
    }

    public function getSluggableString()
    {
        return $this->content;
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'tags_posts');
    }

    public function getMeta()
    {
        $meta = [
            "url" => url()->current(),
            "title" => $this->content,
            "description" => $this->content,
            "image" => !empty($this->posts[0]) ? $this->posts[0]->getBigXAttribute() : url()->current() . "/images/pundit-main.jpg"
        ];

        return $meta;
    }
}
