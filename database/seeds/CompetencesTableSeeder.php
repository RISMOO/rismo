<?php

use Illuminate\Database\Seeder;


class CompetencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          App\Competence::create([
            'nom' => 'Html5',
            'image' => 'img/avat2.webp'

        ]);
        App\Competence::create([
            'nom' => 'Css3',
            'image' => 'img/avat2.webp'

        ]);
        App\Competence::create([
            'nom' => 'Php',
            'image' => 'img/avat2.webp'

        ]);

        App\Competence::create([
            'nom' => 'Js',
            'image' => 'img/avat2.webp'

        ]);

        App\Competence::create([
            'nom' => 'VisualStudioCode',
            'image' => 'img/avat2.webp'

        ]);
        App\Competence::create([
            'nom' => 'GitHub',
            'image' => 'img/avat2.webp'

        ]);

        App\Competence::create([
            'nom' => 'Laragon',
            'image' => 'img/avat2.webp'

        ]);
        App\Competence::create([
            'nom' => 'Docker',
            'image' => 'img/avat2.webp'

        ]);

        App\Competence::create([
            'nom' => 'Laravel',
            'image' => 'img/avat2.webp'

        ]);

        App\Competence::create([
            'nom' => 'Bootstrap',
            'image' => 'img/avat2.webp'

        ]);
        App\Competence::create([
            'nom' => 'Jquery',
            'image' => 'img/avat2.webp'

        ]);
        App\Competence::create([
            'nom' => 'VueJs',
            'image' => 'img/avat2.webp'

        ]);
        App\Competence::create([
            'nom' => 'Angular',
            'image' => 'img/avat2.webp'

        ]);
        App\Competence::create([
            'nom' => 'Materialize',
            'image' => 'img/avat2.webp'

        ]);

        App\Competence::create([
            'nom' => 'Ionic',
            'image' => 'img/avat2.webp'

        ]);




    }
}
