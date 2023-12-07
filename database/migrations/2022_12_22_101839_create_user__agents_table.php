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
        Schema::create('user__agents', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('agency_name')->nullable();
            $table->string('agency_website')->nullable();
            $table->string('agency_address')->nullable();
            $table->string('agency_location')->nullable();
            $table->string('agency_city')->nullable();
            $table->string('agency_description')->nullable();
            $table->string('agency_logo')->nullable();
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
        Schema::dropIfExists('user__agents');
    }
};
