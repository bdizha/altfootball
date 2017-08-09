<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MartinBean\Database\Eloquent\Sluggable;
use Illuminate\Support\Facades\Redis;

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

    protected $appends = ['resized_image', 'initials'];

    protected $covers = [
        "http://www.realmadrid.com/img/galeria-marca/_he27686.jpg",
        "http://www.realmadrid.com/img/galeria-marca/_he18519.jpg",
        "http://www.realmadrid.com/img/galeria-marca/_he27677.jpg",
        "http://www.realmadrid.com/img/galeria-marca/_1rm2197.jpg",
        "http://www.realmadrid.com/img/galeria-marca/_1rm2220.jpg",
        "http://www.realmadrid.com/img/galeria-marca/_1rm2228.jpg"
    ];

    public function getInitialsAttribute()
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
            $image = Redis::get('fanbase:image:' . $this->id);
            if (empty($image)) {
                $image = file_get_contents("http://images.altfootball.dev?url=" . $this->image . "&" . $dimensions);
                Redis::set('fanbase:image:' . $this->id, $image);
            }
            return $image;
        } catch (\Exception $e) {
        }
    }

    public function getResizedImageAttribute()
    {
        $image = "";
        preg_match_all('/(\w+)\s*=\s*(?|"([^"]*)"|\'([^\']*)\')/', $this->getImage(), $imageParts, PREG_SET_ORDER);

        if(!empty($imageParts[3][2])){
            $imageParts = explode(" ", $imageParts[3][2]);
        }

        if(!empty($imageParts[0])){
            $image = $imageParts[0];
        }

        return $image;
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
