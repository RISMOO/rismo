<?php

use Illuminate\Database\Seeder;

class ProjetnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Projet::create([
            'image' => 'img/air.webp',
            'description'=>'Air_Quality / PROJET REALISE EN LARAVEL',
            'lien'=>'https://rismo.fr/apps/air2d4'
        ]);

        App\Projet::create([
            'image' => 'img/monsite2.webp',
            'description'=>'Site V1 / PROJET REALISE EN LARAVEL',
            'lien'=>'https://rismo.fr'
        ]);

        App\Projet::create([
            'image' => 'img/lafleur.webp',
            'description'=>'Lafleur / PROJET REALISE EN PHP',
            'lien'=>'https://rismo.fr/apps/laFleur'
        ]);

        App\Projet::create([
            'image' => 'img/monsite1.webp',
            'description'=>'Site V2 / PROJET REALISE EN LARAVEL',
            'lien'=>'https://rismo.fr/apps/MonSiteFirst'
        ]);
        App\Projet::create([
            'image' => 'img/movies.webp',
            'description'=>'Movies / PROJET REALISE EN VUE_JS',
            'lien'=>'https://my-app-movies.netlify.app'
        ]);
        App\Projet::create([
            'image' => 'img/calcul.webp',
            'description'=>'Calculatrice / PROJET REALISE EN VUE_JS',
            'lien'=>'https://rismo.fr/apps/calculateur'
        ]);
        App\Projet::create([
            'image' => 'img/ecommerce.webp',
            'description'=>'E-commerce/ PROJET REALISE EN Laravel',
            'lien'=>'https://rismo.fr/apps/ecommerce2'
        ]);
        App\Projet::create([
            'image' => 'img/appmeditation.webp',
            'description'=>'Application Mobile / PROJET REALISE AVEC LE FRAMEWORK HYBRIDE IONIC',
            'lien'=>''
        ]);
        App\Projet::create([
            'image' => 'img/apptodolist.webp',
            'description'=>'Application Mobile / PROJET REALISE AVEC LE FRAMEWORK HYBRIDE IONIC ET FIREBASE',
            'lien'=>''
        ]);
       ;
        App\Projet::create([
            'image' => 'img/monsite.webp',
            'description'=>'monSite/ PROJET REALISE EN LARAVEL ET MATERIALIZE',
            'lien'=>''
        ]);

    }
}
