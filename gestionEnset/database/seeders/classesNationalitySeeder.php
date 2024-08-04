<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class classesNationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("nationality")->insert([
            ["name"=>"Malagasy",
             "created_at" => now(),
             "updated_at" => now(),],

            ["name"=>"Etranger",
             "created_at" => now(),
             "updated_at" => now(),],
        ]);
    }
}
