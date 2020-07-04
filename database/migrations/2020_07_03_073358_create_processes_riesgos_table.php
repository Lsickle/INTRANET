<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesRiesgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes_riesgos', function (Blueprint $table) {
            $table->unsignedBigInteger('process_id');  /*Relación con la tabla processes*/
            $table->foreign('process_id')->references('id')->on('processes');
            $table->unsignedBigInteger('riesgo_id');  /*Relación con la tabla recursos*/
            $table->foreign('riesgo_id')->references('id')->on('riesgos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processes_riesgos');
    }
}
