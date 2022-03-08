<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'service_id',
        'state_id',
        'user_id',
        'created_at',
        'type_id'
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable')->where('type_id', 1);
    }
    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable')->where('state_id', 1);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->with('likes');
    }
    public function userliked()
    {
        if (Auth::check()) {
            $model = Like::where('likeable_id', $this->id)->where('user_id', Auth::user()->id)->first();
            if (!empty($model)) {
                if ($model->state_id == 1) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        return false;
    }

    public function likedPost()
    {
        if (Auth::check()) {
            return Like::where("likeable_id", $this->id)->where('user_id', Auth::user()->id)->where('state_id', 1)->count();
        }
        return 0;
    }
    public function selectClassImage()
    {
        $count = $this->images->count();
        $class = "";
        switch ($count) {
            case '1':
                $class = "width-1 col-12";
                break;
            case '2':
                $class = "width-2";
                break;
            case '3':
                $class = "width-3";
                break;
            case '4':
                $class = "width-4";
                break;
            default:
                $class = "";
                break;
        }
        return $class;
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable')->where('type_id', 1);
    }

    public function postAuthor()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected $with = ['postAuthor'];
}
