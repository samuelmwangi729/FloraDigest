<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Subcategories;
use Faker\Generator as Faker;

$factory->define(Subcategories::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
