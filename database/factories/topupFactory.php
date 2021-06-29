<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\topup;
use Faker\Generator as Faker;

$factory->define(topup::class, function (Faker $faker) {
    return [
        'jumlah_diamond' => $faker->sentence(),
        'harga' => $faker->sentence(20),
    ];
});