<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengaturanSkl extends Model
{
    protected $table = 'pengaturanskl';
    protected $fillable = [
        'nama_sekolah',
        'npsn',
        'nss',
        'nama_kepsek',
        'nip_kepsek',
        'alamat',
        'kota',
        'provinsi',
        'stempel',
        'ttd',
        'wtempel',
        'wttd',
        'tanggal_pengumuman'
    ];
}
