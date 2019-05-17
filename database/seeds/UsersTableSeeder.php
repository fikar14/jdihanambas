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
        \App\User::insert([
            'name' => 'Zulfikar',
            'username' => 'fikar',
            'email' => 'ntn.fikar@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
