<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_data', function (Blueprint $table){
            $table->increments('personal_data_id');
            $table->string('personal_data_fname', 255);
            $table->string('personal_data_bdate', 255);
            $table->text('personal_data_info');
            $table->string('personal_data_profession', 255);
            $table->text('image_url');
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
        Schema::drop('personal_data');
    }
}
