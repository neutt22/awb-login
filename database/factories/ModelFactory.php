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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'email' => $faker->safeEmail,
        'first_name' => $faker->firstName,
        'middle_name' => $faker->lastName,
        'last_name' => $faker->lastName,
        'address_1' => $faker->address,
        'address_2' => $faker->address,
        'password' => $password ?: $password = bcrypt('secret'),
        'phone' => $faker->tollFreePhoneNumber,
        'co_phone' => $faker->tollFreePhoneNumber,
        'company' => $faker->company,
        'job_title' => $faker->jobTitle,
        'comments' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'type' => 'buyer',
        'agree' => true,
        'supplier_call_date' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'remember_token' => str_random(10),
    ];
});
