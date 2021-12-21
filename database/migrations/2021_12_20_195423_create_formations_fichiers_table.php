<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsFichiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations_fichiers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('formation_id')->unsigned()->nullable();
            $table->foreign('formation_id')->references('id')
                  ->on('formations')->onDelete('cascade');

            $table->integer('fichier_id')->unsigned()->nullable();
            $table->foreign('fichier_id')->references('id')
                  ->on('fichiers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations_fichiers');
    }
}
