<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
   protected $table='kelas';
   protected $fillable=['id','nama_kelas','jurusan_id','thnajaran_id'];


   public function tahunAjaran()
   {
   		return $this->belongsTo('App\Model\tahunAjaran','thnajaran_id');
   }
   public function jurusan()
   {
   		return $this->belongsTo('App\Model\jurusan','jurusan_id');
   }
}
