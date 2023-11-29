<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Spatie

use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permisos = [
            // Tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            // Tabla Blogs
            'ver-blog',
            'crear-blog',
            'editar-blog',
            'borrar-blog',
            // Tabla usuarios
            'ver-usu',
            'crear-usu',
            'editar-usu',
            'borrar-usu',
            // Tabla Estudiantes
            'ver-estu',
            'crear-estu',
            'editar-estu',
            'borrar-estu',
            // Tabla Equipos
            'ver-equipo',
            'crear-equipo',
            'editar-equipo',
            'borrar-equipo',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name' => $permiso]);
        }
    }
}
