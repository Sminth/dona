<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'libelle' => 'Alimentation',
                'description' => NULL,
                'created_at' => '2023-12-06 14:18:06',
                'updated_at' => '2023-12-06 14:18:06',
            ),
            1 => 
            array (
                'id' => 2,
                'libelle' => 'Education',
                'description' => NULL,
                'created_at' => '2023-12-06 14:18:16',
                'updated_at' => '2023-12-06 14:18:16',
            ),
            2 => 
            array (
                'id' => 3,
                'libelle' => 'Noël',
                'description' => NULL,
                'created_at' => '2023-12-06 14:19:13',
                'updated_at' => '2023-12-06 14:19:13',
            ),
            3 => 
            array (
                'id' => 4,
                'libelle' => 'Eau Portable',
                'description' => NULL,
                'created_at' => '2023-12-06 14:19:23',
                'updated_at' => '2023-12-06 14:19:23',
            ),
            4 => 
            array (
                'id' => 5,
                'libelle' => 'Logement',
                'description' => NULL,
                'created_at' => '2023-12-06 14:20:15',
                'updated_at' => '2023-12-06 14:20:15',
            ),
        ));
        
        
    }
}