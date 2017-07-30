<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Redis;
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
        'cover',
        'website',
        'is_active',
        'token',
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

    public function getName()
    {
        return $this->first_name . " " . $this->last_name;
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

    public function getImage($dimensions = "width=300&height=300")
    {

        try {
            $image = Redis::get('fan:image:' . $this->id);
            if (empty($image)) {

                if(empty($this->image)){
                    $u = User::where("image", "!=", "")->orderByRaw("RAND()")->first();

                    if(!empty($u->image)){
                        $this->image = $u->image;
                        $this->save();
                    }
                }

                $image = file_get_contents("http://images.altfootball.dev?url=" . $this->image . "&" . $dimensions);
                Redis::set('fan:image:' . $this->id, $image);
            }
            return $image;
        } catch (\Exception $e) {
        }
    }

    public function getDomain()
    {
        return str_replace("http://", "", $this->website);
    }

    public function getJson(){
        return $this->toJson();
    }
}
