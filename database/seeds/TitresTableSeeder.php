<?php

use Illuminate\Database\Seeder;

class TitresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Titre::create([
            'image' => 'img/vuejs1.webp',
            'description'=>'Autoformation',
            'description2'=>'Apprentissage du Framework javascript VueJs',
            'logo'=>'img/udemy.png',
            'date'=>'Sept 2020',
            'lien'=>'https://www.udemy.com',
            'name'=>'Udemy'
        ]);

        App\Titre::create([
            'image' => 'img/titre.webp',
            'description'=>'Formation',
            'description2'=>'Devellopeur web et web mobile',
            'date'=>'Nov 2019 / Juillet 2020',
            'logo'=>'img/afpa.jpg',
            'lien'=>'https://afpa.fr',
            'name'=>'Afpa',
        ]);

        App\Titre::create([
            'image' => 'img/vuejs2.webp',
            'description'=>'Autoformation',
            'description2'=>'Apprentissage de VueJs et firebase',
            'date'=>'Nov 2020',
            'logo'=>'img/udemy.png',
            'lien'=>'https://www.udemy.com',
            'name'=>'Udemy',
        ]);



    }
}
