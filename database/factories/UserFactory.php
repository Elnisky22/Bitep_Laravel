<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;

use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'senha' => bcrypt(str_random(10)),
        'telefone' => '(11)9999-9999',
        'cidade_id' => 1,
    ];
});
