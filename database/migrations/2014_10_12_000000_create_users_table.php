<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('password');
            $table->string('phone');
            $table->string('co_phone');
            $table->string('company');
            $table->string('job_title');
            $table->text('comments');
            $table->string('type');
            $table->date('supplier_call_date');
            $table->boolean('agree');
            $table->rememberToken();
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
