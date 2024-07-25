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
        Schema::create('feeds', function (Blueprint $table) {
            $table->id();
            $table->string('id_feeds')->nullable();
            $table->string('judul_feeds')->nullable();
            $table->string('create_by')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('gambar');
            $table->string('tipe_posting')->nullable();
            $table->string('reaction');
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
