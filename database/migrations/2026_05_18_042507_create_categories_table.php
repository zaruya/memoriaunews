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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });
        //pada saat migrate terjadi error, karena urutan kategori harus di proses sebelum post, karena post membutuhkan category_id sebagai foreign key, sehingga kita harus membuat migration kategori terlebih dahulu sebelum post, dengan cara merename migration kategori menjadi tanggal yang lebih awal dari post, agar saat migrate tidak terjadi error
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
