<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dette', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->float('noteDette')->nullable(false);
            $table->unsignedBigInteger('id_etudiant');
            $table->unsignedBigInteger('id_Enseignant');
            $table->unsignedBigInteger('id_ec');
            $table->timestamps();

            $table->foreign('id_etudiant')->references('id')->on('etudiant')->onDelete('cascade');
            $table->foreign('id_Enseignant')->references('id')->on('enseignant')->onDelete('cascade');
            $table->foreign('id_ec')->references('id')->on('ec')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("dette", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_etudiant");
            $table->dropConstrainedForeignId("id_Enseignant");
            $table->dropConstrainedForeignId("id_ec");
        });
        Schema::dropIfExists('dette');
    }
}
