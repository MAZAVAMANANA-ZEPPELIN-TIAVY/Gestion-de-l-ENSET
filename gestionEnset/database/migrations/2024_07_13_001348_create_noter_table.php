<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noter', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->float('note')->nullable(false);
            $table->unsignedBigInteger('id_Enseignant');
            $table->unsignedBigInteger('id_ec');
            $table->unsignedBigInteger('id_etudiant');
            $table->timestamps();

            $table->foreign('id_Enseignant')->references('id')->on('enseignant')->onDelete('cascade');
            $table->foreign('id_ec')->references('id')->on('ec')->onDelete('cascade');
            $table->foreign('id_etudiant')->references('id')->on('etudiant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("noter", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_Enseignant");
            $table->dropConstrainedForeignId("id_ec");
            $table->dropConstrainedForeignId("id_etudiant");
        });
        Schema::dropIfExists('noter');
    }
}
