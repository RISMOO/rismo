<?php

use Illuminate\Database\Seeder;

class FormationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Formation::create([
            'nom' => 'Developpeur Web et web mobile',
            'lieu' => 'Afpa Brest',
            'date'=>'Novembre 2019 / Juillet 2020',
            'image'=>'img/titre.webp'

        ]);

        App\Formation::create([
            'nom' => 'Vue_js',
            'lieu' => 'Auto formation Udemy',
            'date'=>'Novembre 2019 / Juillet 2020',
            'image'=>'img/udemy.png'

        ]);

    }
}
