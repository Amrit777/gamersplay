<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Image;
use Carbon\Carbon;
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
    public function postLikedUserNames()
    {
        $content = "";
        $names = "";
        $currentUser = "";
        $userLikes = $this->likes;
        $userLikesCount = $userLikes->count();
        $totalCount = $userLikesCount;
        $recordLimit = 3;
        // 1st case
        if (Auth::check()) {
            $user = Auth::user()->id;
            if ($this->userliked()) {
                $currentUser = "<span><strong>You</strong>";
                $userLikesLimited = $this->likes->where('user_id', '!=', $user)->take(2);
                $totalCount--;
            } else {
                $userLikesLimited = $this->likes->take($recordLimit);
            }
        } else {
            $userLikesLimited = $this->likes->take($recordLimit);
        }

        if ($userLikesCount > 0) {
            foreach ($userLikes as $key => $value) {
                $content .= '<a data-toggle="tooltip" title="' . $value->user->name . '" href="#" data-original-title="' . $value->user->name . '"><img alt="' . $value->user->name . '" src="' . $value->user->getImageThumbnail() . '"></a>';
            }
            foreach ($userLikesLimited as $key => $value) {
                $totalCount--;
                if (!empty($currentUser)) {
                    $names .= ",<b>" . $value->user->name . "</b>";
                } else {
                    if ($key == 0) {
                        $names .= "<span><strong>" . $value->user->name . "</strong>";
                    } else {
                        $names .= ",<b>" . $value->user->name . "</b>";
                    }
                }
            }
        }
        if (!empty($totalCount) && $totalCount > 0) {
            $names .= ' and <a href="#" title="">' . $totalCount . ' more</a>';
        }
        if (!empty($names)) {
            $names .= ' liked.</span>';
        }
        if (!empty($currentUser)) {
            if (!empty($names)) {
                $names = $currentUser . $names;
            } else {
                $names = $currentUser . ' liked.</span>';
            }
        }

        return $content . $names;
    }


    public function commentByUsers($offset = 0, $take = 3)
    {
        $content = "";
        $comments = $this->comments->skip($offset)->take($take);
        if (!empty($comments) && ($comments->count() > 0)) {
            foreach ($comments as $key => $value) {
                $content .= "<li class='comment-section_" . $this->id . "'>";
                $content .= '<div class="comet-avatar"><img src="' . $value->user->getProfilePicture() . '" alt=""> </div>';
                $content .= '<div class="we-comment">';
                $content .= '<h5><a href="time-line.html" title="">' . $value->user->name . '</a></h5>';
                $content .= '<p>' . $value->body . '</p>';
                $content .= '<div class="inline-itms comment-action-box">';
                $content .= '<span>' . Carbon::parse($value->created_at)->format('F d, Y') . '</span>';
                $content .= '<span class="comment-reaction likes heart';
                if ($value->userliked()) {
                    $content .= ' active-heart';
                }
                $content .= '" data-comment-post-id="' . $value->id . '" data-comment-reaction-id="' . $value->likedPost() . '">';
                $content .= ' <i class="fa fa-heart"></i>';
                $content .= ' <span id="liked_comment_count_' . $value->id . '"> ' . $value->likes->count() . '</span>';
                $content .= '</span>';
                $content .= '</div>';
                $content .= '</div>';
                $content .= "</li>";
            }
        }

        return $content;
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
