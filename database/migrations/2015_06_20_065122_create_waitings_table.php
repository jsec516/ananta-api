<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaitingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waitings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id')->unsigned()->index();
            $table->integer('practitioner_id')->unsigned()->index();
            $table->integer('patient_id')->unsigned()->index();
            $table->integer('clinic_id')->unsigned()->index();
            $table->integer('clinic_user_id')->unsigned();
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
        Schema::drop('waitings');
    }
}
