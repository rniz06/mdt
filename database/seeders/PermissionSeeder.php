<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     private $permissions = [
        'usuarios-listar',
        'usuarios-crear',
        'usuarios-ver',
        'usuarios-editar',
        'usuarios-eliminar',

        'roles-listar',
        'roles-crear',
        'roles-ver',
        'roles-editar',
        'roles-eliminar',

        'permisos-listar',
        'permisos-crear',
        'permisos-ver',
        'permisos-editar',
        'permisos-eliminar',

        'generar-boletas-listar',
        'generar-boletas-crear',
        'generar-boletas-ver',
        'generar-boletas-editar',
        'generar-boletas-eliminar',

        'multas-listar',
        'multas-crear',
        'multas-ver',
        'multas-editar',
        'multas-eliminar',

    ];

    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Crear usuario administrador y asígnarle el rol.
        $user = User::create([
            'name' => 'Administrador',
            'username' => 'Administrador',
            'email' => 'rniz@nemby.gov.py',
            'password' => Hash::make('Rann2006')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

    }
}
