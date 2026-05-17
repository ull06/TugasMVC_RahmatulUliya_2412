<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Management Menu - Ulya's Coffee</title>
    <link rel="stylesheet" href="{{ asset('css/style_admin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-admin">
        <div class="header-admin">
            <h1>Dashboard Management Menu</h1>
            <div class="action-buttons">
                <a href="/admin/tambah" class="btn-add">+ Tambah Menu</a>
                <a href="/" class="btn-view-site">Lihat Web Utama</a>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Menu</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $m)
                <tr>
                    <td><img src="{{ asset('images/' . $m->gambar) }}" class="img-preview"></td>
                    <td>{{ $m->nama_menu }}</td>
                    <td>{{ $m->kategori }}</td>
                    <td>Rp {{ number_format($m->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="/admin/edit/{{ $m->id }}" class="btn-edit">Edit</a>
                        <a href="/admin/hapus/{{ $m->id }}" class="btn-delete" onclick="return confirm('Yakin ingin menghapus menu ini?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>