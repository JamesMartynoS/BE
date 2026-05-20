<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        // Mengambil semua data transaksi beserta data merchant terkait
        $transaksi = Transaksi::with('merchant')->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Data transaksi berhasil diambil',
            'data' => $transaksi
        ], 200);
    }
}
