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
        Schema::create('trucker_truck', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trucker_id');
            $table->unsignedBigInteger('truck_id');
            $table->foreign('trucker_id')->references('id')->on('truckers');
            $table->foreign('truck_id')->references('id')->on('trucks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trucker_truck');
    }
};
