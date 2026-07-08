<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('important_dates', function (Blueprint $table) {
            // Add description column if it doesn't exist
            if (!Schema::hasColumn('important_dates', 'description')) {
                $table->text('description')->nullable()->after('end_date');
            }
            
            // Remove color column if it exists
            if (Schema::hasColumn('important_dates', 'color')) {
                $table->dropColumn('color');
            }
        });
    }

    public function down(): void
    {
        Schema::table('important_dates', function (Blueprint $table) {
            if (Schema::hasColumn('important_dates', 'description')) {
                $table->dropColumn('description');
            }
            
            if (!Schema::hasColumn('important_dates', 'color')) {
                $table->string('color')->default('red')->after('end_date');
            }
        });
    }
};