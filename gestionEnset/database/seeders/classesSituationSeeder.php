<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class classesSituationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("situation")->insert([
            ["name"=>"Permanent",
             "created_at" => now(),
             "updated_at" => now(),],

            ["name"=>"Vacataire",
             "created_at" => now(),
             "updated_at" => now(),],
        ]);
    }
}
