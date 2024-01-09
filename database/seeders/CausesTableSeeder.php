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
                'objectif' => 500000,
                'collecte' => NULL,
            'description' => '<p><span style="font-size: 1rem;">Généreux.ses donateurs et donatrices, </span></p><p><span style="font-size: 1rem;">à vous tous qui croyez qu\'il y\'a plus de joie <span style="background-color: rgb(255, 255, 0);">à donner qu\'à recevoir</span> et qui éprouvez un sentiment de compassion vis-à-vis des enfants en situation difficile.</span></p><p><span style="font-size: 1rem;">Il est possible de changer les choses en faisant un geste pour ces adorables </span>boutchou<span style="font-size: 1rem;">&nbsp;🥹</span></p><p><span style="font-size: 1rem;">Nous contons sur votre </span>générosité<span style="font-size: 1rem;">&nbsp;pour organiser cet arbre de noël et apporter de la joie à des enfants qui rêvent d\'un Noël heureux.</span><br><br></p>',
                'galerie' => '["sri-slPl.jpg","c1c17ecb-55df-4cfc-8696-59cf6c95a96d-KpBM.png"]',
                'status' => 'collecte',
                'id_org' => 2,
                'id_cate' => 3,
                'created_at' => '2023-12-06 16:13:42',
                'updated_at' => '2023-12-06 16:31:28',
            ),
            1 => 
            array (
                'id' => 2,
                'libelle' => 'Donner pour l\'éducation des enfants defavorisés de donakro pour un avenir meilleur',
                'photo' => 'charity-83si.jpg',
                'objectif' => 1500000,
                'collecte' => NULL,
                'description' => '<p><b>Soyez le maillon qui façonne un avenir meilleur </b>! </p><p>Participez à notre appel au don : Donner pour l\'éducation des enfants défavorisés de Donakro.</p><p><span style="font-size: 1rem;">Chaque contribution que vous apportez soutient l\'accès à une éducation de qualité, ouvrant ainsi la voie à un avenir plus prometteur pour ces jeunes esprits. Ensemble, nous pouvons briser les barrières de l\'opportunité et offrir aux enfants de Donakro la chance de réaliser leurs rêves. Chaque don compte, chaque enfant éduqué est une lumière qui brillera dans l\'obscurité de l\'adversité. Rejoignez-nous dans cette noble mission et donnez-leur la clé d\'un avenir éduqué et prospère. Merci de semer les graines de l\'éducation et de faire une différence durable dans la vie de ces enfants défavorisés.</span></p>',
                'galerie' => '[]',
                'status' => 'collecte',
                'id_org' => 3,
                'id_cate' => 2,
                'created_at' => '2023-12-21 13:47:10',
                'updated_at' => '2023-12-21 13:51:23',
            ),
            2 => 
            array (
                'id' => 3,
                'libelle' => 'Aidez à Nourrir les Enfants de l\'Orphelinat de Bouake',
                'photo' => 'charity-2-cviJ.jpg',
                'objectif' => 2000000,
                'collecte' => NULL,
                'description' => '<p>Soutenez notre noble cause : <b>Aidez à Nourrir les Enfants de l\'Orphelinat de Bouaké. </b></p><p>Ensemble, faisons une réelle différence dans la vie de ces enfants vulnérables. Votre générosité permettra de fournir des repas nutritifs, d\'assurer leur bien-être et de leur offrir un avenir prometteur. Chaque don, peu importe sa taille, contribue à apporter chaleur et espoir dans le quotidien de ces petits cœurs. Rejoignez-nous dans cette mission humanitaire et soyez le rayon de soleil qui illumine leur vie. Chaque geste compte, chaque don fait une différence. Merci de partager notre amour et de contribuer à nourrir les rêves de ces enfants.<br></p>',
                'galerie' => '[]',
                'status' => 'collecte',
                'id_org' => 3,
                'id_cate' => 1,
                'created_at' => '2023-12-21 13:52:33',
                'updated_at' => '2023-12-21 13:52:33',
            ),
            3 => 
            array (
                'id' => 4,
                'libelle' => 'Collecte Spécial Noel veuves et Orphelins',
                'photo' => 'whatsapp-image-2023-11-28-a-141003-decf01b4-f1LZ.jpg',
                'objectif' => 5000000,
                'collecte' => 500,
                'description' => '<p>Participez à notre Collecte Spéciale Noël dédiée aux veuves et aux orphelins. </p><p>En cette période festive, faisons briller la lumière de l\'espoir dans les vies de ceux qui ont perdu un être cher. Votre générosité permettra de créer des moments chaleureux et mémorables pour ces familles qui traversent des épreuves difficiles. Ensemble, offrons-leur le réconfort d\'une saison de fêtes empreinte de soutien et d\'amour. Chaque don, petit ou grand, contribue à alléger le fardeau et à apporter un sourire à ces cœurs endeuillés. Rejoignez-nous dans cet élan de solidarité et faites de cette période de Noël une source de joie et de réconfort pour ceux qui en ont le plus besoin. Merci de répandre la magie de Noël à travers l\'amour et la compassion.<br></p>',
                'galerie' => '[]',
                'status' => 'collecte',
                'id_org' => 3,
                'id_cate' => 3,
                'created_at' => '2023-12-21 13:59:45',
                'updated_at' => '2024-01-07 11:59:30',
            ),
            4 => 
            array (
                'id' => 5,
                'libelle' => 'Donnons un souris à de nombreuse famille',
                'photo' => 'whatsapp-image-2023-12-03-a-175931-399120d1-f4K7.jpg',
                'objectif' => 5000000,
                'collecte' => 3000,
                'description' => '<p>Participons tous à l\'initiative \'Donnons un sourire à de nombreuses familles\'. </p><p>Votre soutien peut illuminer les visages et apporter de la joie à ceux qui en ont besoin. En cette période où le simple fait de sourire peut être un cadeau précieux, chaque contribution compte. Ensemble, créons une chaîne de solidarité qui réchauffe les cœurs et donne de l\'espoir. Que ce geste simple, mais puissant, soit le début d\'une cascade de bonheur pour de nombreuses familles. Rejoignez-nous dans cette belle démarche et soyez l\'architecte d\'un monde où le partage d\'un sourire devient un acte transformateur. Merci de faire partie de cette belle aventure pleine d\'empathie et de générosité.<br></p>',
                'galerie' => '[]',
                'status' => 'collecte',
                'id_org' => 1,
                'id_cate' => 1,
                'created_at' => '2023-12-21 14:22:22',
                'updated_at' => '2024-01-07 11:42:41',
            ),
        ));
        
        
    }
}