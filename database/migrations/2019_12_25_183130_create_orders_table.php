<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {

            
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('customer_id')->nullable();
            $table->unsignedBigInteger('total_discount');
            $table->unsignedBigInteger('total_price');
            $table->unsignedBigInteger('total_profit');
            
            $table->unsignedBigInteger('payment');
            $table->unsignedBigInteger('due');
            $table->timestamps();

            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('customer_id')->references('id')->on('customers');

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}