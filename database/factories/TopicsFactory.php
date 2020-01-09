<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Topics;
use Faker\Generator as Faker;

$factory->define(Topics::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
