<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Image;

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
        return $this->morphMany(Image::class, 'imageable');
    }

    public function postAuthor()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected $with = ['postAuthor'];
}
