<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    protected $fillable = [
        'followable_id',
        'followable_type',
        'user_id',
        'is_active'
    ];

    /**
     * Get all of the owning followable models.
     */
    public function followable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function requested()
    {
        return $this->hasOne(User::class, 'id', 'followable_id');
    }
}
