<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ue', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->string('code', 255)->collation('utf8mb4_general_ci')->nullable(true);
            $table->integer('credit')->nullable(false);
            $table->unsignedBigInteger('id_semestre');
            $table->unsignedBigInteger('id_Enseignant');
            $table->unsignedBigInteger('id_parcours');
            $table->timestamps();

            $table->foreign('id_semestre')->references('id')->on('semestre')->onDelete('cascade');
            $table->foreign('id_Enseignant')->references('id')->on('enseignant')->onDelete('cascade');
            $table->foreign('id_parcours')->references('id')->on('parcours')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("ue", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_semestre");
            $table->dropConstrainedForeignId("id_Enseignant");
            $table->dropConstrainedForeignId("id_parcours");
        });
        Schema::dropIfExists('ue');
    }
}
