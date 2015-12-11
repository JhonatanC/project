<?php

$factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Entities\Country::class, function (Faker\Generator $faker) {
    return [
        'country' => $faker->country,
    ];
});

$factory->define(App\Entities\City::class, function (Faker\Generator $faker) {
    return [
        'city' => $faker->city,
        'country_id' => rand(1,3),
    ];
});
