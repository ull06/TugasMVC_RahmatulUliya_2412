<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulya's Coffee</title>
    <link rel="stylesheet" href="{{ asset('css/style_menu.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="navbar">
        <div class="logo">Ulya's Coffee</div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#minuman">Minuman</a></li>
            <li><a href="#makanan">Makanan</a></li>
            <li><a href="/admin">Edit Menu</a></li>
        </ul>
    </nav>

    <header id="home" class="hero">
        <div class="hero-content">
            <h4>Welcome to</h4>
            <h1>Ulya's Coffee</h1>
            <p>Menyajikan rasa yang tertinggal dalam setiap seduhan.</p>
            <a href="#minuman" class="btn">Lihat Menu</a>
        </div>
    </header>

    <section id="minuman" class="menu-section">
        <div class="container">
            <h2 class="category-title"><span>Our Signature</span>Minuman</h2>
            
            <div class="menu-grid">
                @foreach($data as $m)
                    @if($m->kategori == 'Iced Coffee' || $m->kategori == 'Milky Series')
                    <div class="menu-card">
                        <div class="menu-img">
                            <img src="{{ asset('images/' . $m->gambar) }}" alt="{{ $m->nama_menu }}">
                        </div>
                        <div class="menu-details">
                            <h3>{{ $m->nama_menu }}</h3>
                            <p class="category-tag">{{ $m->kategori }}</p>
                            <span class="price">Rp {{ number_format($m->harga, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>

        </div>
    </section>

    <section id="makanan" class="menu-section">
    <div class="container">
        <h2 class="category-title"><span>Delicious</span>Makanan</h2>
        <div class="menu-grid">
            @foreach($data as $m)
                {{-- Filter: Kita tampilkan data yang kategorinya Food atau Snacks --}}
                @if($m->kategori == 'Food' || $m->kategori == 'Snacks')
                <div class="menu-card">
                    <div class="menu-img">
                        <img src="{{ asset('images/' . $m->gambar) }}" alt="{{ $m->nama_menu }}">
                    </div>
                    <div class="menu-details">
                        <h3>{{ $m->nama_menu }}</h3>
                        <p class="category-tag">{{ $m->kategori }}</p>
                        <span class="price">Rp {{ number_format($m->harga, 0, ',', '.') }}</span>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>

</body>
</html>