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
            'pourcentage' => '80'

        ]);
        App\Competence::create([
            'nom' => 'Css3',
            'pourcentage' => '70'

        ]);
        App\Competence::create([
            'nom' => 'Php',
            'pourcentage' => '50'

        ]);

        App\Competence::create([
            'nom' => 'Js',
            'pourcentage' => '50'

        ]);

        App\Competence::create([
            'nom' => 'VisualStudioCode',
            'pourcentage' => '50'

        ]);
        App\Competence::create([
            'nom' => 'GitHub',
            'pourcentage' => '50'

        ]);

        App\Competence::create([
            'nom' => 'Laragon',
            'pourcentage' => '50'

        ]);
        App\Competence::create([
            'nom' => 'Docker',
            'pourcentage' => '50'

        ]);

        App\Competence::create([
            'nom' => 'Laravel',
            'pourcentage' => '50'

        ]);

        App\Competence::create([
            'nom' => 'Bootstrap',
            'pourcentage' => '50'

        ]);
        App\Competence::create([
            'nom' => 'Jquery',
            'pourcentage' => '50'

        ]);
        App\Competence::create([
            'nom' => 'VueJs',
            'pourcentage' => '50'

        ]);
        App\Competence::create([
            'nom' => 'Angular',
            'pourcentage' => '20'

        ]);
        App\Competence::create([
            'nom' => 'Materialize',
            'pourcentage' => '50'

        ]);

        App\Competence::create([
            'nom' => 'Ionic',
            'pourcentage' => '50'

        ]);




    }
}
