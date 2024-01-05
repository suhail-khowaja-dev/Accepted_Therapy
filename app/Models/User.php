<?php

namespace App\Models;

use App\Models\Message;
use App\Models\UserLink;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'actual_password',
        'role',
        'address',
        'city',
        'state',
        'zip',
        'country',
        'link_expire_count',
        'status',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function get_user_links(){
       return $this->hasMany(UserLink::class);
    }


    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function for_user_links(){
        return $this->hasMany(User::class, 'id','link_id');
    }


    public function package(){
        return $this->hasMany(PackageSubscriber::class, 'user_id')->orderBy('id','desc')->take(1);
    }

}
