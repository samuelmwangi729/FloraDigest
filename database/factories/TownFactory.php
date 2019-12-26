<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Town;
use Faker\Generator as Faker;

$factory->define(Town::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
