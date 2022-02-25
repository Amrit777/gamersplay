<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    protected $fillable = [
        'user_id',
        'imageable_id',
        'imageable_type',
        'file_name',
        'featured',
        'created_at',
        'updated_at',
        'name',
        'extension'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function imageable()
    {
        return $this->morphTo();
    }
    public function download()
    {
        $filepath = Storage::url($this->file_name);
        return $filepath;
    }

    public static function saveImage($image, $foldername, $userid = null)
    {

        $imageExtension = $image->getClientOriginalExtension();
        $imageName = $image->getClientOriginalName();
        $imageName = pathinfo($imageName);
        $imageNameWE = preg_replace('/\s+/', '_', $imageName['filename']);
        $imageName = $imageNameWE . '.' . $imageExtension;

        $first = 1;
        $separator = '-';
        $userpath = '';
        if ($userid) {
            $userpath = '/' . $userid;
        }

        while (file_exists(storage_path() . '/app/public/' . $foldername . $userpath . '/' . $imageName)) {

            preg_match('/(.+)' . $separator . '([0-9]+)$/', $imageName, $match);

            $imageName = isset($match[2]) ? $match[1] . $separator . ($match[2] + 1) : $imageNameWE . $separator . $first;
            $first++;
            $imageName = $imageName . '.' . $imageExtension;
        }

        $imagepath = storage_path() . '/app/public/' . $foldername . '/' . $userid;

        $image->move($imagepath, $imageName);

        $return_path = '/storage/' . $foldername . $userpath . '/' . $imageName;
        return $return_path;
    }

    public function getMovie()
    {
        $video = Storage::disk('public')->get($this->file_name);
        $response = Response::make($video, 200);
        $response->header('Content-Type', 'video/mp4');
        return $response;
    }
    // public function mediaPage()
    // {
    //     if (empty($this->imageable)) {
    //         return null;
    //     }
    //     $model = $this->imageable_type;
    //     $url = Constants::FRONTEND_URL;

    //     switch ($model) {
    //         case Idea::class:
    //             $url .= 'ideas/' . $this->imageable->slug;
    //             break;
    //         case Callout::class:
    //             $url .= 'callouts/details/' . $this->imageable->slug;
    //             break;
    //     }
    //     return $url;
    // }
    // public function imageUrl()
    // {
    //     $model = $this->imageable_type;
    //     $url = Constants::FRONTEND_URL;
    //     if (empty($this->imageable)) {
    //         return null;
    //     }
    //     switch ($model) {
    //         case Idea::class:
    //             $url .= 'admin/idea/edit/' . $this->imageable->id;
    //             break;
    //         case Callout::class:
    //             $url .= 'admin/callout/edit/' . $this->imageable->id;
    //             break;
    //         case User::class:
    //             $url .= 'admin/user/edit/' . $this->imageable->id;
    //             break;
    //         case Page::class:
    //             $url .= 'admin/pages/edit/' . $this->imageable->id;
    //             break;
    //     }
    //     return $url;
    // }
}
