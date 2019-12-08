<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,     
        'tel_no'=> $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,           
        'nid'=> $faker->phoneNumber,           
        'position'=> $faker->jobTitle,
        'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
    ];
});
