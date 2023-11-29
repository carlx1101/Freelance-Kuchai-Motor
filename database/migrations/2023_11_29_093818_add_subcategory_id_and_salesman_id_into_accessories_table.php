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
            $table->foreignId('subcategory_id')->nullable()->after('availability')->references('id')->on('subcategories');
            $table->foreignId('salesman_id')->nullable()->after('subcategory_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accessories', function (Blueprint $table) {
            $table->dropForeign(['subcategory_id']);
            $table->dropForeign(['salesman_id']);

            $table->dropColumn('subcategory_id');
            $table->dropColumn('salesman_id');
        });
    }
};
