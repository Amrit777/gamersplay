<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Client\Response;

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

    public function selectClassImage()
    {
        $count = $this->images->count();
        $class = "";
        switch ($count) {
            case '1':
                $class = "width-1 col-12";
                break;
            case '2':
                $class = "width-2 col-md-6";
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

