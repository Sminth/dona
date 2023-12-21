<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrganisationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('organisations')->delete();
        
        \DB::table('organisations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'ESF',
                'logo' => 'esf-qD1K.jpg',
            'description' => '<div class="xdj266r x11i5rnm xat24cr x1mh8g0r x1vvkbs" style="margin: 0px; overflow-wrap: break-word;"><div dir="auto" style="">Éduquer Sans Faim (ESF) est une association purement amicale à but non-lucratif inspirée du rêve de poser des actions concrètes pour améliorer&nbsp;de façon durable, le niveau de réussite scolaire des enfants défavorisés en Côte d’Ivoire. À ESF nous avons pour objectif d\'apporter notre contribution à fort impact à l\'éducation et au bien-être des enfants en milieu rurale (campements) et milieux très défavorisés des agglomérations en améliorant les conditions d’accès à l\'école tout en tenant compte de leur santé !</div><div dir="auto" style="">Notre action s’articule autour des activités de collectes et un système de parrainage :</div><div dir="auto" style="">1-Le parrainage individuel</div><div dir="auto" style="">2-Le parrainage collectif</div><div dir="auto" style="">3-Les opérations de vides greniers saisonnièrs et collectes pour les enfants de 0 à 18 ans.</div></div><div class="x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s" style="margin: 0.5em 0px 0px; overflow-wrap: break-word;"><div dir="auto" style="">Nous avons hâte de vous compter parmi nos adhérents et vous souhaitons d’avance la bienvenue !</div></div>',
                'lien_facebook' => 'https://www.facebook.com/groups/657942425158602/?ref=share',
                'lien_insta' => NULL,
                'numero' => '+2250788364403',
                'email' => NULL,
                'whatsapp' => '+2250788364403',
                'created_at' => '2023-12-06 14:07:57',
                'updated_at' => '2023-12-06 14:07:57',
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'Bakan Association',
                'logo' => NULL,
                'description' => '<p>un geste, un sourire, une vie transformée</p>',
                'lien_facebook' => NULL,
                'lien_insta' => NULL,
                'numero' => '+2250712535804',
                'email' => NULL,
                'whatsapp' => '+2250712535804',
                'created_at' => '2023-12-06 14:10:45',
                'updated_at' => '2023-12-06 14:11:09',
            ),
        ));
        
        
    }
}