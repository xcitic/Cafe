<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {

    $user = factory(App\User::class)->create();
    
    return [
      'user_id' => $user->id,
      'name' => $user->name,
      'email' => $user->email,
      'phone' => $faker->phoneNumber,
      'seats' => $faker->numberBetween(1,200),
      'date' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
    ];
});
