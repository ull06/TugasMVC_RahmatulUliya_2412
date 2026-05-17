<?php

namespace App\Http\Controllers;

use App\Models\Menu; // Menghubungkan ke Model
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // 1. Menampilkan halaman utama untuk PELANGGAN
    public function index() {
        $data = Menu::all(); 
        return view('menu_coffee', compact('data'));
    }

    // 2. Menampilkan halaman tabel untuk ADMIN
    public function admin() {
        $data = Menu::all();
        return view('admin', compact('data'));
    }

    // 3. Menampilkan FORM TAMBAH menu
    public function create() {
        return view('form_tambah');
    }

    // 4. PROSES SIMPAN data dari form ke Database
    public function store(Request $request) {
        // Proses upload gambar
        $file = $request->file('gambar');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $file->move('images', $nama_file);

        // Simpan data ke tabel menu
        Menu::create([
            'nama_menu' => $request->nama_menu,
            'kategori'  => $request->kategori,
            'harga'     => $request->harga,
            'gambar'    => $nama_file,
        ]);

        return redirect('/admin')->with('success', 'Menu berhasil ditambah!');
    }

    // 5. PROSES HAPUS data
    public function delete($id) {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/admin')->with('success', 'Menu berhasil dihapus!');
    }

    // 6. Menampilkan halaman FORM EDIT (Mengambil data lama)
    public function edit($id) {
        $menu = Menu::find($id); // Cari data yang mau diedit berdasarkan ID
        return view('edit_menu', compact('menu')); // Kirim datanya ke file edit_menu.blade.php
    }

    // 7. PROSES UPDATE data yang sudah diedit ke Database
    public function update(Request $request, $id) {
        $menu = Menu::find($id);

        // Jika ada upload gambar baru, proses gambarnya
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move('images', $nama_file);
            $menu->gambar = $nama_file; // Update nama gambar baru
        }

        // Update data lainnya
        $menu->update([
            'nama_menu' => $request->nama_menu,
            'kategori'  => $request->kategori,
            'harga'     => $request->harga,
        ]);

        return redirect('/admin')->with('success', 'Menu berhasil diperbarui!');
    }
}