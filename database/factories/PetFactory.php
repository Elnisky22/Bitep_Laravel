<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Models\Pet;
use App\Models\User;

use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {
    $user = factory(\App\Models\User::class)->create();
    return [
        'nome' => 'Lobito',
        'especie' => 'C',
        'genero' => 'M',
        'dataNascimento' => '02/02/2002', 
        'observacao' => 'Preguiçoso',
        'dono_id' => $user->id,
    ];
});
