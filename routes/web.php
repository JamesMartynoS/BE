<?php

use App\Http\Controllers\TransaksiController;

// Contoh route untuk mengambil semua data transaksi
Route::get('/transaksi', [TransaksiController::class, 'index']);

// Contoh route untuk mencatat transaksi baru
Route::post('/transaksi/baru', [TransaksiController::class, 'store']);
