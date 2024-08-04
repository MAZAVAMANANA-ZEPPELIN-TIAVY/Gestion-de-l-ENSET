<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class classesAdministrateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = password_hash("Soamaniry", PASSWORD_ARGON2I);
        DB::table("administrateur")->insert([
            ["firstname"=>"Zeppélin Tiavy",
             "lastname"=>"MAZAVAMANANA",
             "contact"=>"+261325572786",
             "email"=>"zeppelintiavymazavamanana@gmail.com",
             "dateOfBirthDay"=>"1999-11-14",
             "address"=>"222 HLE Lazaret Sud",
             "pdp"=>"",
             "password"=>$password,
             "id_genre"=>1,
             "id_nationality"=>1,
             "created_at" => now(),
             "updated_at" => now(),],
        ]);
    }
}
