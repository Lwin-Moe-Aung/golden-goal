<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key');
            $table->enum('publish', ['0', '1'])->default('1');
            $table->string('original');
            $table->string('thumb320x50');
            $table->string('thumb300x250');
            $table->string('thumb320x480');

            $table->string('changes_ads_type')->nullable();
            $table->string('changes_url')->nullable();
            $table->string('percentage_ads_type')->nullable();
            $table->string('percentage_url')->nullable();
            $table->string('estimate_ads_type')->nullable();
            $table->string('esitimage_ads_url')->nullable();
            $table->string('estimate_detail_ads_type')->nullable();
            $table->string('estimate_detail_url')->nullable();

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
        Schema::dropIfExists('ads');
    }
}
