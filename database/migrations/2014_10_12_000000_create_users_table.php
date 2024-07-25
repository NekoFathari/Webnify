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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable;
            $table->string('email')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'user'])->nullable; 
            $table->string('profile_photo_path')->default('default/path/to/photo')->change();
            $table->string('gelar_awal');
            $table->string('gelar_akhir');
            $table->enum('verifikasi', ['verified', 'unverified'])->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
