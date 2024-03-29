<?php

namespace Database\Seeders;

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
                'name' => 'lolipop 2 sminth',
                'email' => 'virtus225one@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QMBzcSsBhU5v4HcPq2TpPuQdjWfmodVE0xpns/mTyqhOKImH.24Iq',
                'remember_token' => NULL,
                'created_at' => '2023-12-06 14:06:35',
                'updated_at' => '2023-12-06 14:06:35',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dona',
                'email' => 'contact@dona-ci.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EXmNDwGMnAoVU.rmc8SI2.iAFznxyz6qpUeok0WYfQSBppfY4LFoq',
                'remember_token' => NULL,
                'created_at' => '2024-01-11 07:10:23',
                'updated_at' => '2024-01-11 07:10:23',
            ),
        ));
        
        
    }
}