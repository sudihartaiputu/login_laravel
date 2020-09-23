<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Materi extends Model
{
    use SoftDeletes;

    protected $table = 'materi';
    protected $fillable = [
        'mapel_id',
        'guru_id',
        'judul',
        'konten',
        'gambar',
        'slug',

    ];
    public function mapel()
    {
        return $this->belongsTo('App\Mapel');
    }
    public function guru()
    {
        return $this->belongsTo('App\User');
    }
    public function kelas()
    {
        return $this->belongsToMany('App\Kelas');
    }
    public function kelasmateri()
    {
        return $this->hasMany('App\KelasMateri');
    }
}
