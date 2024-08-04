<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class classesGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("gender")->insert([
            ["name"=>"Homme",
             "created_at" => now(),
             "updated_at" => now(),],

            ["name"=>"Femme",
             "created_at" => now(),
             "updated_at" => now(),],
        ]);
    }
}
