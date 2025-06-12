<?php include 'header_buyer.php'; ?>

<title>Detail Toko</title>
<style>
    body {
        font-family: Arial, sans-serif; /* Mengikuti font dari contoh pencarian */
        margin: 0;
        padding: 0;
        background-color: #ffffff; /* Latar belakang tetap putih */
        box-sizing: border-box;
    }

    /* Menggunakan wrapper baru untuk grid untuk centering */
    .grid-wrapper {
        padding: 40px 20px; /* Overall padding sekitar grid */
        display: flex;
        justify-content: center; /* Center the grid container */
    }

    /* main-content-wrapper diubah untuk menampung header toko dan grid */
    .main-content-wrapper {
        background-color: #ffffff;
        margin: 0; /* Tidak ada margin atas/bawah agar menyatu dengan header/footer */
        box-shadow: 0 2px 4px rgba(0,0,0,0.05); /* Sedikit bayangan */
        border-radius: 0; /* Tanpa border-radius */
        box-sizing: border-box;
        width: 100%;
        /* Padding untuk konten di dalamnya, tapi tidak ada padding yang membuat "gap" di atas/bawah */
        padding-top: 40px; /* Padding atas untuk konten Detil Toko */
        padding-left: 60px; /* Padding kiri/kanan konsisten */
        padding-right: 60px; /* Padding kiri/kanan konsisten */
        padding-bottom: 40px; /* Padding bawah untuk konten sebelum footer */
    }

    /* Bagian Header Detail Toko */
    .shop-detail-header {
        margin-bottom: 40px; /* Jarak antara header detail toko dan daftar produk */
    }

    .shop-detail-title {
        font-weight: bold;
        font-size: 1.8em; /* Ukuran font 'Detil Toko' */
        margin-bottom: 10px;
        color: #333;
    }

    .shop-name {
        font-weight: normal; /* Nama toko tidak terlalu tebal */
        font-size: 1.5em; /* Ukuran font 'Teh Tarik Kalten' */
        color: #333;
    }

    /* Grid container untuk kartu produk (mirip dengan kode pencarian) */
    .product-grid-container {
        display: grid;
        /* Ini adalah kuncinya: auto-fit akan mencoba menampung sebanyak mungkin kolom. */
        grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); /* Ukuran kartu 270px */
        gap: 20px; /* Jarak antar kartu */
        max-width: 1390px; /* (270px * 5 cards) + (20px * 4 gaps) = 1350px. Tambahkan sedikit buffer. */
        /* max-width ini krusial untuk mengontrol kapan layout 5-kolom berlaku */
        /* dan memungkinkan grid untuk berada di tengah dalam grid-wrapper. */
        margin-left: auto; /* Untuk memposisikan grid di tengah jika ada ruang lebih */
        margin-right: auto; /* Untuk memposisikan grid di tengah jika ada ruang lebih */
    }

    /* Styling untuk kartu produk individu */
    .product-card {
        width: 270px; /* Fixed width untuk setiap kartu */
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: transform 0.2s ease-in-out;
        display: flex;
        flex-direction: column;
        text-decoration: none; /* Hapus underline jika product-card adalah link */
        color: inherit; /* Warisi warna teks */
        overflow: hidden; /* Pastikan konten tidak keluar dari border-radius */
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    .product-card-image {
        width: 100%;
        height: 200px; /* Tinggi gambar */
        background-color: #f5f5f5; /* Warna background gambar */
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 1px solid #eee;
    }

    .product-card-image img {
        max-width: 80px; /* Ukuran ikon placeholder */
        opacity: 0.3;
    }

    .product-card-content {
        padding: 15px; /* Padding di dalam kartu */
        flex-grow: 1; /* Memungkinkan konten tumbuh dan mendorong nama toko ke bawah */
        display: flex;
        flex-direction: column;
    }

    .product-card-title {
        font-size: 1.1em;
        font-weight: bold;
        color: #333;
        margin-bottom: 8px;
        line-height: 1.4;
    }

    .product-card-price {
        font-size: 1.15em;
        color: #000;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .product-card-store {
        font-size: 0.9em;
        color: #777;
        margin-top: auto; /* Mendorong nama toko ke bagian bawah kartu */
    }

    /* Media queries untuk responsivitas - menyesuaikan max-width untuk mengontrol kolom */
    /* Pada layar yang lebih kecil, 'auto-fit' akan mengurangi jumlah kolom secara otomatis */
    /* berdasarkan pengaturan minmax(270px, 1fr). */
    @media (min-width: 1350px) { /* Ketika layar cukup lebar untuk 5 kartu + gaps */
        .product-grid-container {
            grid-template-columns: repeat(5, 1fr); /* Paksa tepat 5 kolom sama besar */
        }
    }

    @media (max-width: 1349px) and (min-width: 1080px) { /* Untuk 4 kolom (sekitar 270*4 + 20*3) */
        .product-grid-container {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 1079px) and (min-width: 810px) { /* Untuk 3 kolom */
        .product-grid-container {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 809px) and (min-width: 540px) { /* Untuk 2 kolom */
        .product-grid-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 539px) { /* Untuk 1 kolom di layar sangat kecil */
        .product-grid-container {
            grid-template-columns: repeat(1, 1fr);
        }
        .product-card {
            width: 100%; /* Buat kartu memenuhi lebar yang tersedia dalam satu kolom */
        }
    }
</style>
</head>
<body>

    <div class="main-content-wrapper">
        <div class="shop-detail-header">
            <div class="shop-detail-title">Detil Toko</div>
            <div class="shop-name">Teh Tarik Kalten</div>
        </div>

        <div class="grid-wrapper">
            <div class="product-grid-container">

                <a href="#" class="product-card">
                    <div class="product-card-image">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWltYWdlIj48cmVjdCB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHgzPSIzIiB5PSIzIiByeD0iMiIvPjxjaXJjbGUgY3g9IjgiIGCyPSI4IiByPSIyIi8+PHBvbHlsaW5lIHBvaW50cz0iNyAxMiAxMiAxNyAxNyAxMiAxMiAyMiIvPjwvc3ZnPg==" alt="Placeholder Image">
                    </div>
                    <div class="product-card-content">
                        <div class="product-card-title">Yoghurt Kiwi</div>
                        <div class="product-card-price">Rp. 20.000</div>
                        <div class="product-card-store">Teh Tarik Kalten</div>
                    </div>
                </a>

                <a href="#" class="product-card">
                    <div class="product-card-image">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWltYWdlIj48cmVjdCB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHgzPSIzIiB5PSIzIiByeD0iMiIvPjxjaXJjbGUgY3g9IjgiIGCyPSI4IiByPSIyIi8+PHBvbHlsaW5lIHBvaW50cz0iNyAxMiAxMiAxNyAxNyAxMiAxMiAyMiIvPjwvc3ZnPg==" alt="Placeholder Image">
                    </div>
                    <div class="product-card-content">
                        <div class="product-card-title">Boba Melekat Kayak Kamu</div>
                        <div class="product-card-price">Rp. 10.000 - 20.000</div>
                        <div class="product-card-store">Teh Tarik Kalten</div>
                    </div>
                </a>

                <a href="#" class="product-card">
                    <div class="product-card-image">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWltYWdlIj48cmVjdCB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHgzPSIzIiB5PSIzIiByeD0iMiIvPjxjaXJjbGUgY3g9IjgiIGCyPSI4IiByPSIyIi8+PHBvbHlsaW5lIHBvaW50cz0iNyAxMiAxMiAxNyAxNyAxMiAxMiAyMiIvPjwvc3ZnPg==" alt="Placeholder Image">
                    </div>
                    <div class="product-card-content">
                        <div class="product-card-title">Yoghurt Strawberry</div>
                        <div class="product-card-price">Rp. 10.000</div>
                        <div class="product-card-store">Teh Tarik Kalten</div>
                    </div>
                </a>

                <a href="#" class="product-card">
                    <div class="product-card-image">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWltYWdlIj48cmVjdCB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHgzPSIzIiB5PSIzIiByeD0iMiIvPjxjaXJjbGUgY3g9IjgiIGCyPSI4IiByPSIyIi8+PHBvbHlsaW5lIHBvaW50cz0iNyAxMiAxMiAxNyAxNyAxMiAxMiAyMiIvPjwvc3ZnPg==" alt="Placeholder Image">
                    </div>
                    <div class="product-card-content">
                        <div class="product-card-title">Nasi Katsu Gak Mau Ribet</div>
                        <div class="product-card-price">Rp. 20.000</div>
                        <div class="product-card-store">Dapur Cinta</div>
                    </div>
                </a>

                <a href="#" class="product-card">
                    <div class="product-card-image">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWltYWdlIj48cmVjdCB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHgzPSIzIiB5PSIzIiByeD0iMiIvPjxjaXJjbGUgY3g9IjgiIGCyPSI4IiByPSIyIi8+PHBvbHlsaW5lIHBvaW50cz0iNyAxMiAxMiAxNyAxNyAxMiAxMiAyMiIvPjwvc3ZnPg==" alt="Placeholder Image">
                    </div>
                    <div class="product-card-content">
                        <div class="product-card-title">Teh Tarik Tersedot Perasaan</div>
                        <div class="product-card-price">Rp. 10.000</div>
                        <div class="product-card-store">Henokh Drink</div>
                    </div>
                </a>

                <a href="#" class="product-card">
                    <div class="product-card-image">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWltYWdlIj48cmVjdCB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHgzPSIzIiB5PSIzIiByeD0iMiIvPjxjaXJjbGUgY3g9IjgiIGCyPSI4IiByPSIyIi8+PHBvbHlsaW5lIHBvaW50cz0iNyAxMiAxMiAxNyAxNyAxMiAxMiAyMiIvPjwvc3ZnPg==" alt="Placeholder Image">
                    </div>
                    <div class="product-card-content">
                        <div class="product-card-title">Keripik Pisang Sinyal Hilang</div>
                        <div class="product-card-price">Rp. 10.000</div>
                        <div class="product-card-store">Pisang Mania</div>
                    </div>
                </a>

            </div> </div> </div> <?php include 'footer.php'; ?>
</body>
</html>