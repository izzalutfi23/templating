<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMatkul extends Model
{
    protected $table = 'matkul';
    protected $fillable = ['nama_m', 'kelas', 'hari'];
}
