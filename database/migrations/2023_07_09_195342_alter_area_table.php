<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('areas', function (Blueprint $table) {
            $table->boolean('is_active')->after('name_ar')->default(1);
        });
        Schema::table('cities', function (Blueprint $table) {
            $table->boolean('is_active')->after('name_ar')->default(1);
        });

        Schema::table('districts', function (Blueprint $table) {
            $table->boolean('is_active')->after('name_ar')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
