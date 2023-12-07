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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('location')->nullable();
            $table->string('city')->nullable();
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('price');
            $table->string('land_area')->nullable();
            $table->string('unit')->nullable();
            $table->string('type')->nullable();
            $table->string('no_beds')->nullable();
            $table->string('no_baths')->nullable();
            $table->string('no_kitchen')->nullable();
            $table->string('no_store_room')->nullable();
            $table->string('floor_type')->nullable();
            $table->string('user_id')->nullable();
            $table->char('corner_place')->nullable();
            $table->char('commercial_area')->nullable();
            $table->char('built_status')->nullable();
            $table->string('status')->nullable();
            $table->string('deactivate_reason')->nullable();
            $table->string('upload_time')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
