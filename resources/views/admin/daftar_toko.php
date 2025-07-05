<style>
    .content {
        padding:48px;
        background-color: #f6f6f6;
    }

    .store-card {
        display: flex;
        padding: 20px;
        border-radius: 10px;
        background-color: #ffffff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        margin-bottom: 20px;
        border: 1px solid #ddd;
    }

    .store-image {
        width: 100px;
        height: 100px;
        background-color: #eee;
        border-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 20px;
        flex-shrink: 0;
    }

    .store-image img {
        width: 60%;
        opacity: 0.3;
    }

    .store-info {
        flex: 1;
    }

    .store-info h3 {
        margin: 0;
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    .store-info p {
        margin: 5px 0;
        font-size: 14px;
        color: #555;
    }

    .store-actions {
        margin-top: 10px;
    }

    .store-actions button {
        padding: 6px 12px;
        font-size: 14px;
        border-radius: 6px;
        border: 1px solid #aaa;
        background-color: #f9f9f9;
        color: 333;
        margin-right: 10px;
        cursor: pointer;
    }

    .store-actions a {
        padding: 6px 12px;
        font-size: 14px;
        text-decoration: none;
        color: rgb(98, 98, 98);
    }

    .store-actions a:hover {
        color: #000;
        font-style: bold;
    }

</style>

<body>
    <div class='content'>
        <div class="store-card">
            <div class="store-image">
                <img src="https://cdn-icons-png.flaticon.com/512/1829/1829586.png" alt="Icon Produk">
            </div>
            <div class="store-info">
                <h3>Teh Tarik Kalten</h3>
                <p>Pemilik: Kalten - 412022018</p>
                <p>Kontak:</p>
                <p>Dana Cair: Rp. 20.000</p>
                <p>Dana Tertahan: Rp. 50.000</p>
                <p>Berdiri Sejak: 01-02-2025</p>
                <p>Jumlah Produk: 2</p>
                <p>Jumlah Total Transaksi: 10</p>
                <div class="store-actions">
                    <a href="index.php?page=dt-toko">Lihat Detail</a>
                    <button>Hapus Toko</button>
                </div>
            </div>
        </div>

        <div class="store-card">
            <div class="store-image">
                <img src="https://cdn-icons-png.flaticon.com/512/1829/1829586.png" alt="Icon Produk">
            </div>
            <div class="store-info">
                <h3>Basreng Mania</h3>
                <p>Pemilik: Andreas - 412022002</p>
                <p>Kontak:</p>
                <p>Dana Cair: Rp. 20.000</p>
                <p>Dana Tertahan: Rp. 0</p>
                <p>Berdiri Sejak: 01-02-2025</p>
                <p>Jumlah Produk: 2</p>
                <p>Jumlah Total Transaksi: 1</p>
                <div class="store-actions">
                    <a href="#">Lihat Detil</a>
                    <button>Hapus Toko</button>
                </div>
            </div>
        </div>
    </div>

</body>
