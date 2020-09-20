<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = [
        'nama',
        'slug'
    ];
    public function posts()
    {
        return $this->hasMany('App\Posts');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
