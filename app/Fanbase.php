<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;
use MartinBean\Database\Eloquent\Sluggable;
use Imgix\UrlBuilder;

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
        'slug',
        'small_image',
        'thumb_image',
        'big_image',
        'big_cover'
    ];

    protected $appends = ['initials', 'is_owner', 'follower', 'small_x', 'thumb_x',  'big_x', 'cover_x'];

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

    public function users()
    {
        return  $this->hasMany(Follower::class, 'followable_id', 'id')
            ->orderBy("created_at", "DESC");
    }

    public function getFollowerAttribute()
    {
        $user = Auth::user();

        if (Auth::guard()->check()) {
            $follower = Follower::where('user_id', $user->id)
                ->where('followable_id', $this->id)
                ->where('is_active', true)
                ->where('type', 2)
                ->first();

            if (empty($follower->id)) {
                $follower = Follower::create([
                    'user_id' => $user->id,
                    'followable_id' => $this->id,
                    'type' => 2
                ]);
            }

            return $follower;
        }

        $follower = new Follower();
        $follower->followable_id = $this->id;
        $follower->type = 2;

        return $follower;
    }


    public function getIsOwnerAttribute()
    {
        return Auth::guard()->check() ? Auth::user()->id === $this->user_id : false;
    }

    public function getSmallXAttribute()
    {
        if (!empty($this->image)) {
            try {
                $builder = new UrlBuilder("altfootball.imgix.net");
                $builder->setSignKey("arQnS85SyXJAFH8r");
                $params = array("w" => 300, "h" => 300);
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
        if (!empty($this->image)) {
            try {
                $builder = new UrlBuilder("altfootball.imgix.net");
                $builder->setSignKey("arQnS85SyXJAFH8r");
                $params = array("w" => 200, "h" => 200);
                $url = $builder->createURL($this->image, $params);

                $this->thumb_image = $url;
                $this->save();

            } catch (\Exception $e) {
            }
        }
        return $this->thumb_image;
    }

    public function getBigXAttribute()
    {
        if (!empty($this->image)) {
            try {
                $builder = new UrlBuilder("altfootball.imgix.net");
                $builder->setSignKey("arQnS85SyXJAFH8r");
                $params = array("w" => 420, "h" => 420);
                $url = $builder->createURL($this->image, $params);

                $this->big_image = $url;
                $this->save();

            } catch (\Exception $e) {
            }
        }
        return $this->big_image;
    }

    public function getCoverXAttribute()
    {
        if (!empty($this->big_cover)) {
            try {
                $builder = new UrlBuilder("altfootball.imgix.net");
                $builder->setSignKey("arQnS85SyXJAFH8r");
                $params = array("w" => 400, "h" => 400);
                $url = $builder->createURL($this->cover, $params);

                $this->big_cover = $url;
                $this->save();

            } catch (\Exception $e) {
            }
        }
        return $this->big_cover;
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
            $imagePart = '/fanbases/' . md5($this->id) . '.jpg';
            $filePart = '/images/' . $imagePart;
            $fileOutput = public_path('/') . $filePart;

            $imageContent = file_get_contents($this->image);
            file_put_contents($fileOutput, $imageContent);

            $this->image = $imagePart;
            $this->save();

            // set cover images
            $imagePart = '/fanbases/' . md5($this->id . "_cover") . '.jpg';
            $filePart = '/images/' . $imagePart;
            $fileOutput = public_path('/') . $filePart;

            $imageContent = file_get_contents($this->cover);
            file_put_contents($fileOutput, $imageContent);

            $this->cover = $imagePart;
            $this->save();
            return true;

        } catch (Exception $e) {
            return false;
        }
    }
}
