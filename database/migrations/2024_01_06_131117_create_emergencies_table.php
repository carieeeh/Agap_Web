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
        Schema::create('emergencies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rescuer_id');
            $table->unsignedBigInteger('resident_id');
            $table->string('location_address');
            $table->string('type');
            $table->double('location_latitude');
            $table->double('location_longitude');
            $table->dateTime('date_accepted');
            $table->string('status');
            $table->json('needed_emergency_unit');
            $table->string('iamge');
            $table->timestamps();

            $table->foreign('rescuer_id')->references('id')->on('users');
            $table->foreign('resident_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergencies');
    }
};
