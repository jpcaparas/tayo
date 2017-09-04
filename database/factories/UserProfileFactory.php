<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User\Profile::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'arrived_at' => $faker->dateTime(),
        'occupation' => $faker->jobTitle,
    ];
});
