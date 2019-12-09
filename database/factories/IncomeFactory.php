<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Income;
use Faker\Generator as Faker;

$factory->define(Income::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'type' => $faker->sentence(),        
        'balance' => $faker->numberBetween($min = 1000, $max = 9000),
        'from' => App\Client::all()->random()->id,     
        'date_of_transaction'=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
        'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
    ];
});
