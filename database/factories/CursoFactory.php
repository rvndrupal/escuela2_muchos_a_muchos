<?php

use Faker\Generator as Faker;

$factory->define(App\Curso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(5),
        'body' => $faker->text(5),
    ];
});
