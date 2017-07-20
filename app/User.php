<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use MartinBean\Database\Eloquent\Sluggable;

class User extends Authenticatable
{
    use Notifiable, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'nickname',
        'bio',
        'email',
        'password',
        'image',
        'website',
    ];


    protected $sluggable = [
        'build_from' => ['first_name', 'last_name'],
        'save_to' => 'slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getSlugColumnName()
    {
        return 'slug';
    }

    public function fanbases()
    {
        return $this->belongsToMany(Fanbase::class, 'users_fanbases');
    }

    /**
     * Create a string based on the first and last name of a person.
     */
    public function getSluggableString()
    {
        return sprintf('%s %s', $this->first_name, $this->last_name);
    }
}
