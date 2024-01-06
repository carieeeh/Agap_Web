<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rescuer_locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rescuer_id');
            $table->unsignedBigInteger('emergency_id');
            $table->double('rescuer_latitude');
            $table->double('rescuer_longitude');
            $table->timestamps();

            $table->foreign('rescuer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recuer_locations');
    }
};
