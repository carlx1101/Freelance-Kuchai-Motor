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
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->id();

            $table->string('model')->nullable();
            $table->year('manufacture_year')->nullable();
            $table->string('capacity')->nullable();
            $table->string('colour')->nullable();
            $table->string('brand')->nullable();
            $table->longText('description')->nullable();

            $table->string('engine_type')->nullable();
            $table->string('displacement')->nullable();
            $table->string('max_power')->nullable();
            $table->string('max_torque')->nullable();
            $table->string('transmission')->nullable();
            $table->string('fuel_system')->nullable();
            $table->string('ignition_system')->nullable();

            $table->string('frame_type')->nullable();
            $table->string('front_suspension')->nullable();
            $table->string('rear_suspension')->nullable();
            $table->string('fuel_capacity')->nullable();
            $table->string('battery')->nullable();

            $table->string('pricing')->nullable();
            $table->boolean('availability')->nullable();

            $table->foreignId('salesman_id')->nullable()->references('id')->on('users');

            $table->integer('mileage')->nullable();
            $table->date('vehicle_registration_date')->nullable();
            $table->date('road_tax_expiry_date')->nullable();

            $table->string('motor_cover_filename')->nullable();
            $table->string('motor_cover_url')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorcycles');
    }
};
