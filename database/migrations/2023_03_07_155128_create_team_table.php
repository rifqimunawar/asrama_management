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
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100)->nullable();
            $table->string('posisi', 100)->nullable();
            $table->string('hp', 80)->nullable();
            $table->string('kampus', 80)->nullable();
            $table->string('domisili', 80)->nullable();
            $table->string('pembayaran', 80)->nullable();
            $table->string('img', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team');
    }
};
