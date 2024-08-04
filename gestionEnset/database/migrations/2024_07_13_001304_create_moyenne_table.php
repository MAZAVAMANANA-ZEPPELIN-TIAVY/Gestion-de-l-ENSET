<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoyenneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moyenne', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->float('mean')->nullable(true);
            $table->float('rps')->nullable(true);
            $table->float('rds')->nullable(true);
            $table->float('rd')->nullable(true);
            $table->date('universityYear')->nullable(false);
            $table->unsignedBigInteger('id_etudiant');
            $table->unsignedBigInteger('id_semestre');
            $table->timestamps();

            $table->foreign('id_etudiant')->references('id')->on('etudiant')->onDelete('cascade');
            $table->foreign('id_semestre')->references('id')->on('semestre')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("moyenne", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_etudiant");
            $table->dropConstrainedForeignId("id_semestre");
        });
        Schema::dropIfExists('moyenne');
    }
}
