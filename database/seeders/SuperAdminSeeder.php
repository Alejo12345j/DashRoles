<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    public function run()
    {
        //Este seeder nos sirve para crear un usuario y un rol para administrador sin tener nada en la base de datos.
        $usuario = User::create([
            'name' => 'Administrador', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $rol = Role::create(['name' => 'Administrator']);

        $permisos = Permission::pluck('id', 'id')->all();

        $rol->syncPermissions($permisos);

        $usuario->assignRole([$rol->id]);
    }
}
