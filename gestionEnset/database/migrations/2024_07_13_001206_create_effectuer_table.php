<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEffectuerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('effectuer', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('semestre1')->nullable(true);
            $table->integer('semestre2')->nullable(true);
            $table->integer('semestre3')->nullable(true);
            $table->integer('semestre4')->nullable(true);
            $table->integer('semestre5')->nullable(true);
            $table->integer('semestre6')->nullable(true);
            $table->integer('semestre7')->nullable(true);
            $table->integer('semestre8')->nullable(true);
            $table->integer('semestre9')->nullable(true);
            $table->integer('semestre10')->nullable(true);
            $table->unsignedBigInteger('id_parcours');
            $table->timestamps();

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
        Schema::table("effectuer", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_parcours");
        });
        Schema::dropIfExists('effectuer');
    }
}
