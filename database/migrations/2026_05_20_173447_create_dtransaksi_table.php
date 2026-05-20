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
        Schema::create('dtransaksi', function (Blueprint $table) {
    $table->id('id_transaksi');
    $table->foreignId('id_merchant')->nullable()->constrained('dmerchant', 'id_merchant')->onDelete('cascade');
    $table->decimal('nominal', 15, 2);
    $table->timestamp('waktu_transaksi')->useCurrent();
    $table->enum('status_verifikasi', ['verified', 'pending', 'failed'])->nullable();
    $table->string('hash_transaksi', 100)->unique()->nullable();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtransaksi');
    }
};
