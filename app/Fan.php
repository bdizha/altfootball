<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fan extends Model
{
    protected $fillable = [
        'requester_id',
        'sent_id'
    ];

    public function requester()
    {
        return $this->hasOne('App\User', 'id', 'requester_id');
    }

    public function sent()
    {
        return $this->hasOne('App\User', 'id', 'sent_id');
    }
}
