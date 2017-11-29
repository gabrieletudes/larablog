<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Blog\User::create([
            'name'=>'Gabriel',
            'email'=>'gabrieletudes@gmail.com',
            'password'=>Hash::make('secret')
        ]);
        factory(Blog\User::class, 10)->create();
    }
}
