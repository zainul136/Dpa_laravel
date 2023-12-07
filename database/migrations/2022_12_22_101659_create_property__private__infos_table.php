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
        Schema::create('property__private__infos', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->string('owner_name')->nullable();
            $table->char('owner_contact_no')->nullable();
            $table->string('estate_name')->nullable();
            $table->char('estate_contact_no')->nullable();
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
        Schema::dropIfExists('property__private__infos');
    }
};
