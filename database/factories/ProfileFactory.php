<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Profile::class, function (Faker $faker) {
    
    $number = $faker->unixTime($max = 'now');

    return [
        'user_id' 		=>  User::all()->random()->id,
        'name' 			=> $faker->name,
        'lastname' 		=> $faker->lastname,
        'borndate'      => $faker->date($format = 'Y-m-d', $max = 'now'),
        'identification'=> $faker->randomElement(['DNI', 'CUIT /CUIL', 'Pasaporte']),
        'number'     	=> $number,
        'avatar' 		=> $faker->imageUrl($width = 180, $height = 180),
        'slug' 			=> Str::slug('pro'.$number),
        'bio' 			=> $faker->text(500),
        'status'        => $faker->randomElement(['activo', 'pendiente'])
    ];

});
