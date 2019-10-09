<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'create users',
        ]);
        
        Permission::create([
            'name' => 'read users',
        ]);

        Permission::create([
            'name' => 'edit users',
        ]);

        Permission::create([
            'name' => 'delete users',
        ]);

        Permission::create([
            'name' => 'create posts',
        ]);

        Permission::create([
            'name' => 'read posts',
        ]);

        Permission::create([
            'name' => 'edit posts',
        ]);

        Permission::create([
            'name' => 'delete posts',
        ]);
    }
}
