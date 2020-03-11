<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// --------------------------Tahun Ajaran-------------------------------------
Route::get('/thn_ajaran','TahunAjaran\tahunAjaranController@index');
Route::post('/thn_ajaran_create','TahunAjaran\tahunAjaranController@create');
Route::get('thn_ajaran_destroy{id}','TahunAjaran\tahunAjaranController@destroy');

//-----------------------------------Kelas----------------------------------------
Route::get('/kelas','Kelas\KelasController@index');
Route::post('/kelas_create','Kelas\KelasController@create');
Route::get('/kelas_edit{id}','Kelas\KelasController@edit');
Route::post('/kelas_update','Kelas\KelasController@update');
Route::get('/kelas_destroy{id}','Kelas\KelasController@destroy');

//----------------------------------Jurusan---------------------------------------

Route::get('/jurusan','Jurusan\JurusanController@index');
Route::post('/jurusan_create','Jurusan\JurusanController@create');
Route::get('/jurusan_edit{id}','Jurusan\JurusanController@edit');
Route::post('/jurusan_update','Jurusan\JurusanController@update');
Route::get('jurusan_destroy{id}','Jurusan\JurusanController@destroy');

//-------------------------------------Siswa------------------------------------
Route::get('/siswa','Siswa\SiswaController@index');
Route::post('/siswa_create','Siswa\SiswaController@create');
Route::get('/siswa_destroy{id}','Siswa\SiswaController@destroy');


// -------------------------Petugas--------------------------------------------
Route::get('/petugas','Petugas\PetugasController@index');
Route::post('/petugas_create','Petugas\PetugasController@create');
Route::get('/petugas_edit{id}','Petugas\PetugasController@edit');
Route::get('/petugas_destroy{id}','Petugas\PetugasController@destroy');