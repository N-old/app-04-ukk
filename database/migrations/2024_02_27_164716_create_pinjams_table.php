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
        Schema::create('pinjam', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            // $table->foreignId('user_id')
            //     ->constrained()
            //     ->cascadeOnDelete();
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->enum('status', ['pinjam', 'kembali'])->default('pinjam');
            $table->timestamps();
        });
        Schema::create('detail_pinjam', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pinjam_id');
            $table->foreign('pinjam_id')
                ->references('id')
                ->on('pinjam')
                ->onDelete('cascade');
            $table->unsignedBigInteger('buku_id');
            $table->foreign('buku_id')
                    ->references('id')
                    ->on('buku')
                    ->onDelete('cascade');
            // $table->foreignId('pinjam_id')
            //     ->constrained()
            //     ->cascadeOnDelete();
            // $table->foreignId('buku_id')
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
        Schema::dropIfExists('pinjam');
        Schema::dropIfExists('detail_pinjam');
    }
};
