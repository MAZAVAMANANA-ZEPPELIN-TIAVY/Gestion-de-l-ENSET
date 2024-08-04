<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class classesSemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("semestre")->insert([
            ["name"=>"Semestre 1",
             "id_niveau"=>1,
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Semestre 2",
             "id_niveau"=>1,
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Semestre 3",
             "id_niveau"=>2,
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Semestre 4",
             "id_niveau"=>2,
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Semestre 5",
             "id_niveau"=>3,
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Semestre 6",
             "id_niveau"=>3,
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Semestre 7",
             "id_niveau"=>4,
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Semestre 8",
             "id_niveau"=>4,
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Semestre 9",
             "id_niveau"=>5,
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Semestre 10",
             "id_niveau"=>5,
             "created_at" => now(),
             "updated_at" => now(),],
        ]);
    }
}
