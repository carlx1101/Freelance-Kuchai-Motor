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
        Schema::table('accessories', function (Blueprint $table) {
            $table->string('accessory_cover_filename')->nullable()->after('availability');
            $table->string('accessory_cover_url')->nullable()->after('accessory_cover_filename');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accessories', function (Blueprint $table) {
            $table->dropColumn('accessory_cover_url');
            $table->dropColumn('accessory_cover_filename');
        });
    }
};
