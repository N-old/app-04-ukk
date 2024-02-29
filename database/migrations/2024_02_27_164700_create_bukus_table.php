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
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->nullable();
            $table->string('icon')->nullable();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->string('penulis');
            $table->string('penerbit');
            $table->year('tahun');
            $table->integer('stok');
            $table->text('deskripsi')->nullable();
            $table->string('cover')->nullable();
            $table->foreignId('kategori_id')
                ->constrained()
                ->cascadeOnDelete();
            // $table->foreignId('kategori_id')
            //     ->constrained()
            //     ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoris');
        Schema::dropIfExists('bukus');
    }
};
