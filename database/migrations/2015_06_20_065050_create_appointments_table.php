<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['regular', 'break-prac', 'break-clinic']);
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->integer('duration');
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
        Schema::drop('appointments');
    }
}
