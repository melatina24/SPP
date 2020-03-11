<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama')->nullable();
            $table->integer('nis')->nullable();
            $table->unsignedBigInteger('nisn')->nullable();
            $table->string('no_telp');
            $table->text('alamat');
            // $table->unsignedBigInteger('kelas_id');
            $table->enum('jenis_kelamin',['L','P'])->default('L');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('set null');
            // $table->foreign('user_id')->references('id')->on('user')->onDelete('set null');
            // $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('')
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
