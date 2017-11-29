<?php

use Faker\Generator as Faker;
use Blog\Comment;

$factory->define(Comment::class, function (Faker $faker) {

    $users_id = \Blog\User::all()->pluck('id');
    $posts_id = \Blog\Post::all()->pluck('id');

    return [
        'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'user_id' => $users_id->random(),
        'post_id' => $posts_id->random()
    ];
});