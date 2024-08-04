<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('firstname', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->string('lastname', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->integer('contact')->nullable(false);
            $table->string('email', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->date('dateOfBirthDay')->nullable(false);
            $table->string('address', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->string('pdp', 255)->collation('utf8mb4_general_ci')->nullable(true);
            $table->string('mother', 255)->collation('utf8mb4_general_ci')->nullable(true);
            $table->string('father', 255)->collation('utf8mb4_general_ci')->nullable(true);
            $table->integer('cin')->nullable(true);
            $table->string('password', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->unsignedBigInteger('id_genre');
            $table->unsignedBigInteger('id_nationality');
            $table->unsignedBigInteger('id_niveau');
            $table->unsignedBigInteger('id_mention');
            $table->unsignedBigInteger('id_parcours');
            $table->timestamps();

            $table->foreign('id_genre')->references('id')->on('gender')->onDelete('cascade');
            $table->foreign('id_nationality')->references('id')->on('nationality')->onDelete('cascade');
            $table->foreign('id_niveau')->references('id')->on('niveau')->onDelete('cascade');
            $table->foreign('id_mention')->references('id')->on('mention')->onDelete('cascade');
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
        Schema::table("etudiant", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_genre");
            $table->dropConstrainedForeignId("id_nationality");
            $table->dropConstrainedForeignId("id_niveau");
            $table->dropConstrainedForeignId("id_mention");
            $table->dropConstrainedForeignId("id_parcours");
        });
        Schema::dropIfExists('etudiant');
    }
}
