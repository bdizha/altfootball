<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'user_id',
        'type_id',
        'parent_id'
    ];

    protected $appends = ['parent', 'published_at', 'is_replying'];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function getParentAttribute()
    {
        return Comment::where("id", $this->parent_id)
            ->with('user')
            ->first();
    }

    public function getIsReplyingAttribute()
    {
        return false;
    }

    public function getPublishedAtAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
