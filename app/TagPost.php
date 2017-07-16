<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagPost extends Model
{
    protected $table = "tags_posts";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id',
        'tag_id'
    ];
}
