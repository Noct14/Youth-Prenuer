<style>
    body {
        font-family: sans-serif;
        background-color: #ffffff;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .main-content-wrapper {
        background-color: #ffffff;
        padding: 60px;
        margin: 0;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        border-radius: 0;
        box-sizing: border-box;
        width: 100%;
    }

    /* Header 'Daftar Transaksi' utama */
    .page-main-header {
        font-weight: bold;
        font-size: 0.8em; /* Sama dengan keranjang */
        padding-bottom: 30px;
        margin-bottom: 30px;
        border-bottom: 1px solid #eee;
    }

    /* Modifikasi .shop-section menjadi .transaction-entry untuk setiap entri transaksi */
    .transaction-entry {
        margin-bottom: 40px; /* Sama dengan keranjang */
        padding-bottom: 40px; /* Sama dengan keranjang */
        border-bottom: 1px solid #eee; /* Sama dengan keranjang */
    }
    /* Hapus border bawah pada entri transaksi terakhir */
    .transaction-entry:last-of-type {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    /* Item Card sekarang akan menjadi detail transaksi inti */
    .transaction-item-detail {
        display: flex;
        align-items: flex-start; /* Align items to the top */
        padding: 0;
        width: 100%;
        box-sizing: border-box;
    }

    .item-placeholder {
        width: 100px; /* DIKECILKAN: Menyamakan dengan keranjang */
        height: 100px; /* DIKECILKAN: Menyamakan dengan keranjang */
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 20px; /* DIKECILKAN: Menyamakan dengan keranjang */
        border-radius: 4px;
        flex-shrink: 0;
        margin-bottom: 15px; /* Sama dengan keranjang */
    }
    .item-placeholder img {
        width: 70%;
        height: 70%;
        opacity: 0.5;
    }

    .transaction-info-group {
        flex-grow: 1;
    }

    .transaction-title {
        font-weight: bold;
        font-size: 1.2em; /* DIKECILKAN: Menyamakan dengan .item-name di keranjang */
        margin-bottom: 8px; /* DIKECILKAN: Menyamakan dengan keranjang */
    }

    .transaction-line-item {
        font-size: 0.9em; /* DIKECILKAN: Menyamakan dengan .item-info di keranjang */
        color: #555; /* Disesuaikan agar mirip .item-info di keranjang */
        margin-bottom: 5px; /* DIKECILKAN: Menyamakan dengan keranjang */
    }

    .transaction-total {
        font-weight: bold;
        font-size: 1.1em; /* DIKECILKAN: Sedikit lebih kecil dari .item-name tapi lebih besar dari .item-info, agar menonjol sebagai total */
        margin-top: 15px; /* DIKECILKAN: Menyamakan dengan .item-actions di keranjang */
        margin-bottom: 10px; /* DIKECILKAN: Disesuaikan */
    }

    .transaction-date {
        font-size: 0.9em; /* DIKECILKAN: Menyamakan dengan .item-info di keranjang */
        color: #555; /* Disesuaikan agar mirip .item-info di keranjang */
        margin-bottom: 15px; /* DIKECILKAN: Disesuaikan */
    }

    .transaction-status-action {
        display: flex;
        align-items: center;
        gap: 10px; /* DIKECILKAN: Menyamakan dengan .item-actions di keranjang */
        margin-top: 15px; /* DIKECILKAN: Menyamakan dengan .item-actions di keranjang */
    }

    .status-text {
        font-size: 0.9em; /* DIKECILKAN: Menyamakan dengan .item-info di keranjang */
        font-weight: 600;
        color: #333;
    }

    .komplain-button {
        padding: 8px 20px; /* DIKECILKAN: Menyamakan dengan tombol di keranjang */
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f8f8f8;
        cursor: pointer;
        font-size: 0.9em; /* DIKECILKAN: Menyamakan dengan tombol di keranjang */
        font-weight: normal;
        transition: background-color 0.2s ease-in-out;
    }
    .komplain-button:hover {
        background-color: #e0e0e0;
    }

    /* Footer checkout disembunyikan total (tetap sama) */
    .footer-checkout {
        display: none;
    }
    .checkout-button {
        display: none;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .main-content-wrapper {
            padding: 20px;
        }
        .page-main-header {
            padding-bottom: 15px;
            margin-bottom: 15px;
        }
        .transaction-entry {
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
        .transaction-item-detail {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .item-placeholder {
            width: 80px; /* DIKECILKAN: Sama dengan keranjang mobile */
            height: 80px; /* DIKECILKAN: Sama dengan keranjang mobile */
            margin-right: 0;
            margin-bottom: 10px; /* DIKECILKAN: Sama dengan keranjang mobile */
        }
        .transaction-title {
            font-size: 1.2em; /* Sama dengan keranjang mobile */
            margin-bottom: 10px;
        }
        .transaction-line-item,
        .transaction-total,
        .transaction-date,
        .status-text {
            font-size: 0.85em; /* DIKECILKAN: Sama dengan keranjang mobile */
        }
        .komplain-button {
            padding: 8px 15px; /* DIKECILKAN: Sama dengan keranjang mobile */
            font-size: 0.85em; /* DIKECILKAN: Sama dengan keranjang mobile */
        }
        .transaction-status-action {
            flex-direction: column;
            gap: 8px; /* DIKECILKAN: Sama dengan keranjang mobile */
            margin-top: 15px;
        }
    }
</style>
</head>
<body>
    <div class="main-content-wrapper">
        <div class="page-main-header dropdown">Pilih Waktu</div> <!-- belum selesai -->

        <div class="transaction-entry">
            <div class="transaction-item-detail">
                <div class="item-placeholder">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWltYWdlIj48cmVjdCB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHgzPSIzIiB5PSIzIiByeD0iMiIvPjxjaXJjbGUgY3g9IjgiIGCyPSI4IiByPSIyIi8+PHBvbHlsaW5lIHBvaW50cz0iNyAxMiAxMiAxNyAxNyAxMiAxMiAyMiIvPjwvc3ZnPg==" alt="Placeholder Image">
                </div>
                <div class="transaction-info-group">
                    <div class="transaction-title">Boba Melekat Kayak Kamu #UEC0101</div>
                    <div class="transaction-line-item">Jelly, Small - (4× 10.000)</div>
                    <div class="transaction-line-item">Jelly Susu, Large - (1× 15.000)</div>
                    <div class="transaction-total">Total: 55.000</div>
                    <div class="transaction-date">Tanggal: 01-04-2025</div>
                    <div class="transaction-status-action">
                        <span class="status-text">Pesanan Diambil</span>
                        <button class="komplain-button">Ajukan Komplain</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>
