<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'mail' => $faker->unique()->safeEmail,
        'age' => random_int(1,99),
    ];
});
