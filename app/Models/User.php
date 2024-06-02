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

        public function isAdmin()
        {
            return $this -> role === 'Admin';
        }

    protected $table = 'users';
    protected $primaryKey = 'id_user';    
    protected $fillable = [
        'email',
        'password',
        'namaOrganisasi',
        'nama_pj',
        'no_telp',
        'fakultas',
        'prodi',
        'role',
        'plain_pw'
    ];

    public $timestamps = false;

}
