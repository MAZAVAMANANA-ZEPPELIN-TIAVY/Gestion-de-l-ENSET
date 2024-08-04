<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcours', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->string('sigleParcours', 255)->collation('utf8mb4_general_ci')->nullable(true);
            $table->unsignedBigInteger('id_mention');
            $table->unsignedBigInteger('id_Enseignant');
            $table->timestamps();

            $table->foreign('id_mention')->references('id')->on('mention')->onDelete('cascade');
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
        Schema::table("parcours", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_mention");
            $table->dropConstrainedForeignId("id_Enseignant");
        });
        Schema::dropIfExists('parcours');
    }
}
