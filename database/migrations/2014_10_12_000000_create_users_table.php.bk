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
            $table->bigIncrements('id');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('phone_number')->unique();
            $table->string('otp')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->enum('role', ['Admin', 'User']);
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->enum('member_type', ['1', '2','3']);
            $table->string('device_id')->nullable();
            $table->string('profile_id')->nullable();
            $table->string('imei')->nullable();
            $table->string('fb_id')->nullable();
            $table->string('profile_photo')->nullable();
            $table->float('rank')->nullable();
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
        Schema::dropIfExists('users');
    }
}
