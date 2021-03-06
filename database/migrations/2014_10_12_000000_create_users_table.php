<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('employee_id');
            $table->date('birth_date');
            $table->string('gender');
            $table->string('status');
            $table->string('address');
            $table->string('email')->unique();
            $table->unsignedBigInteger('role_id')->unsigned();
            $table->foreign('role_id')->references('role_id')->on('roles')->onDelete('cascade');
            $table->string('phone_no');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}