<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('important_dates', function (Blueprint $table) {
            // Rename start_date to display_start_date
            if (Schema::hasColumn('important_dates', 'start_date')) {
                $table->renameColumn('start_date', 'display_start_date');
            }
            
            // Rename end_date to display_end_date
            if (Schema::hasColumn('important_dates', 'end_date')) {
                $table->renameColumn('end_date', 'display_end_date');
            }
            
            // Add event date columns
            if (!Schema::hasColumn('important_dates', 'event_start_date')) {
                $table->date('event_start_date')->nullable()->after('display_end_date');
            }
            
            if (!Schema::hasColumn('important_dates', 'event_end_date')) {
                $table->date('event_end_date')->nullable()->after('event_start_date');
            }
            
            // Add description column if not exists
            if (!Schema::hasColumn('important_dates', 'description')) {
                $table->text('description')->nullable()->after('event_end_date');
            }
            
            // Remove color column if exists
            if (Schema::hasColumn('important_dates', 'color')) {
                $table->dropColumn('color');
            }
        });
    }

    public function down(): void
    {
        Schema::table('important_dates', function (Blueprint $table) {
            $table->renameColumn('display_start_date', 'start_date');
            $table->renameColumn('display_end_date', 'end_date');
            $table->dropColumn(['event_start_date', 'event_end_date', 'description']);
        });
    }
};