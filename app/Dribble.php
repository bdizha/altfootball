<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Dribble extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'type_id',
        'type'
    ];

    protected $appends = [];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
