<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Models\Imagem;
use Faker\Generator as Faker;

$factory->define(Imagem::class, function (Faker $faker) {
    $pet = factory(\App\Models\Pet::class)->create();
    return [
        'extencao' => 'jpeg',
        'imagem' => $faker->image('public/storage/images',640,480,null,null, false),
        'pet_id' => $pet->id,
    ];
});
