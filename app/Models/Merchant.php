<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $table = 'dmerchant';
    protected $primaryKey = 'id_merchant';
    public $timestamps = false; // Karena di tabel dmerchant kamu tidak ada created_at/updated_at

    protected $fillable = ['id_pengguna', 'nama_usaha', 'alamat', 'no_telepon', 'status'];

    // Relasi: Merchant ini milik siapa? (Belongs-To)
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna', 'id_pengguna');
    }
}