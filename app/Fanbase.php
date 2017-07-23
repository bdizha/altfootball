<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MartinBean\Database\Eloquent\Sluggable;

class Fanbase extends Model
{
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'image',
        'cover',
        'slug'
    ];

    protected $covers = [
        "http://www.realmadrid.com/img/galeria-marca/_he27686.jpg",
        "http://www.realmadrid.com/img/galeria-marca/_he18519.jpg",
        "http://www.realmadrid.com/img/galeria-marca/_he27677.jpg",
        "http://www.realmadrid.com/img/galeria-marca/_1rm2197.jpg",
        "http://www.realmadrid.com/img/galeria-marca/_1rm2220.jpg",
        "http://www.realmadrid.com/img/galeria-marca/_1rm2228.jpg"
    ];

    public function getInitials()
    {
        $nameArray = explode(" ", $this->name);
        $initials = "";
        foreach ($nameArray as $part) {
            if (ctype_alnum($part)) {
                $initials .= strtoupper($part[0]);
            }

        }

        return $initials;
    }

    public function getSlugColumnName()
    {
        return 'slug';
    }

    public function getSluggableString()
    {
        return $this->name;
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_fanbases');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'fanbases_posts');
    }

    public function getImage($dimensions = "width=400&height=400")
    {
        try {
            return file_get_contents("http://images.altfootball.dev?url=" . $this->image . "&" . $dimensions);
        } catch (\Exception $e) {
            return "";
        }
    }

    public function getCover()
    {
        if (empty($this->cover)) {
            $this->cover = $this->covers[rand(0, count($this->covers))];
            $this->save();
        }
        return $this->cover;
    }
}
