<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name'=>"Busari Mutairu",
            'password'=>Hash::make('Mt4real85#T'),
            'email'=>"mt4real62@gmail.com"
        ]);
    }
}
