<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemestreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semestre', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string("name", 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->unsignedBigInteger('id_niveau');
            $table->timestamps();

            $table->foreign('id_niveau')->references('id')->on('niveau')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("semestre", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_niveau");
        });
        Schema::dropIfExists('semestre');
    }
}
