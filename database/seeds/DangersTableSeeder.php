<?php

use Illuminate\Database\Seeder;

class DangersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dangers')->delete();
        
        \DB::table('dangers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '1000',
                'name' => 'PELIGROS DE GEODINÁMICA INTERNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '2000',
                'name' => 'PELIGROS DE GEODINÁMICA EXTERNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '3000',
                'name' => 'PELIGROS HIDROMETEREOLÓGICOS Y OCEANOGRÁFICOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => '4000',
                'name' => 'PELIGROS BIOLÓGICOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => '5000',
                'name' => 'PELIGROS ANTRÓPICOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}