<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhsmodel extends Model
{
    protected $table = 'Mahasiswa';
    protected $fillable = ['nama', 'NRP', 'email', 'jurusan'];
    public $timestamps = false;
}
