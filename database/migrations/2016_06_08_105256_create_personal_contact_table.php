<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_contact', function (Blueprint $table){
            $table->increments('personal_contact_id');
            $table->string('personal_contact_name', 255);
            $table->string('personal_contact_data', 255);
            $table->integer('cv_id')->unsigned();
            $table->foreign('cv_id')->references('cv_id')->on('cv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personal_contact');
    }
}
