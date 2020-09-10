<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('roles')->insert([
            0 => array ('id' => 1, 'name' => 'administrator', 'description' => 'Control total sobre el sistema, encargado de generar ususario y manipular todo el contenido'),
            1 => array ('id' => 2, 'name' => 'collaborator', 'description' => 'Permisos para crear nuevos usuarios atender publicaciones, pero con permisos limitados(No totales como admin)' ),
            2 => array ('id' => 3, 'name' => 'editor', 'description' => 'Puede realizar modificaciones a las publicaciones que le parezcan ofensivas (A DEFINIR)'),
            3 => array ('id' => 4, 'name' => 'author', 'description'=> 'Falta definir las condiciones de todos los usuarios'),
            4 => array ('id' => 5, 'name' => 'client', 'description'=> 'Falta definir las condiciones de todos los usuarios'),
        ]);
    }
}
