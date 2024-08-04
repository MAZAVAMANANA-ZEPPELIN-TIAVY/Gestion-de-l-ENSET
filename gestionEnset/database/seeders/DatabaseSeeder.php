<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        $this->call(classesGenderSeeder::class);
        $this->call(classesGradeSeeder::class);
        $this->call(classesNationalitySeeder::class);
        $this->call(classesNiveauSeeder::class);
        $this->call(classesSituationSeeder::class);
        $this->call(classesSemestreSeeder::class);
        $this->call(classesAdministrateurSeeder::class);
    }
}
