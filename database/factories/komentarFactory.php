<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\komentar;
use Faker\Generator as Faker;

$factory->define(komentar::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'content' => $faker->realText(2000),
        'featured_image' => $faker->imageurl(50, 50, true)
    ];
});
