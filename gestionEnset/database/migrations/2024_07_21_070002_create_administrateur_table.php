<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrateur', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->string('lastname', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->integer('contact')->nullable(false);
            $table->string('email', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->date('dateOfBirthDay')->nullable(false);
            $table->string('address', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->string('pdp', 255)->collation('utf8mb4_general_ci')->nullable(true);
            $table->string('password', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->unsignedBigInteger('id_genre');
            $table->unsignedBigInteger('id_nationality');
            $table->timestamps();

            $table->foreign('id_genre')->references('id')->on('gender')->onDelete('cascade');
            $table->foreign('id_nationality')->references('id')->on('nationality')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("administrateur", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_genre");
            $table->dropConstrainedForeignId("id_nationality");
        });
        Schema::dropIfExists('administrateur');
    }
}
