<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasMateri extends Model
{
    protected $table = 'kelas_materi';
    protected $fillable = [
        'materi_id',
        'kelas_id',
    ];
    public function materi()
    {
        return $this->belongsTo('App\materi');
    }
    public function kelas()
    {
        return $this->belongsTo('App\kelas');
    }
}
