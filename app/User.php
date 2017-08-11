<?php

namespace App;

use Auth;
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
        'is_onboarded',
        'token',
    ];

    protected $sluggable = [
        'build_from' => ['first_name', 'last_name'],
        'save_to' => 'slug',
    ];

    protected $appends = ['name', 'resized_image', 'is_self', 'fan'];

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
        return $this->hasMany(Post::class);
    }

    public function fanbases()
    {
        return $this->belongsToMany(Fanbase::class, 'users_fanbases');
    }

    public function requesters()
    {
        return $this->hasMany('App\Fan', 'requested_id', 'id');
    }

    public function requested()
    {
        return $this->hasMany('App\Fan', 'requester_id', 'id');
    }

    public function fans()
    {
        return Fan::where('requester_id', $this->id)
            ->orWhere('requested_id', $this->id)
            ->get();
    }

    public function followers()
    {
        $userId = $this->id;
        return User::whereHas('requested', function ($query) use($userId) {
            $query->where('requested_id', $userId);
        })
            ->get();
    }

    public function following()
    {
        $userId = $this->id;
        return User::whereHas('requesters', function ($query) use($userId) {
            $query->where('requester_id', $userId);
        })
            ->get();
    }

    /**
     * Create a string based on the first and last name of a person.
     */
    public function getSluggableString()
    {
        return sprintf('%s %s', $this->first_name, $this->last_name);
    }

    public function getResizedImageAttribute($dimensions = "width=300&height=300")
    {
        try {
            $image = Redis::get('fan:image:' . $this->id);
            if (empty($image)) {

                if (empty($this->image)) {
                    $u = User::where("image", "!=", "")->orderByRaw("RAND()")->first();

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

    public function getIsSelfAttribute()
    {
        return Auth::guard()->check() ? Auth::user()->id === $this->id : false;
    }

    public function getFanAttribute()
    {
        $user = Auth::user();

        if (Auth::guard()->check() && $this->id != $user->id) {
            $data = [
                'requester_id' => $this->id,
                'requested_id' => $user->id
            ];

            $ids = [$this->id, $user->id];
            $fan = Fan::whereIn('requester_id', $ids)
                ->whereIn('requested_id', $ids)
                ->first();

            if (empty($fan->id)) {
                $fan = Fan::create($data);
            }

            return $fan;
        }

        return new Fan();
    }

    public function getDomain()
    {
        return str_replace("http://", "", $this->website);
    }

    public function getJson()
    {
        return $this->toJson();
    }
}
