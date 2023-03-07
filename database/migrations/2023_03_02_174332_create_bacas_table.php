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
        Schema::create('bacas', function (Blueprint $table) {
            $table->id();
            $table->string('judul_novel');
            $table->string('cover');
            $table->string('penulis');
            $table->integer('rating');
            $table->string('kategori');
            $table->string('jumlah_pembaca');
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bacas');
    }
};
