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
        Schema::create('tm_data_absensi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->text('anggota')->nullable(); // Store selected anggota as JSON array
            $table->string('dokumentasi');
            $table->string('keterangan');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tm_data_absensi');
    }
};
