<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('duration')->nullable();
            $table->string('study_mode')->nullable();
            $table->json('career_opportunities')->nullable();
            $table->json('entry_requirements')->nullable();
            $table->string('picture')->nullable();
            $table->enum('program_type', ['generic', 'upgrading'])->default('generic');
            $table->string('department_name')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};