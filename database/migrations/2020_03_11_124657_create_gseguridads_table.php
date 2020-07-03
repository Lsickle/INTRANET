<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGseguridadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gseguridads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('SeguName');
            $table->string('SeguImpact');
            $table->string('SeguDescrip');
            $table->string('SeguControl');
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
        Schema::dropIfExists('gseguridads');
    }
}
