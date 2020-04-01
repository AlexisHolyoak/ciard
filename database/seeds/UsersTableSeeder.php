<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'lloydmc14@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5.P.IooIunbTXhl7v5dCKO1rxBzMpZfam5LeilU3qiWd.npYJJmga',
                'people_id' => 1,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 17:56:28',
                'updated_at' => '2020-04-01 17:56:28',
            ),
        ));
        
        
    }
}