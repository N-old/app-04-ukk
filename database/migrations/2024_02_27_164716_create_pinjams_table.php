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
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('buku_id')
                ->constrained()
                ->cascadeOnDelete();
            // $table->foreignId('user_id')
            //     ->constrained()
            //     ->cascadeOnDelete();
            $table->date('tanggal_pinjam')->nullable();
            $table->date('tanggal_kembali')->nullable();
            $table->enum('status', ['pinjam', 'kembali'])->default('pinjam')->nullable();
            $table->timestamps();
        });
        // Schema::create('detail_pinjams', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('pinjam_id')
        //         ->constrained()
        //         ->cascadeOnDelete();
        //     $table->foreignId('buku_id')
        //         ->constrained()
        //         ->cascadeOnDelete();
            // $table->foreignId('pinjam_id')
            //     ->constrained()
            //     ->cascadeOnDelete();
            // $table->foreignId('buku_id')
            //     ->constrained()
            //     ->cascadeOnDelete();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjams');
        Schema::dropIfExists('detail_pinjams');
    }
};
