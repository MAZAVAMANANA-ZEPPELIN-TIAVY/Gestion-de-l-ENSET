<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class classesGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("grade")->insert([
            ["name"=>"Licence",
             "signeGrade"=>"",
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Master",
             "signeGrade"=>"",
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Ingégneur",
             "signeGrade"=>"Ing.",
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Docteur",
             "signeGrade"=>"Dr.",
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Professeur",
             "signeGrade"=>"Pr.",
             "created_at" => now(),
             "updated_at" => now(),],

             ["name"=>"Professeur Tutilaire",
             "signeGrade"=>"Pr. Tit.",
             "created_at" => now(),
             "updated_at" => now(),],
        ]);
    }
}
