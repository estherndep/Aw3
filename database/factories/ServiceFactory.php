<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence(),
        'description'=> $faker->paragraphs(rand(2,5), true),
    ];
});