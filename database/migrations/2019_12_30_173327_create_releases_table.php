<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('releases', function (Blueprint $table) {
            $table->bigIncrements('id'); /**/
            $table->timestamps();
            $table->string('RelName'); /*Nombre del comunicado*/
            $table->string('RelMessage'); /*Mensaje del comunicado*/
            $table->date('RelDate'); /*Fecha del comunicado*/
            $table->softDeletes(); 
            $table->string('RelSrc'); /*Imagen del comunicado si se desea agregar*/
            $table->string('RelType'); /*Tipo de comunicado: Noticia o comunicado*/
            $table->boolean('RelGeneral');/*Documento en general o restringido*/
            $table->unsignedBigInteger('user_id');  /*Relación con la tabla usuarios*/
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('releases');
    }
}
