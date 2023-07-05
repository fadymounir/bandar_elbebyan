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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('description_en');
            $table->string('description_ar');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->double('gold_weight');
            $table->double('diamond_weight');
            $table->string('default_image');
            $table->double('price');
            $table->boolean('is_discount');
            $table->boolean('discount_value');
            $table->enum('discount_type',['percentage','value']);
            $table->boolean('is_available')->default(1);
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('products');
    }
};
