<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CausesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('causes')->delete();
        
        \DB::table('causes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'libelle' => 'Arbre de Noël pour les enfants du quartier du tribunal de commerce',
                'photo' => 'sri-Y4x0.jpg',
                'objectif' => '500000',
                'collecte' => NULL,
            'description' => '<p><span style="font-size: 1rem;">Généreux.ses donateurs et donatrices, </span></p><p><span style="font-size: 1rem;">à vous tous qui croyez qu\'il y\'a plus de joie <span style="background-color: rgb(255, 255, 0);">à donner qu\'à recevoir</span> et qui éprouvez un sentiment de compassion vis-à-vis des enfants en situation difficile.</span></p><p><span style="font-size: 1rem;">Il est possible de changer les choses en faisant un geste pour ces adorables </span>boutchou<span style="font-size: 1rem;">&nbsp;🥹</span></p><p><span style="font-size: 1rem;">Nous contons sur votre </span>générosité<span style="font-size: 1rem;">&nbsp;pour organiser cet arbre de noël et apporter de la joie à des enfants qui rêvent d\'un Noël heureux.</span><br><br></p>',
                'galerie' => '["sri-slPl.jpg","c1c17ecb-55df-4cfc-8696-59cf6c95a96d-KpBM.png"]',
                'id_org' => 2,
                'id_cate' => 3,
                'created_at' => '2023-12-06 16:13:42',
                'updated_at' => '2023-12-06 16:31:28',
            ),
        ));
        
        
    }
}