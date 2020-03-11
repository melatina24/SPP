<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Model\Siswa::class, function (Faker $faker) {
    return [
        // 'nisn'=>'',
        // 'nis'=>'',
        // 'nama'=>$faker->name,
        // 'jenis_kelamin'=>$faker->randomElement(['P','L']),
        // 'no_telp'=>'',
        // 'alamat'=>$faker->name,
    ];
});
