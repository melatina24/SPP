<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table='petugas';
    protected $fillable=['id','nama','jenis_kelamin','level','user_id','alamat','no_telp'];
}
