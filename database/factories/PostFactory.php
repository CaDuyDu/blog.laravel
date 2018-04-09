<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
    	'title' => $faker->text($maxNbChars = 100),
		'thumbnail' => $faker->imageUrl($width = 640, $height = 480),
		'description' => $faker->text($maxNbChars = 500),
		'content' => $faker->text($maxNbChars = 10000),
		'slug' =>$faker->slug().'.html',
		'user_id' => array_random([1,2,3,4,5]),
		'category_id' => array_random([1,2,3,4]),
    ];
});
