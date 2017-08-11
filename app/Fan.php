<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fan extends Model
{
    protected $fillable = [
        'requester_id',
        'requested_id'
    ];

    public function requester()
    {
        return $this->hasOne('App\User', 'id', 'requester_id');
    }

    public function requested()
    {
        return $this->hasOne('App\User', 'id', 'requested_id');
    }
}
