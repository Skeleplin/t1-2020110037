<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string('isbn', 13)->primary();
            $table->string('judul');
            $table->integer('halaman');
            $table->string('kategori')->default('uncategorized');
            $table->string('penerbit');
            $table->timestamps();
        });
    }

    /**
     * Mundurkan migrasi.
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
