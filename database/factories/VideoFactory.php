<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'url' => $faker->imageUrl(800, 600),
        'post_id' => $faker->numberBetween(1, 1500),
    ];
});
