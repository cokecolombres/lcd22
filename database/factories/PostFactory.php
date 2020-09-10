<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Post::class, function (Faker $faker) {
    
    $title = $faker->sentence(4);

    return [
        'user_id' 		=> User::all()->random()->id,
        'category_id' 	=> rand(1,20),
        'title' 			=> $title,
        'slug' 			=> Str::slug($title),
        'excerpt' 		=> $faker->text(200),
        'body' 			=> $faker->text(500),
        'image' 			=> $faker->imageUrl($width = 1200, $height = 400),
        'status'        => $faker->randomElement(['BORRADOR', 'PUBLICADA', 'PAUSADA'])
    ];

});
