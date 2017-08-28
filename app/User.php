<?php

namespace App;

use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Redis;
use MartinBean\Database\Eloquent\Sluggable;
use DB;
use Carbon\Carbon;

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
    ];

    protected $sluggable = [
        'build_from' => ['first_name', 'last_name'],
        'save_to' => 'slug',
    ];

    protected $appends = ['name', 'small_image', 'thumb_image', 'is_self', 'follower', 'fanbases', 'requested', 'requesters'];

    public function getNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
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

    /**
     * Get all of the user's followers.
     */
    public function followers()
    {
        return $this->morphMany(Follower::class, 'followable');
    }

    public function getFanbasesAttribute()
    {
        return user::whereHas('followers', function ($query) {
            $query->where('user_id', $this->id)
                ->where('followable_type', 'App\Fanbase');
        })
            ->get();
    }

    public function getRequestedAttribute()
    {
        return self::whereHas('followers', function ($query) {
            $query->where('user_id', $this->id)
                ->where('is_active', true)
                ->where('followable_type', 'App\User');
        })
            ->get();
    }

    public function getRequestersAttribute()
    {
        return self::whereHas('followers', function ($query) {
            $query->where('followable_id', $this->id)
                ->where('is_active', true)
                ->where('followable_type', 'App\User');
        })
            ->get();
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
            $follower = Follower::where('user_id',  $user->id)
                ->where('followable_id', $this->id)
                ->where('followable_type', 'App\User')
                ->first();

            if (empty($follower->id)) {
                $follower = Follower::create([
                    'user_id' => $user->id,
                    'followable_id' => $this->id,
                    'followable_type' => 'App\User'
                ]);
            }

            return $follower;
        }

        $follower = new Follower();
        $follower->followable_id = $this->id;
        $follower->followable_type = 'App\User';

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

    public function getSmallImageAttribute()
    {
        $image = Redis::get('user:image:small:' . $this->id);
        if (empty($image)) {
            try {
                $cloudImage = \Cloudinary\Uploader::upload(
                    $this->image,
                    array(
                        "quality" => 100,
                        "crop" => "fill",
                        "width" => 200,
                        "height" => 200
                    ));

                $image = $cloudImage['url'];

                Redis::set('user:image:small:' . $this->id, $image);
            } catch (\Exception $e) {
            }
        }
        return $image;
    }


    public function getThumbImageAttribute()
    {
        $image = Redis::get('user:image:thumb:' . $this->id);
        if (empty($image)) {
            try {
                $cloudImage = \Cloudinary\Uploader::upload(
                    $this->image,
                    array(
                        "crop" => "thumb",
                        "quality" => 100,
                        "width" => 100,
                        "height" => 100
                    ));

                $image = $cloudImage['url'];
                Redis::set('user:image:thumb:' . $this->id, $image);
            } catch (\Exception $e) {
            }
        }
        return $image;
    }
}
