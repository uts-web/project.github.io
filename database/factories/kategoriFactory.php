<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\kategori;
use Faker\Generator as Faker;

$factory->define(kategori::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'genre' => $faker->sentence(20),
        'featured_image' => $faker->imageurl('cats', true),
        'featured_trailer'=> $faker->imageurl('cats', true),
        'bukti_pembayaran' => $faker->imageurl('cats',true)
    ];
});
