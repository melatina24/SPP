<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    protected $table='jurusan';
    protected $fillable=['id','singkatan','nama'];

    public function kelas()
    {
    	return $this->hasMany(Model\jurusan::class);
    }
}
