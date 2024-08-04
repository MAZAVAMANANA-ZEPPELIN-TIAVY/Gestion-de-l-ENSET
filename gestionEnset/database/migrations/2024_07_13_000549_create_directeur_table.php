<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirecteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directeur', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('id_Enseignant');
            $table->timestamps();

            $table->foreign('id_Enseignant')->references('id')->on('enseignant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("directeur", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_Enseignant");
        });
        Schema::dropIfExists('directeur');
    }
}
