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
        'plain_password', 
        'profile',
        'verify_key',
        'role',
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

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Define the relationship with the AdminProfile.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function adminProfile()
    {
        return $this->hasOne(AdminProfile::class, 'id_user');
    }

    /**
     * Define the relationship with the KaryawanProfile.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function karyawanProfile()
    {
        return $this->hasOne(KaryawanProfile::class, 'id_user');
    }

    /**
     * Define the relationship with Transaksi.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'user_id');
    }
}
