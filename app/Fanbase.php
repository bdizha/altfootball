<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MartinBean\Database\Eloquent\Sluggable;
use Illuminate\Support\Facades\Redis;
use Auth;

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

    protected $appends = ['resized_image', 'initials', 'is_owner'];

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

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_fanbases');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'fanbases_posts');
    }

    public function getIsOwnerAttribute()
    {
        return Auth::guard()->check() ? Auth::user()->id === $this->user_id : false;
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

    public function getCover($dimensions = "width=1440&height=360")
    {
        try {
            $image = Redis::get('fanbase:cover:' . $this->id);
            if (empty($image)) {

                if(empty($this->cover)){
                    $this->cover = $this->covers[rand(0, count($this->covers) - 1)];
                    $this->save();
                }

                $image = file_get_contents("http://images.altfootball.dev?url=" . $this->cover . "&" . $dimensions);
                Redis::set('fanbase:cover:' . $this->id, $image);
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

    public function getResizedCoverAttribute()
    {
        $image = "";
        preg_match_all('/(\w+)\s*=\s*(?|"([^"]*)"|\'([^\']*)\')/', $this->getCover(), $imageParts, PREG_SET_ORDER);

        if(!empty($imageParts[3][2])){
            $imageParts = explode(" ", $imageParts[3][2]);
        }

        if(!empty($imageParts[0])){
            $image = $imageParts[0];
        }

        return $image;
    }

    public function toJS(){
        return json_encode($this->toArray(), JSON_HEX_APOS);
    }
}
