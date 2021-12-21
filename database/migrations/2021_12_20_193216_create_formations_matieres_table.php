<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations_matieres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('formation_id')->unsigned()->nullable();
            $table->foreign('formation_id')->references('id')
                  ->on('formations')->onDelete('cascade');

            $table->integer('matiere_id')->unsigned()->nullable();
            $table->foreign('matiere_id')->references('id')
                  ->on('matieres')->onDelete('cascade');

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
        Schema::dropIfExists('formations_matieres');
    }
}
