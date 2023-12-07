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
        Schema::create('rate__properties', function (Blueprint $table) {
            $table->id();
            $table->string('purpose')->nullable();
            $table->string('category')->nullable();
            $table->string('street')->nullable();
            $table->string('location')->nullable();
            $table->string('city')->nullable();
            $table->integer('land_area');
            $table->string('land_area_unit')->nullable();
            $table->string('corner_place')->nullable();
            $table->string('commercial_area')->nullable();
            $table->string('built_status')->nullable();
            $table->string('description')->nullable();
            $table->integer('user_id');
            $table->string('average_price')->nullable();
            $table->integer('count');
            $table->integer('total_assigned_agents');

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
        Schema::dropIfExists('rate__properties');
    }
};
