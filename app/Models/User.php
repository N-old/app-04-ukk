<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Ulasan;
use App\Models\Pinjam;
use App\Models\Koleksi;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $guarded = ['id'];
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    //     'role',
    // ];

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

    public function getRouteKeyName(){
        return 'slug';
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'user_id');
    }

    public function pinjam()
    {
        return $this->hasMany(Pinjam::class, 'user_id');
    }

    public function koleksi()
    {
        return $this->hasMany(Koleksi::class, 'user_id');
    }
}
