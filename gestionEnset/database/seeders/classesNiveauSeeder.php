<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class classesNiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("niveau")->insert([
            ["name"=>"Licence I",
             "created_at" => now(),
             "updated_at" => now(),],

            ["name"=>"Licence II",
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Licence III",
             "created_at" => now(),
             "updated_at" => now(),],

            ["name"=>"Master I",
             "created_at" => now(),
             "updated_at" => now(),],

            ["name"=>"Master II",
             "created_at" => now(),
             "updated_at" => now(),],
        ]);
    }
}
