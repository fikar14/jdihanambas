<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'SuperAdministrator',
        ]);

        Role::create([
            'name' => 'Administrator',
        ]);

        Role::create([
            'name' => 'Editor',
        ]);

        Role::create([
            'name' => 'Author',
        ]);

        Role::create([
            'name' => 'Contributor',
        ]);

        Role::create([
            'name' => 'Subscriber',
        ]);
    }
}
