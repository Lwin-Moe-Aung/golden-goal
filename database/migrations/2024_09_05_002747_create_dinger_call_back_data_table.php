<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDingerCallBackDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinger_call_back_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('totalAmount');
            $table->string('transactionStatus');
            $table->string('methodName');
            $table->string('providerName');
            $table->string('merchantOrderId');
            $table->string('transactionId');
            $table->string('customerName');
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
        Schema::dropIfExists('dinger_call_back_data');
    }
}
