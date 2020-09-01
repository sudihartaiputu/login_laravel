<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiodataSiswa extends Model
{
    protected $table = 'biodata_siswa';
    protected $fillable = [
        'siswa_id',
        'kelas_id',
        'nik',
        'nama_ayah',
        'nama_ibu',
        'alamat',
        'no_hp',
        'foto',
    ];
    public function siswa()
    {
        return $this->belongsTo('App\Siswa', 'siswa_id');
    }
}
