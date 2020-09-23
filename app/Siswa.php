<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Siswa extends Authenticatable
{
    use Notifiable;

    protected $table = 'siswa';
    protected $primaryKey = "id";
    protected $fillable = [
        'name', 'nis', 'nisn', 'tempat_lahir', 'tanggal_lahir', 'jk', 'email', 'password', 'level', 'sandi'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
}
