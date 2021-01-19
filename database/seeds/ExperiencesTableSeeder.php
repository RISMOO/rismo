<?php

use Illuminate\Database\Seeder;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Experience::create([
            'nom' => 'IMT-Atlantique',
            'poste' => 'Stage',
            'lieu'=>'Plouzané',
            'date'=>'Avril/Juin 2020'

        ]);
        App\Experience::create([
            'nom' => 'Tanguy/BCA',
            'poste' => 'Chauffeur-toupie',
            'lieu'=>'Guipavas',
            'date'=>'Juillet 2005/Janvier 2021'

        ]);
        App\Experience::create([
            'nom' => 'Service National',
            'poste' => 'Marechal des logis / circulation routiere',
            'lieu'=>'Versailles Satory',
            'date'=>'Aout 1995/Avril 1997'

        ]);
    }
}
