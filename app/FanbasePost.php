<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FanbasePost extends Model
{
    protected $table = "fanbases_posts";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id',
        'fanbase_id'
    ];

    public function fanbase()
    {
        return $this->hasOne(Fanbase::class, 'id', 'fanbase_id');
    }

    public function post()
    {
        return $this->hasOne(Post::class, 'id', 'post_id');
    }
}
