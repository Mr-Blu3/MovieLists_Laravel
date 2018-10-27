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
        DB::table('users')->insert([
            'User_Name' => str_random(10),
            'User_LastName' => str_random(10).'@gmail.com',
            'User_Email' => bcrypt('secret'),
        ]);
    }
}
