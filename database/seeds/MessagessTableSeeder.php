<?php

use Illuminate\Database\Seeder;

class MessagessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Message::create([
            'nom' => 'Maurice',
            'fonction' => 'Devellopeur web ',
            'message'=>'Merci pour votre visite, laissez moi un message.'


        ]);
    }
}
