<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('library_hours', function (Blueprint $table) {
            $table->id();
            $table->string('day')->unique();
            $table->string('open_time')->nullable();
            $table->string('close_time')->nullable();
            $table->string('display_text')->nullable();
            $table->boolean('is_closed')->default(false);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('library_hours');
    }
};