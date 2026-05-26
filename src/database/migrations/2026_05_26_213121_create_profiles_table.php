<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            
            // Hero Section
            $table->string('hero_title')->nullable();
            $table->text('hero_description')->nullable();
        
            // About Section
            $table->text('about_story')->nullable();
            $table->text('project_description')->nullable();
        
            // Information Section & Photos
            $table->string('name')->nullable();
            $table->string('profile_photo')->nullable(); // Sudah diperbaiki
            $table->string('about_image')->nullable();   // Ditambahkan agar sinkron dengan Filament
            $table->string('phone')->nullable();
            $table->string('github')->nullable();
            $table->string('email')->nullable();
        
            // Stats Section
            $table->integer('experience_years')->default(0);
            $table->integer('happy_customers')->default(0);
            $table->integer('projects_finished')->default(0);
            $table->integer('digital_awards')->default(0);
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};