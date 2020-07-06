<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class municipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nombre' => 'Toluca'],
            ['nombre' => 'Metepec'],
    ];
    DB::table('municipio')->insert($data);
    }
}
