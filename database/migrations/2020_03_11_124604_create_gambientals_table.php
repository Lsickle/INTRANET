<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambientalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambientals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('GesName');
            $table->string('GesImpact');
            $table->string('GesDescrip');
            $table->string('GesControl');
            $table->timestamps();
            $table->softDeletes(); 
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
        Schema::dropIfExists('gambientals');
    }
}
