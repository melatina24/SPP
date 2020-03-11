<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJurusanthnAjaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusanthn_ajaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jurusan_id');
            $table->integer('thn_ajaran_id');
            $table->timestamps();
             $table->foreign('jurusan_id')->references('id')->on('jurusan')->onDelete('cascade');
            $table->foreign('thn_ajaran_id')->references('id')->on('thn_ajaran')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurusanthn_ajaran');
    }
}
