<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'kategori_id',
        'users_id',
        'judul',
        'konten',
        'gambar',
        'slug'
    ];
    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tags');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
