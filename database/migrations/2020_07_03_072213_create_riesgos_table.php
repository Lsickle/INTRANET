<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiesgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riesgos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('RiesgDescrip'); /*nombre del informe*/
            $table->text('RiesgAction');  /*descripcion del riesgo*/
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riesgos');
    }
}
