<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrendreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prendre', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('password', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->integer('id_pat')->nullable(true);
            $table->unsignedBigInteger('id_etudiant');
            $table->timestamps();

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
        Schema::table("prendre", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_etudiant");
        });
        Schema::dropIfExists('prendre');
    }
}
