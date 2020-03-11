<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tahunAjaran extends Model
{
    protected $table='thn_ajaran';
    protected $fillable=['id','label'];

    public function kelas()
    {
    	return $this->hasMany('App\Model\Kelas');
    }
}
