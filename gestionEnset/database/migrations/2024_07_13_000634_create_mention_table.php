<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mention', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->string('sigleMention', 255)->collation('utf8mb4_general_ci')->nullable(true);
            $table->unsignedBigInteger('id_Enseignant');
            $table->timestamps();

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
        Schema::table("mention", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_Enseignant");
        });
        Schema::dropIfExists('mention');
    }
}
