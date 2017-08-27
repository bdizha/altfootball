<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;
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
        'user_id',
        'name',
        'stamp',
        'description',
        'image',
        'cover',
        'access',
        'slug'
    ];

    protected $appends = ['thumb_image', 'small_image', 'big_image', 'initials', 'is_owner', 'follower'];

    protected $covers = [
        "https://res.cloudinary.com/dq82ikfq4/image/upload/w_900,c_limit/v1502905207/lxs2sjouxjlumcg4wnvz.jpg",
        "https://res.cloudinary.com/dq82ikfq4/image/upload/w_900,c_limit/v1502905177/h9broabdo5soffuaozvs.jpg",
        "http://www.tottenhamhotspur.com/uploadedImages/Shared_Assets/Images/News_images/Legends/woody_lcfinal_hero.jpg",
        "https://www.psg.fr/img/image/upload/t_image_1440x850,q_auto/js44h6m3mdbr8ndbqbfr",
        "https://www.arsenal.com/sites/default/files/styles/xxlarge/public/images/alexis_4.jpg",
        "https://res.cloudinary.com/dq82ikfq4/image/upload/w_900,c_limit/v1502906549/c45hdp6tq81rbodydccd.jpg",
        "https://res.cloudinary.com/dq82ikfq4/image/upload/w_900,c_limit/v1502905257/jr5xnoieva486ofpmqpg.jpg",
        "https://res.cloudinary.com/dq82ikfq4/image/upload/w_900,c_limit/v1502905318/cxyhvdny6llyiqqfkdf0.jpg",
        "https://res.cloudinary.com/dq82ikfq4/image/upload/w_900,c_limit/v1502907179/bkn900qwxijuqxwpp7fo.jpg",
        "https://res.cloudinary.com/dq82ikfq4/image/upload/w_900,c_limit/v1502905275/q1kpkkq75ratnic2qez8.jpg",
        "https://res.cloudinary.com/dq82ikfq4/image/upload/w_900,c_limit/v1502905299/vcchubpmz4jg5dvomutv.jpg",
        "https://media-public.fcbarcelona.com/20157/0/document_thumbnail/20197/127/111/28/52195199/1.0-2/52195199.jpg"
    ];

    public function getInitialsAttribute()
    {
        $nameArray = explode(" ", $this->name);
        $stamp = "";
        foreach ($nameArray as $part) {
            if (ctype_alnum($part) && strlen($stamp) < 3) {
                $stamp .= strtoupper($part[0]);
            }
        }

        return $stamp;
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

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'fanbases_posts');
    }

    /**
     * Get all of the fanbase's followers.
     */
    public function followers()
    {
        return $this->morphMany(Follower::class, 'followable');
    }

    public function getFollowerAttribute()
    {
        $user = Auth::user();

        if (Auth::guard()->check()) {
            $follower = Follower::where('user_id', $user->id)
                ->where('followable_id', $this->id)
                ->where('is_active', true)
                ->where('followable_type', 'App\Fanbase')
                ->first();

            if (empty($follower->id)) {
                $follower = Follower::create([
                    'user_id' => $user->id,
                    'followable_id' => $this->id,
                    'followable_type' => 'App\Fanbase'
                ]);
            }

            return $follower;
        }

        $follower = new Follower();
        $follower->followable_id = $this->id;
        $follower->followable_type = 'App\Fanbase';

        return $follower;
    }


    public function getIsOwnerAttribute()
    {
        return Auth::guard()->check() ? Auth::user()->id === $this->user_id : false;
    }

    public function getSmallImageAttribute()
    {
        $image = Redis::get('fanbase:image:small:' . $this->id);
        if (empty($image)) {
            $cloudImage = \Cloudinary\Uploader::upload(
                $this->image,
                array(
                    "quality" => 100,
                    "crop" => "limit",
                    "width" => 400,
                    "height" => 400
                ));

            $image = $cloudImage['url'];

            Redis::set('fanbase:image:small:' . $this->id, $image);
        }
        return $image;
    }


    public function getBigImageAttribute()
    {
        $image = Redis::get('fanbase:image:big:' . $this->id);
        if (empty($image)) {
            $cloudImage = \Cloudinary\Uploader::upload(
                $this->image,
                array(
                    "crop" => "fill",
                    "quality" => 100,
                    "width" => 1400,
                    "height" => 360,
                    "x" => 0,
                    "y" => 0
                ));

            $image = $cloudImage['url'];
            Redis::set('fanbase:image:big:' . $this->id, $image);
        }
        return $image;
    }


    public function getThumbImageAttribute()
    {
        $image = Redis::get('fanbase:image:thumb:' . $this->id);
        if (empty($image)) {
            $cloudImage = \Cloudinary\Uploader::upload(
                $this->image,
                array(
                    "crop" => "thumb",
                    "quality" => 100,
                    "width" => 200,
                    "height" => 200
                ));

            $image = $cloudImage['url'];
            Redis::set('fanbase:image:thumb:' . $this->id, $image);
        }
        return $image;
    }
}
