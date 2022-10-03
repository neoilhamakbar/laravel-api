<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $this->faker->text()
    ];
});
