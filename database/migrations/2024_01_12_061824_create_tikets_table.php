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
        Schema::create('tikets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('order_id')->constrained();
            $table->boolean('status')->default(true);
        });

        // Schema::create('tiket_user', function (Blueprint $table) {
        //     $table->foreignUuid('tiket_id');
        //     $table->foreignId('user_id');
        //     $table->string('kode_tiket');
        //     $table->boolean('status')->default(true);
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
