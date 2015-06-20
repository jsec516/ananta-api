<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password');
            $table->integer('security_question_id')->unsigned();
            $table->string('security_answer');
            $table->enum('registered_as', ['owner', 'clinic_member', 'patient', 'practitioner']);
            $table->integer('primary_practitioner_id')->unsigned();
            $table->integer('clinic_id')->unsigned()->index();
            $table->integer('clinic_user_id');
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
        Schema::drop('users');
    }
}
