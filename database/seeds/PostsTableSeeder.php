<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       /* \Blog\Post::create([
            'title'=>'Premier Post',
            'preamble'=>'',
            'body'=>'Le body de mon premier post'
        ]);*/
        factory(Blog\Post::class, 10)->create();
    }
}
