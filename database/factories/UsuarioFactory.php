<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Models\Usuario;

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Usuario::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'senha' => bcrypt(str_random(10)),
        'telefone' => '(11)9999-9999',
        'cidade_id' => 1,
    ];
});
