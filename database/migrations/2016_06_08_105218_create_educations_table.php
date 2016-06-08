<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->increments('education_id');
            $table->integer('cv_id')->unsigned();
            $table->foreign('cv_id')->references('cv_id')->on('cv');
            $table->string('education_date', 255);
            $table->string('education_name', 255);
            $table->string('education_degree', 255);
            $table->text('education_info');
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
        Schema::drop('educations');
    }
}
