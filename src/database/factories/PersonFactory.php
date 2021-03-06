<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Person;
use Faker\Generator as Faker;


$factory->define(Person::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'birthdate' => $faker->date($format = 'Y-m-d', $max = '2002-12-31'),
        'rep_subject' => $faker->text(),
        'country_id' => \App\Models\Country::query()->inRandomOrder()->first()->id,
        'phone' => $faker->tollFreePhoneNumber,
        'email' => $faker->email,
        'company' => $faker->company,
        'position' => $faker->jobTitle,
        'about' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'show' => $faker->boolean,
        'photo' => $faker->imageUrl(100,100)
    ];

});


