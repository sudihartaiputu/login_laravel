<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = [
        'nama',
        'slug'
    ];
    public function materi()
    {
        return $this->belongsToMany('App\Materi');
    }
    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }
}
