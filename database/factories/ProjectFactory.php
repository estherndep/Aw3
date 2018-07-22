<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'name'=> $faker->sentence(),
        'location'=>$faker->word(),
        'date'=> $faker->year('now') ,
        'description'=> $faker->paragraphs(rand(2,5), true),
    ];
});
