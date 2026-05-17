**Caffe Management System - Laravel MVC Project**
Projek ini adalah sistem manajemen menu kafe berbasis web yang dibangun menggunakan framewordk laravel dan
database MySQL/HeidiSQL. Projek ini dibangun untuk memenuhi tugas penerpan konsep MVC pada framework laravel.

**Fitur dan Fungsi Program**
1. Halaman pelanggan (`/`):
   - Menampilkan katalog menu kopi dan makanan.
2. Halaman Dashboard Admin (`/admin`):
   - Read: Menampilkan semua daftar menu dalam bentuk tabel manajemen
   - Create: Menampilkan data menu lengkap dengan fitur unggah gambar
   - Update: Mengubah informasi menu yang sudah ada dengan menampilkan data terlebih dahulu pada form
   - Delete: Mengahapus data menu dari database beserta proteksi konfirmasi sebelum menghapus.


**Penerapan Konsep MVC**
1. Model (pengelola data):
   Direpresentasikan oleh file menu.php. Bagian ini bertugas sebagai jembatan yang menghubungkan kode program
   langsung ke tabel menu di database melalu fitur Eluquent ORM. Model ini juga mengatur properti $fillable
   untuk keamanan data.
2. View (Antarmuka Pengguna):
   Menggunakan Blade Templating Engine milik laravell. Tugasnya hanya meneriman data siap pakai dari controller
   dan menampilkannya ke dalam struktur HTML/CSS. View tidak melakukan query langsung di databese.
4. Controller (Otak/Logika Sistem):
   Direpresentasikan oleh `MenuController.php`. Sebagai pengendali sistem. Controller meneriman permintaan pengguna
   dari Route, meminta data yang diperlukan ke Model, memproses logika, lalu mengirimkan hasilnya ke view.

   **Struktur File Utama**
   1. Jalur Akses (Routing):
      `routes/web.php` -> Jalur URL sistem
   3. Bagian Model:
      `app/Models/Menu.php` -> Representasi tabel database dalam kode. Mengatur hak akses untuk input data ke kolom
      nama_menu, kategori, harga, dan gambar.
   5. Bagian Controller:
      Berisi logika utama program yang berisi fungsi fungsi penting dalam sistem
      - indek(): mengambil semau data untuk halaman utama pelanggan
      - admin(): mengambil data untuk tabel manajemen admin
      - create(): menngambil data untuk tabel manajemen admin
      - create() & store(): menampilkan form tambah dan memproses simpan data + upload gambar
      - edit() & upload(): mengambil data lama berdasarkan ID ke form edit dan memproses perubahan datanya
      - Delete(): mencari data berdasarkan ID lalu menghapusnya dari database.
   7. Bagian View:
      Semua file tampilan menggunakan ekstensi `blade.php` dan terletak pada folder `resource/views/`:
      - `menu_coffee.blade.php` : tampilan katalog utama yang dilihat pengguna
      - `admin.blade.php`: tampilan dashboard admin berupa tabel yang berisi tombol aksi edit, hapus, dan tambah
      - `form_tambah.blade.php`: tampilan form input kosong untuk menambah menu baru
      - `edit_menu.blade.php`: tampilan form edit yang otomatis terisi data lama berdasarkan menu yang dipilih.
   9. Bagian Pendukung (Gambar & CSS):
       - `public/images/`: forlder tempat file gambar asli hasil upload dari form admin
       - `public/css/`: berisi file stylesheets untuk mengatur tampilan view.
     


 ** CARA MENJALANKAN PROGRAM**
  1. Masuk ke folder projek via CMD
     - buka cmd masuk ke tempat projek disimpan
  3. Aktifkan dan jalankan server laravel
     - ketik perintah aktifkan server laravel setelah masuk ke tempat projek disimpan: php artisan serve
  5. Aktifkan Database Laragon
     - buka aplikasi laragon
     - klik tombol Start All
     - jika database db_coffe_ulya.sql belum ada, jangan lupa untuk import filenya
  7. Jalankan aplikasi di browser
     - ketik perintah ini di browser: http://127.0.0.1:8000
  
