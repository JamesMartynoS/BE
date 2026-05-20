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
        Schema::create('dverifikasi_blokchain', function (Blueprint $table) {
    $table->id('id_verifikasi');
    $table->foreignId('id_transaksi')->nullable()->constrained('dtransaksi', 'id_transaksi')->onDelete('cascade');
    $table->bigInteger('nomor_block')->nullable();
    $table->boolean('hash_match')->nullable(); // tinyint(1) di Laravel dipetakan sebagai boolean
    $table->timestamp('waktu_verifikasi')->useCurrent();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dverifikasi_blockchain');
    }
};
