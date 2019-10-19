<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhsmodel extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama', 'kdmatkul', 'NRP', 'email', 'jurusan'];
    public $timestamps = false;

    
    public function modelmatkul(){
    	return $this->belongsTo(ModelMatkul::class);
    }
}
