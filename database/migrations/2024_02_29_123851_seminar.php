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
        Schema::create('seminar', function (Blueprint $table) {
            $table->id();
            $table->string('id_seminar')->nullable();
            $table->string('judul_seminar')->nullable();
            $table->string('create_by')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('gambar')->nullable();
            $table->string('peserta_seminar');
            $table->string('tipe_posting')->nullable();
            $table->string('jadwal_seminar')->nullable();
            $table->string('lokasi_seminar')->nullable();
            $table->string('biaya_seminar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
