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
            $table->string('manufacture_year')->nullable();
            $table->string('capacity')->nullable();
            $table->string('colour')->nullable();
            $table->string('description')->nullable();

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
            $table->string('availability')->nullable();

            $table->string('user_id')->nullable(); // assuming this is a foreign key reference to a salesperson

            $table->string('mileage')->nullable();
            $table->date('vehicle_registration_date')->nullable();
            $table->date('road_tax_expiry_date')->nullable();

            $table->string('motor_cover')->nullable();
            $table->string('motor_images')->nullable();


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
