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
        Schema::create('dpengguna', function (Blueprint $table) {
    $table->id('id_pengguna'); // Custom Primary Key
    $table->string('nama', 50);
    $table->string('email', 50);
    $table->string('password_hash', 50); // Catatan: Jika pakai Auth bawaan Laravel, panjang kolom password disarankan minimal 60/255 karena karakter bcrypt panjang.
    $table->timestamps(); // Menggantikan created_at dan updated_at otomatis
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dpengguna');
    }
};
