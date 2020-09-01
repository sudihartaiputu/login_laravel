<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = [
        'nama',
        'slug'
    ];
    public function materi()
    {
        return $this->belongsToMany('App\Materi');
    }
}
