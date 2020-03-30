<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'AMAZONAS',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'ANCASH',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'APURIMAC',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'AREQUIPA',
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'AYACUCHO',
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'CAJAMARCA',
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'CALLAO',
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'CUSCO',
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'HUANCAVELICA',
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'HUANUCO',
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'ICA',
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'JUNIN',
            ),
            12 => 
            array (
                'id' => 13,
                'nombre' => 'LA LIBERTAD',
            ),
            13 => 
            array (
                'id' => 14,
                'nombre' => 'LAMBAYEQUE',
            ),
            14 => 
            array (
                'id' => 15,
                'nombre' => 'LIMA',
            ),
            15 => 
            array (
                'id' => 16,
                'nombre' => 'LORETO',
            ),
            16 => 
            array (
                'id' => 17,
                'nombre' => 'MADRE DE DIOS',
            ),
            17 => 
            array (
                'id' => 18,
                'nombre' => 'MOQUEGUA',
            ),
            18 => 
            array (
                'id' => 19,
                'nombre' => 'PASCO',
            ),
            19 => 
            array (
                'id' => 20,
                'nombre' => 'PIURA',
            ),
            20 => 
            array (
                'id' => 21,
                'nombre' => 'PUNO',
            ),
            21 => 
            array (
                'id' => 22,
                'nombre' => 'SAN MARTIN',
            ),
            22 => 
            array (
                'id' => 23,
                'nombre' => 'TACNA',
            ),
            23 => 
            array (
                'id' => 24,
                'nombre' => 'TUMBES',
            ),
            24 => 
            array (
                'id' => 25,
                'nombre' => 'UCAYALI',
            ),
        ));
        
        
    }
}