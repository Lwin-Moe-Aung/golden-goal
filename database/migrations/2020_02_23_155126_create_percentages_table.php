<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePercentagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('percentages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('start_date')->nullable();
            $table->string('match')->nullable();
            $table->string('home')->nullable();
            $table->string('draw')->nullable();
            $table->string('away')->nullable();
            $table->string('goal_over')->nullable();
            $table->string('goal_under')->nullable();
            $table->enum('publish', ['0', '1'])->default('1');
            $table->integer('estimation_id');
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
        Schema::dropIfExists('percentages');
    }
}
