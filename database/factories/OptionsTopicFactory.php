<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OptionsTopic;
use Faker\Generator as Faker;

$factory->define(OptionsTopic::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
