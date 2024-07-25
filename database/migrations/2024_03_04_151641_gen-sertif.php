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
        Schema::create('gensertif', function (Blueprint $table) {
            $table->id();
            $table->string('id_seminar')->nullable();
            $table->string('id_sertifikat')->nullable();
            $table->string('id-publish')->nullable();
            $table->enum('font', ['Arial', 'Times New Roman', 'Calibri'])->nullable();
            $table->string('size')->default('24')->nullable();
            $table->enum('status', ['published', 'unpublished'])->default('unpublished')->nullable();
            $table->string('widget-1');
            $table->string('widget-2');
            $table->string('widget-3');
            $table->string('breakpoint-x-1');
            $table->string('breakpoint-y-1');
            $table->string('breakpoint-x-2');
            $table->string('breakpoint-y-2');
            $table->string('breakpoint-x-3');
            $table->string('breakpoint-y-3');
            $table->string('ttd-1');
            $table->string('ttd-2');
            $table->string('ttd-3');
            $table->string('ttd-4');
            $table->string('breakpoint-x-ttd-1');
            $table->string('breakpoint-y-ttd-1');
            $table->string('breakpoint-x-ttd-2');
            $table->string('breakpoint-y-ttd-2');
            $table->string('breakpoint-x-ttd-3');
            $table->string('breakpoint-y-ttd-3');
            $table->string('breakpoint-x-ttd-4');
            $table->string('breakpoint-y-ttd-4');
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
