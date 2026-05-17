<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // 1. Kasih tahu Laravel nama tabelnya (karena kita buat 'menu')
    protected $table = 'menu';

    // 2. Tentukan kolom mana saja yang boleh diisi
    protected $fillable = ['nama_menu', 'kategori', 'harga', 'gambar'];

    // 3. Matikan fitur created_at dan updated_at (karena di tabel kita tidak ada kolom itu)
    public $timestamps = false;
}