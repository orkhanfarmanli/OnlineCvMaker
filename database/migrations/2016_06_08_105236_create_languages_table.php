<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table){
            $table->increments('language_id');
            $table->integer('cv_id')->unsigned();
            $table->foreign('cv_id')->references('cv_id')->on('cv');
            $table->string('language_name', 255);
            $table->string('language_level', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('languages');
    }
}
