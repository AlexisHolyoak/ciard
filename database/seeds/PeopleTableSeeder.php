<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('people')->delete();
        
        \DB::table('people')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Lloyd Eric',
                'first_surname' => 'Mauricio',
                'second_surname' => 'Chu',
                'document_type' => '1',
                'document_number' => '42747451',
                'birthday' => '1984-10-27',
                'created_at' => '2020-04-01 17:53:09',
                'updated_at' => '2020-04-01 17:53:09',
                'sex' => 'MASCULINO',
            ),
        ));
        
        
    }
}