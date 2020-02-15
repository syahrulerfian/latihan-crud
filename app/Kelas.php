<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['kelas'];
    public $timestamps = true;


public function siswa(){
    return $this->hasMany('App\Siswa','id_kelas');
    }
    public function mapel() {
        return $this->belongsToMany(
            'App\Mapel',
            'mapel_siswa',
            'id_siswa',
            'id_mapel'
        );
    }
}
