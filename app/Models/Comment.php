<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'parent_id',
        'body',
        'commentable_id',
        'commentable_type'
    ];


    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id')->orderBy('created_at', 'DESC')->with('user');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
