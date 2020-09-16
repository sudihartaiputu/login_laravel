<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = [
        'nama',
        'slug'
    ];
    public function post()
    {
        return $this->belongsToMany('App\Post');
    }
    public function posts()
    {
        return $this->hasMany('App\Posts');
    }
}
