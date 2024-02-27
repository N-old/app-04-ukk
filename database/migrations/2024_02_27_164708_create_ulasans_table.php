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
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buku_id');
            $table->foreign('buku_id')
                ->references('id')
                ->on('buku')
                ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            // $table->foreignId('buku_id')
            //     ->constrained()
            //     ->cascadeOnDelete();
            // $table->foreignId('user_id')
            //     ->constrained()
            //     ->cascadeOnDelete();
            $table->text('komentar');
            $table->enum('rating',['1','2','3','4','5']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan');
    }
};
