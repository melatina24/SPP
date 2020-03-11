<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table='siswa';
    protected $fillable=['id','nama','nisn','nis','alamat','jenis_kelamin','user_id','no_telp'];
}
