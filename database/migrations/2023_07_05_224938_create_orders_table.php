<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('address_id')->references('id')->on('user_addresses');
            $table->double('products_fees');
            $table->double('products_total');
            $table->double('delivery_fees');
            $table->double('total');
            $table->enum('status',['new_order','in_delivery','delivered_order','cancelled']);
            $table->enum('payment_type',['cash','tamara','tabby']);
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
        Schema::dropIfExists('orders');
    }
};
