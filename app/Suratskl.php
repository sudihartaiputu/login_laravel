<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratskl extends Model
{
    protected $table = 'suratskl';
    protected $fillable = [
        'nama_surat',
        'tgl_surat',
        'header',
        'pembuka',
        'isi_surat',
        'penutup'
    ];
}
