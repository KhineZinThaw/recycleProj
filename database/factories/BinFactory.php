<?php

use Faker\Generator as Faker;

$factory->define(App\Bin::class, function (Faker $faker) {
    return [
        'bin_code' => 'BI-'.time(),
        'location_id' => 1,
        'status' => false ,
        'remark' => $faker->paragraph(),
    ];
});
