<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Available;
use Faker\Generator as Faker;

$factory->define(Available::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
