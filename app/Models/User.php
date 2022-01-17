<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Laravel\Cashier\Billable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'real_name',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'last_seen',
        // your other new column
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getPosts()
    {
        return $this->hasMany('App\Models\Post', 'user_id', 'id');
    }
    public function services()
    {
        return $this->hasMany('App\Models\Service', 'user_id', 'id');
    }

    public function getAge()
    {
        return Carbon::parse($this->birth_date)->age;
    }

    public function getProfilePicture()
    {
        if (!empty($this->profile_picture)) {
            return $this->profile_picture;
        } else {
            return "/temp-services/images/profile.jpg";
        }
    }
}
