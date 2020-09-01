<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Guru extends Authenticatable
{
    use Notifiable;

    protected $table = 'guru';
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'nip',
        'tempat_lahir',
        'tanggal_lahir',
        'jk',
        'email',
        'password',
        'level',
        'sandi',
        'nik',
        'foto',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function gurukelas()
    {
        return $this->hasMany('App\Gurukelas', 'guru_id');
    }
    public function materi()
    {
        return $this->hasMany('App\Materi');
    }
}
