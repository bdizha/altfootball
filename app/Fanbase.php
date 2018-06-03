<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Imgix\UrlBuilder;
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
        'slug',
        'small_image',
        'thumb_image',
        'big_image',
        'big_cover'
    ];

    protected $appends = ['initials', 'is_owner', 'camel', 'follower', 'small_x', 'thumb_x', 'big_x', 'cover_x'];

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
        return $this->hasMany(Follower::class, 'followable_id', 'id')
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

            if (empty($follower->id) && !empty($this->id)) {
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


    public function getCamelAttribute()
    {
        $camel = str_replace(" ", "_", ucwords(str_slug($this->name, " ")));
        return "@" . $camel;
    }


    public function getIsOwnerAttribute()
    {
        return Auth::guard()->check() ? Auth::user()->id === $this->user_id : false;
    }

    public function getSmallXAttribute()
    {
        if (strpos($this->image, 'http') !== false) {
            $this->saveImage();
        }

        if (empty($this->small_image)) {
            try {
                $builder = new UrlBuilder("altfootball.imgix.net");
                $params = array("w" => 300, "h" => 300, "crop" => "faces", "fit" => "crop");
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
        if (strpos($this->image, 'http') !== false) {
            dd('...');
            $this->saveImage();
        }

        if (empty($this->thumb_image)) {
            try {
                $builder = new UrlBuilder("altfootball.imgix.net");
                $params = array("w" => 200, "h" => 200, "crop" => "faces", "fit" => "crop");
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
        if (strpos($this->image, 'http') !== false) {
            $this->saveImage();
        }

        if (empty($this->big_image)) {
            try {
                $builder = new UrlBuilder("altfootball.imgix.net");
                $params = array("w" => 420, "h" => 420, "crop" => "faces", "fit" => "crop");
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
        if (strpos($this->cover, '1024') !== false) {
            $this->saveCover();
        }

        if (empty($this->big_cover) || strpos($this->cover, '1024') === false) {
            try {
                $builder = new UrlBuilder("altfootball.imgix.net");
                $params = array("w" => 1024, "h" => 455);
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

        if (strpos($this->cover, 'http') !== false) {
            $this->saveCover();
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

            $this->small_image = '';
            $this->thumb_image = '';
            $this->big_image = '';
            $this->image = $imagePart;
            $this->save();

            return true;

        } catch (Exception $e) {
            return false;
        }
    }

    protected function saveCover()
    {
        try {
            // set cover images
            $imagePart = '/fanbases/' . md5($this->id . "_cover") . '.jpg';
            $filePart = '/images/' . $imagePart;
            $fileOutput = public_path('/') . $filePart;

            $imageContent = file_get_contents($this->cover);
            file_put_contents($fileOutput, $imageContent);

            $this->big_cover = '';

            $this->cover = $imagePart;
            $this->save();

            return true;

        } catch (Exception $e) {
            return false;
        }
    }

    public function getMeta()
    {
        $meta = [
            "url" => url()->current(),
            "title" => $this->name,
            "description" => $this->description,
            "image" => $this->getBigXAttribute()
        ];

        return $meta;
    }
}
