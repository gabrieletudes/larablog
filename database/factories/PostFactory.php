<?php

use Faker\Generator as Faker;
use Blog\Post;
use Blog\User;
$factory->define(Post::class, function (Faker $faker) {

    return [
        'title'=>$faker->sentence($nbWords = 5, $variableNbWords = true),
        'preamble'=>$faker->text($maxNbChars = 200),
        'body'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'user_id'=> User::whereEmail('gabrieletudes@gmail.com')->first()->id
    ];


});