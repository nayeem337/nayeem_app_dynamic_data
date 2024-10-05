<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
        'password' => 'hashed',
    ];




    public static function getAllUser()
    {
        return [
            0 => [
                'id'        => 1,
                'name'      => 'Jannatul Nayeem',
                'email'     => 'jannatulnayeem333@gmail.com',
                'password'  => '123123'
            ],
            1 => [
                'id'        => 2,
                'name'      => 'Ahasan Limon',
                'email'     => 'ahasanlimon444@gmail.com',
                'password'  => '123456'
            ],
            2 => [
                'id'        => 3,
                'name'      => 'Kabir Hoshain',
                'email'     => 'kabir@gmail.com',
                'password'  => '789789'
            ],
            3 => [
                'id'        => 4,
                'name'      => 'Arham Ahmed',
                'email'     => 'arham@gmail.com',
                'password'  => '010101'
            ],
        ];
    }

}
