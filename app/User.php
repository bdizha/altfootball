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

    protected $appends = ['name', 'resized_image', 'is_self', 'follower', 'fanbases', 'requested', 'requesters'];

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
        return Fanbase::whereHas('followers', function ($query) {
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

    public function getResizedImageAttribute()
    {
        $dimensions = "width=300&height=300";
        try {
            $image = Redis::get('fan:image:' . $this->id);
            if (empty($image)) {

                if (empty($this->image)) {
                    $u = DB::table('users')
                        ->where('created_at', '>', Carbon::parse('22/08/2017')->subDays(1))
                        ->where('created_at', '<', Carbon::parse('22/08/2017')->addDays(1))
                        ->inRandomOrder()
                        ->first();

                    if (!empty($u->image)) {
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
}
