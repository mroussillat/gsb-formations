<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstName,
        'surname' => $faker->lastName,
        'login' => $faker->userName,
        'password' => bcrypt('motdepasse'),
        'phone' => $faker->randomNumber(8),
        'adress' => $faker->streetAddress,
        'postal_code' => $faker->randomNumber(5),
        'city' => $faker->city,
        'hiring_date' => $faker->dateTime,
    ];
});

$factory->define(App\Models\Formation::class, function (Faker\Generator $faker) {
    return [
        'label' => $faker->sentence(6),
        'description' => $faker->sentence(15)
    ];
});

$factory->define(App\Models\Specialty::class, function (Faker\Generator $faker) {
    return [
        'label' => $faker->sentence(2)
    ];
});

$factory->define(App\Models\Session::class, function (Faker\Generator $faker) {
    return [
        'date' => $faker->dateTime,
        'number_of_place' => $faker->numberBetween(8,32),
    ];
});

$factory->define(App\Models\UserFormation::class, function (Faker\Generator $faker) {
    return [
        'status' => $faker->randomElement(['Waiting','Accepted','Refused']),
        'formation_id' => factory(App\Models\Formation::class)->create()->id
    ];
});
