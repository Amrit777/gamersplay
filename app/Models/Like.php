<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'likeable_id',
        'likeable_type',
        'state_id',
        'user_id',
        'created_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
