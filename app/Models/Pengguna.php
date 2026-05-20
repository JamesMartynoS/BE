<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    // Beri tahu Laravel nama tabel aslinya
    protected $table = 'dpengguna'; 

    // Beri tahu Laravel primary key aslinya
    protected $primaryKey = 'id_pengguna';

    // Kolom apa saja yang boleh diisi (Mass Assignment)
    protected $fillable = ['nama', 'email', 'password_hash'];
    
    // Relasi: Satu pengguna bisa punya banyak merchant (One-to-Many)
    public function merchants()
    {
        return $this->hasMany(Merchant::class, 'id_pengguna', 'id_pengguna');
    }
}
