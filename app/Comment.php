<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Auth;
class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'user_id',
        'type_id',
        'type',
        'image'
    ];

    protected $appends = ['comments', 'published_at', 'has_dribble', 'dribbles_count', 'html_content'];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function getHasDribbleAttribute()
    {
        if (Auth::check()) {
            $user = Auth::user();

            $dribble = Dribble::where('type_id', $this->id)
                ->where('user_id', $user->id)
                ->where('type', 'comment')->first();

            return !empty($dribble);
        } else {
            return false;
        }
    }

    public function getDribblesCountAttribute()
    {
        return Dribble::where('type_id', $this->id)
            ->where('type', 'comment')->get()->count();
    }

    public function getHtmlContentAttribute()
    {
        return nl2br(str_replace("\n\n", "\n", $this->content));
    }


    public function getCommentsAttribute()
    {
        return Comment::where("type_id", $this->id)
            ->orderBy('created_at', 'DESC')
            ->with('user')
            ->where('type', 'comment')
            ->get();
    }

    public function getPublishedAtAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
