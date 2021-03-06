<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_processes', function (Blueprint $table) {
            $table->unsignedBigInteger('areas_id');  /*Relación con la tabla area*/
            $table->foreign('areas_id')->references('id')->on('areas');
            $table->unsignedBigInteger('process_id');  /*Relación con la tabla process*/
            $table->foreign('process_id')->references('id')->on('processes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas_processes');
    }
}
