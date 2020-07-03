<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstimationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('time')->nullable();
            $table->integer('league_id');
            $table->integer('home');
            $table->integer('away');
            $table->string('home_can_win')->nullable();
            $table->string('can_draw')->nullable();
            $table->string('away_can_win')->nullable();
            $table->string('over')->nullable();
            $table->string('under')->nullable();
            $table->string('start_s')->nullable();
            $table->string('morning_s')->nullable();
            $table->string('evening_s')->nullable();
            $table->string('home_stand_level')->nullable();
            $table->string('away_stand_level')->nullable();
            $table->string('home_last_matchs')->nullable();
            $table->string('away_last_matchs')->nullable();
            $table->text('description');
            $table->string('odd')->nullable();
            $table->string('odd_value')->nullable();
            $table->integer('odd_team')->nullable();
            $table->string('odd_sign')->nullable();
            $table->string('over_under_odd')->nullable();
            $table->string('over_under_sign')->nullable();
            $table->string('over_under_odd_value')->nullable();
            $table->string('home_final_result')->nullable();
            $table->string('away_final_result')->nullable();
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
        Schema::dropIfExists('estimations');
    }
}
