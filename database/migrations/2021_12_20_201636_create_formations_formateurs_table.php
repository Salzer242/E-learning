<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsFormateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations_formateurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('formation_id')->unsigned()->nullable();
            $table->foreign('formation_id')->references('id')
                  ->on('formations')->onDelete('cascade');

            $table->integer('formateur_id')->unsigned()->nullable();
            $table->foreign('formateur_id')->references('id')
                  ->on('formateurs')->onDelete('cascade');

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
        Schema::dropIfExists('formations_formateurs');
    }
}
