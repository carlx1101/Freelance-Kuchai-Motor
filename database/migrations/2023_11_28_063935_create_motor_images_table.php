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
        Schema::create('motor_images', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->foreignId('motorcycle_id')->nullable()->references('id')->on('motorcycles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motor_images');
    }
};
