<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perm_role', function (Blueprint $table) {
        	$table->integer('role_id')->unsigned();
        	$table->integer('permission_id')->unsigned();
            $table->integer('clinic_id')->unsigned();
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
        Schema::drop('perm_role');
    }
}
