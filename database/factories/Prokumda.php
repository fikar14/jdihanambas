<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProkumDaerah;
use Faker\Generator as Faker;

$factory->define(ProkumDaerah::class, function (Faker $faker) {
    return [
        'bentuk' => $faker->bentuk,
        'no_per' => $faker->word,
        'tahun' => $faker->word,
        'judul' => $faker->unique()->word,
        'katalog' => $faker->word,
        'abstrak' => $faker->word,
    ];
});
