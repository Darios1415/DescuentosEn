<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tiposusuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['rol' => 'Administrador'],
            ['rol' => 'Proveedor'],
            ['rol' => 'Cliente'],
    ];
    DB::table('tiposusuarios')->insert($data);
    }
}
