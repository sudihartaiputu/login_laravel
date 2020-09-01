<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Siswaskl extends Authenticatable
{
    use Notifiable;

    protected $table = 'siswaskl';
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'nis',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'email',
        'password',
        'sandi',
        'foto',
        'jk',
        'level',
        'nopes',
        'kelas',
        'jurusan',
        'keterangan',
        'n_agama',
        'n_pkn',
        'n_bindo',
        'n_basing',
        'n_mtk',
        'n_sejindo',
        'n_pjs',
        'n_sbud',
        'n_prakarya',
        'n_minat1',
        'n_minat2',
        'n_minat3',
        'n_minat4',
        'n_minat5',
        'n_minat6',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
