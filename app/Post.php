<?php

namespace App;

use Auth;
use Carbon\Carbon;
use Craft\Exception;
use Illuminate\Database\Eloquent\Model;
use Imgix\UrlBuilder;
use MartinBean\Database\Eloquent\Sluggable;

class Post extends Model
{
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @$array
     */
    protected $fillable = [
        'title',
        'credit',
        'external_url',
        'summary',
        'image',
        'content',
        'user_id',
        'created_at',
        'slug',
        'small_image',
        'thumb_image',
        'big_image'
    ];

    protected $wordsPerMinute = 170;

    protected $appends = ['comments', 'limited_comments', 'dribbles', 'published_at', 'has_dribble', 'fanbase', 'reading_time', 'small_x', 'thumb_x', 'big_x'];

    public function getPublishedAtAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function getSlugColumnName()
    {
        return 'slug';
    }

    public function getSluggableString()
    {
        return $this->title;
    }

    public function getHasDribbleAttribute()
    {
        if (Auth::check()) {
            $user = Auth::user();

            $dribble = Dribble::where('type_id', $this->id)
                ->where('user_id', $user->id)
                ->where('type', 'post')->first();

            return !empty($dribble);
        } else {
            return false;
        }
    }

    public function getCommentsAttribute()
    {
        return Comment::where("type_id", $this->id)
            ->orderBy('created_at', 'DESC')
            ->with('user')
            ->where('type', 'post')
            ->get();
    }

    public function getLimitedCommentsAttribute()
    {
        return Comment::where("type_id", $this->id)
            ->orderBy('created_at', 'DESC')
            ->with('user')
            ->where('type', 'post')
            ->take(2)
            ->get();
    }

    public function getDribblesAttribute()
    {
        return Dribble::where("type_id", $this->id)
            ->orderBy('created_at', 'DESC')
            ->with('user')
            ->where('type', 'post')
            ->get();
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tags_posts');
    }

    public function views()
    {
        return $this->belongsToMany(View::class, 'tags_posts');
    }

    public function fanbases()
    {
        return $this->belongsToMany(Fanbase::class, 'fanbases_posts');
    }

    /**
     * The fanbase to which the post belongs
     */
    public function getFanbaseAttribute()
    {
        foreach ($this->fanbases as $fanbase) {
            return $fanbase;
        }
        return new Fanbase();
    }

    public function getHtmlContent()
    {
        $searches = [
            '<p><inline style="background-color: initial; font-size: 1em;"><br></inline></p>',
            '<p><span style="background-color: initial; font-size: 1em;"><br></span></p>',
            '<p><i class="wrapper" contenteditable="false"></i>
</p>'
        ];

        $content = str_replace($searches, '', $this->content);
        $content = nl2br($content);
        return str_replace("height=", "", str_replace("width=", "", $content));
    }

    public function getSmallXAttribute()
    {
        if (empty($this->small_image)) {
            try {
                $builder = new UrlBuilder("altfootball.imgix.net");
                $builder->setSignKey("arQnS85SyXJAFH8r");
                $params = array("w" => 384, "h" => 216);
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
        if (empty($this->thumb_image)) {
            try {
                $builder = new UrlBuilder("altfootball.imgix.net");
                $builder->setSignKey("arQnS85SyXJAFH8r");
                $params = array("w" => 100, "h" => 100);
                $url = $builder->createURL($this->image, $params);

//                dd($url . ">>>>>>");

                $this->thumb_image = $url;
                $this->save();

            } catch (\Exception $e) {
            }
        }
        return $this->thumb_image;
    }

    public function getBigXAttribute()
    {
        if (empty($this->big_image)) {
            try {
                $builder = new UrlBuilder("altfootball.imgix.net");
                $builder->setSignKey("arQnS85SyXJAFH8r");
                $params = array("w" => 1000, "h" => 695);
                $url = $builder->createURL($this->image, $params);

                $this->big_image = $url;
                $this->save();

            } catch (\Exception $e) {
            }
        }
        return $this->big_image;
    }


    public function getReadingTimeAttribute()
    {
        $words = explode(" ", $this->content);
        $totalWords = count($words);
        $readingTimeMinutes = floor($totalWords / $this->wordsPerMinute);

        return (!empty($readingTimeMinutes) ? $readingTimeMinutes : "< 1") . " min read";
    }

    public function getMeta($url)
    {
        $meta = [
            "url" => $url,
            "title" => $this->title,
            "description" => $this->summary,
            "image" => $this->getBigImageAttribute()
        ];

        return $meta;
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
            $imagePart = '/posts/' . md5($this->id) . '.jpg';
            $filePart = '/images/' . $imagePart;
            $fileOutput = public_path('/') . $filePart;

            $imageContent = file_get_contents($this->image);
            file_put_contents($fileOutput, $imageContent);

            $this->image = $imagePart;
            $this->save();
            return true;

        } catch (Exception $e) {
            return false;
        }
    }
}
