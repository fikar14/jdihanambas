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
            'name' => 'Super Admin',
            'username' => 'Super Admin',
            'email' => 'superadmin@me.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\User::insert([
            'name' => 'Administrator',
            'username' => 'Administrator',
            'email' => 'Administrator@me.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\User::insert([
            'name' => 'Editor',
            'username' => 'Editor',
            'email' => 'Editor@me.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\User::insert([
            'name' => 'Author',
            'username' => 'Author',
            'email' => 'Author@me.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\User::insert([
            'name' => 'Contributor',
            'username' => 'Contributor',
            'email' => 'Contributor@me.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\User::insert([
            'name' => 'Subscriber',
            'username' => 'Subscriber',
            'email' => 'Subscriber@me.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
