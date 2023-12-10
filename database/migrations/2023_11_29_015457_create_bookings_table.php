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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('message')->nullable();
            $table->string('datetime')->nullable();
            $table->string('status')->default("Active");
            $table->unsignedBigInteger('motorcycle_id')->nullable();
            $table->foreign('motorcycle_id')->references('id')->on('motorcycles')->onDelete('set null');

         // Add the salesman_id column
            $table->unsignedBigInteger('salesman_id')->nullable();

            // Set up the foreign key relationship
            $table->foreign('salesman_id')->references('id')->on('users')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
