<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ec', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->integer('credit')->nullable(false);
            $table->integer('ET')->nullable(true);
            $table->integer('ED')->nullable(true);
            $table->integer('EP')->nullable(true);
            $table->integer('VOH')->nullable(false);
            $table->unsignedBigInteger('id_ue');
            $table->unsignedBigInteger('id_Enseignant');
            $table->timestamps();

            $table->foreign('id_ue')->references('id')->on('ue')->onDelete('cascade');
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
        Schema::table("ec", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_ue");
            $table->dropConstrainedForeignId("id_Enseignant");
        });
        Schema::dropIfExists('ec');
    }
}
