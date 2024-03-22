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
        Schema::create('orders', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignId('wisata_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('namaPemesan');
            $table->string('phone')->nullable();
            $table->integer('jumlahTiket');
            $table->string('totalBayar');
            $table->boolean('statusBayar')->default(false);
            $table->string('buktiBayar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
