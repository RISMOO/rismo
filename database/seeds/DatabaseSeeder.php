<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(CompetencesTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(FormationsTableSeeder::class);
        $this->call(ProjetnsTableSeeder::class);
        $this->call(TitresTableSeeder::class);
        $this->call(MessagessTableSeeder::class);
    }
}
