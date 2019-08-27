<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::insert([
            'name' => 'Zulfikar',
            'username' => 'fikar',
            'email' => 'ntn.fikar@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

    }
}
