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
        Schema::create('diagnostic', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->integer('umur');
            $table->string('alamat', 255);
            $table->boolean('jenis_kelamin');
            $table->boolean('hasil_diagnosa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnostic');
    }
};