<?php

namespace App;

use Auth;
use DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Imgix\UrlBuilder;
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
        'is_onboarded',
        'token',
        'small_image',
        'thumb_image'
    ];

    protected $sluggable = [
        'build_from' => ['first_name', 'last_name'],
        'save_to' => 'slug',
    ];

    protected $appends = ['name', 'camel', 'is_self', 'fanbase', 'follower', 'small_x', 'thumb_x'];

    public function getNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }


    public function getCamelAttribute()
    {
        $camel = strtolower(str_slug(ucwords($this->name), ""));
        return "@" . $camel;
    }

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

    public function posts()
    {
        return $this->hasMany(Post::class)
            ->orderBy("created_at", "DESC")
            ->take(24);
    }

    public function sent()
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'id')
            ->where('type', Follower::type_user)
            ->orderBy("created_at", "DESC");
    }

    public function received()
    {
        return $this->belongsToMany(User::class, 'followers', 'followable_id', 'id')
            ->where('type', Follower::type_user)
            ->orderBy("created_at", "DESC");
    }

    public function fanbases()
    {
        return $this->belongsToMany(Fanbase::class, 'followers', 'user_id', 'id')
            ->where('type', Follower::type_fanbase)
            ->orderBy("created_at", "DESC");
    }

    public function getFanbases()
    {
        return User::has('fanbases')->get();
    }

    public function getFanbaseAttribute()
    {
        return $this->fanbases->first();
    }

    public function getsent()
    {
        return User::has('sent')->get();
    }

    public function getreceived()
    {
        return User::has('received')->get();
    }

    public function getSluggableString()
    {
        return sprintf('%s %s', $this->first_name, $this->last_name);
    }

    public function getIsSelfAttribute()
    {
        return Auth::guard()->check() ? Auth::user()->id === $this->id : false;
    }

    public function getFollowerAttribute()
    {
        $user = Auth::user();

        if (Auth::guard()->check()) {
            $follower = Follower::where('user_id', $user->id)
                ->where('followable_id', $this->id)
                ->where('type', 'App\User')
                ->first();

            if (empty($follower->id)) {
                $follower = Follower::create([
                    'user_id' => $user->id,
                    'followable_id' => $this->id,
                    'type' => Follower::type_user
                ]);
            }

            return $follower;
        }

        $follower = new Follower();
        $follower->followable_id = $this->id;
        $follower->type = 'App\User';

        return $follower;
    }

    public function getDomain()
    {
        return str_replace("http://", "", $this->website);
    }

    public function getJson()
    {
        return $this->toJson();
    }

    public function getSmallXAttribute()
    {
        if (empty($this->small_image) || $this->needsResizing($this->small_image)) {

            if (strpos($this->image, 'http') !== false) {
                $this->saveImage();
            }

            try {
                $builder = new UrlBuilder("altfootball.imgix.net");
                $params = array("w" => 200, "h" => 200, "crop" => "faces", "fit" => "crop");
                $url = $builder->createURL($this->image, $params);

                $this->small_image = $url;
                $this->save();

            } catch (\Exception $e) {
            }
        }
        return $this->small_image;
    }


    public function getThumbXAttribute()
    {
        if (empty($this->thumb_image) || $this->needsResizing($this->thumb_image)) {

            if (strpos($this->image, 'http') !== false) {
                $this->saveImage();
            }

            try {
                $builder = new UrlBuilder("altfootball.imgix.net");
                $params = array("w" => 100, "h" => 100, "crop" => "faces", "fit" => "crop");
                $url = $builder->createURL($this->image, $params);

                $this->thumb_image = $url;
                $this->save();

            } catch (\Exception $e) {
            }
        }
        return $this->thumb_image;
    }

    public function save(array $options = [])
    {
        parent::save($options);

        if (strpos($this->image, 'http') !== false) {
            $this->saveImage();
        }
    }

    protected function saveImage()
    {
        try {
            $imagePart = '/users/' . md5($this->id) . '.jpg';
            $filePart = '/images/' . $imagePart;
            $fileOutput = public_path('/') . $filePart;

            $imageContent = file_get_contents($this->image);
            file_put_contents($fileOutput, $imageContent);

            $this->small_image = '';
            $this->thumb_image = '';
            $this->image = $imagePart;
            $this->save();

            return true;

        } catch (Exception $e) {

        }
    }

    public function getMeta()
    {
        $meta = [
            "url" => url()->current(),
            "title" => $this->name,
            "description" => $this->bio,
            "image" => $this->getSmallXAttribute()
        ];

        return $meta;
    }

    public function toKoJs()
    {
        $userArray = [];

        $fields = $this->appends;
        $fields = array_merge(['id'], $fields);
        $fields = array_merge($this->fillable, $fields);

        foreach ($fields as $field) {
            $userArray[$field] = $this->$field;
        }

        return json_encode($userArray);
    }

    public function needsResizing($url)
    {
        return strpos($url, '.com') !== false;
    }
}
