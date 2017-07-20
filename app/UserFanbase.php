<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFanbase extends Model
{
    protected $table = "users_fanbases";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'fanbase_id'
    ];

    public function fanbase()
    {
        return $this->hasOne(Fanbase::class, 'id', 'fanbase_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}