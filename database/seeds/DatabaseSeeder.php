<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nombre' => 'Alimentos'],
            ['nombre' => 'Ropa'],
            ['nombre' => 'Artesania'],
            ['nombre' => 'Servicios'],
            ['nombre' => 'Electronica'],
            ['nombre' => 'Limpieza']
    ];
    DB::table('categorias')->insert($data);
        }
}
