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
        Schema::create('dmerchant', function (Blueprint $table) {
    $table->id('id_merchant');
    $table->foreignId('id_pengguna')->nullable()->constrained('dpengguna', 'id_pengguna')->onDelete('cascade');
    $table->string('nama_usaha', 100);
    $table->text('alamat')->nullable();
    $table->string('no_telepon', 20)->nullable();
    $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dmerchant');
    }
};
