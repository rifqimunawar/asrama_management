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
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('judul',25)->nullable();
            $table->string('deskripsi', 55)->nullable();
            $table->string('img', 35)->nullable();
            $table->string('link', 40)->nullable();
            $table->string('thumnail_about', 40)->nullable();
            $table->string('link_about', 40)->nullable();
            $table->string('about', 40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home');
    }
};
