<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gurukelas extends Model
{
    protected $table = "gurukelas";
    protected $fillable = [
        'guru_id',
        'mapel_id',
        'kelas_id',
    ];
    public function guru()
    {
        return $this->belongsTo('App\Guru', 'guru_id');
    }
    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'kelas_id');
    }
    public function mapel()
    {
        return $this->belongsTo('App\Mapel', 'mapel_id');
    }
}
