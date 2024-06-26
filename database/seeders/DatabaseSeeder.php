<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Citizen;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    /**
     * List of applications to add.
     */
    // private $permissions = [
    //     'users.index',
    //     'users.create',
    //     'users.show',
    //     'users.edit',
    //     'users.destroy',

    //     'roles.index',
    //     'roles.create',
    //     'roles.show',
    //     'roles.edit',
    //     'roles.destroy',

    //     'permissions.index',
    //     'permissions.create',
    //     'roles.show',
    //     'permissions.edit',
    //     'permissions.destroy',


    // ];

    public function run(): void
    {
        // foreach ($this->permissions as $permission) {
        //     Permission::create(['name' => $permission]);
        // }

        // // Crear usuario administrador y asígnarle el rol.
        // $user = User::create([
        //     'name' => 'Administrador',
        //     'username' => 'Administrador',
        //     'email' => 'rniz@nemby.gov.py',
        //     'password' => Hash::make('Rann2006')
        // ]);

        // $role = Role::create(['name' => 'Admin']);

        // $permissions = Permission::pluck('id', 'id')->all();

        // $role->syncPermissions($permissions);

        // $user->assignRole([$role->id]);

        // // Citizen::factory()->count(1000)->create();

        $this->call([
            PermissionSeeder::class,
            AddressSeeder::class,
            UserPmtSeeder::class
        ]);
    }
}
