<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('changes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('start_date')->nullable();
            $table->string('match')->nullable();
            $table->string('start_body')->nullable();
            $table->string('start_goal')->nullable();
            $table->string('morning_body')->nullable();
            $table->string('morning_goal')->nullable();
            $table->string('evening_body')->nullable();
            $table->string('evening_goal')->nullable();
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
        Schema::dropIfExists('changes');
    }
}
