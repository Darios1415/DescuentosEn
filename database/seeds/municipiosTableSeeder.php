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
            ['nombre' => 'Acambay'], ['nombre' => 'Acolman'], ['nombre' => 'Aculco'], ['nombre' => 'Almoloya de Alquisiras'],
            ['nombre' => 'Almoloya de Juarez'], ['nombre' => 'Almoloya del Rio'], ['nombre' => 'Amanalco'],
            ['nombre' => 'Amatepec'], ['nombre' => 'Amecameca'], ['nombre' => 'Apaxco'],
            ['nombre' => 'Atenco'], ['nombre' => 'Atizapan'], ['nombre' => 'Atizapan de Zaragoza'],
            ['nombre' => 'Atlacomulco'], ['nombre' => 'Atlautla'], ['nombre' => 'Axapusco'],
            ['nombre' => 'Ayapango'], ['nombre' => 'Calimaya'], ['nombre' => 'Capulhuac'],
            ['nombre' => 'Coacalco de Berriozábal'], ['nombre' => 'Coatepec Harinas'], ['nombre' => 'Cocotitlán'],
            ['nombre' => 'Coyotepec'], ['nombre' => 'Cuautitlán'], ['nombre' => 'Chalco'],
            ['nombre' => 'Chapa de Mota'], ['nombre' => 'Chapultepec'], ['nombre' => 'Chiautla'],
            ['nombre' => 'Chicoloapan'], ['nombre' => 'Chiconcuac'], ['nombre' => 'Chimalhuacán'],
            ['nombre' => 'Donato Guerra'], ['nombre' => 'Ecatepec de Morelos'], ['nombre' => 'Ecatzingo'],
            ['nombre' => 'Huehuetoca'], ['nombre' => 'Hueypoxtla'], ['nombre' => 'Huixquilucan'],
            ['nombre' => 'Isidro Fabela'], ['nombre' => 'Ixtapaluca'], ['nombre' => 'Ixtapan de la Sal'],
            ['nombre' => 'Ixtapan del Oro'], ['nombre' => 'Ixtlahuaca'], ['nombre' => 'Xalatlaco'],
            ['nombre' => 'Jaltenco'], ['nombre' => 'Jilotepec'], ['nombre' => 'Jilotzingo'],
            ['nombre' => 'Jiquipilco'], ['nombre' => 'Jocotitlán'], ['nombre' => 'Joquicingo'],
            ['nombre' => 'Juchitepec'], ['nombre' => 'Lerma'], ['nombre' => 'Malinalco'],
            ['nombre' => 'Melchor Ocampo'], ['nombre' => 'Metepec'], ['nombre' => 'Mexicaltzingo'],
            ['nombre' => 'Morelos'], ['nombre' => 'Naucalpan de Juárez'], ['nombre' => 'Nezahualcóyotl'],
            ['nombre' => ' Nextlalpan'], ['nombre' => 'Nicolás Romero'], ['nombre' => 'Nopaltepec'],
            ['nombre' => 'Ocoyoacac'], ['nombre' => 'Ocuilan'],
    ];
    DB::table('municipio')->insert($data);
    }
}
