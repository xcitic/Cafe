<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {

    $user = factory(App\User::class)->create();
    return [
        'user_id' => $user->id,
        'name' => $user->name,
        'email' => $user->email,
        'subject' => $faker->sentence(5),
        'message' => $faker->text(250),
    ];
});
