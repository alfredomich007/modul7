<?php

// Isi dari 2025_09_10_074837_create_uploads_table.php
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
        Schema::create('uploads', function (Blueprint $table) { 
            $table->id(); 
            $table->string('filename'); // Nama asli file [cite: 59, 60]
            $table->string('filepath'); // Lokasi penyimpanan file [cite: 62, 63]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */ 
    public function down(): void 
    {
        Schema::dropIfExists('uploads'); 
    }
}; 