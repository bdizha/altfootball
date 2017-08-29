<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    protected $fillable = [
        'followable_id',
        'type',
        'user_id',
        'is_active'
    ];

    const type_user = 1;
    const type_fanbase = 2;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
