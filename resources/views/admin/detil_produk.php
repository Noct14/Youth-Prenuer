<style>
    .header {
        background-color: #ddd;
        padding: 30px;
    }

    .header h1 {
        margin: 0;
        font-size: 28px;
    }

    .product-detail {
        padding: 30px;
        background-color: #f9f9f9;
    }

    .product-container {
        display: flex;
        gap: 30px;
        align-items: flex-start;
    }

    .product-image {
        width: 250px;
        height: 250px;
        background-color: #eee;
        border-radius: 10px;
        flex-shrink: 0;
    }

    .product-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .card-section {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .card-section h3 {
        margin: 0 0 10px;
        font-size: 16px;
        font-weight: normal;
        color: #555;
    }

    .card-section h4 {
        font-size: 16px;
        font-weight: bold;
        margin: 0 0 15px;
    }

    .variant-list {
        border-top: 1px solid #eee;
        margin-top: 10px;
        padding-top: 10px;
    }

    .variant-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 0;
        border-bottom: 1px solid #eee;
    }

    .variant-item:last-child {
        border-bottom: none;
    }

    .variant-item p {
        margin: 0;
    }

    .hapus {
        color: #000;
        font-size: 14px;
        cursor: pointer;
    }

    .note {
        font-size: 13px;
        color: #777;
        margin-top: 10px;
    }

    .action-buttons {
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 30px;
    }

    .action-buttons button {
        padding: 10px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        color: white;
    }

    .btn-delete {
        background-color: #d9534f;
    }

    .btn-warning {
        background-color: #343a40;
    }
</style>

<div class="product-detail">
    <div class="product-container">
        
        <!-- Gambar Produk -->
        <div class="product-image">
            asksksks
        </div>

        <!-- Informasi Produk -->
        <div class="product-info">
            <!-- Topping -->
            <div class="card-section">
                <h3>Topping</h3>
                <h4>Jelly</h4>
                <div class="variant-list">
                    <div class="variant-item">
                        <div>
                            <p>Jelly</p>
                            <p>Rp. 5.000</p>
                        </div>
                        <span class="hapus">| Hapus</span>
                    </div>

                    <div class="variant-item">
                        <div>
                            <p>Nata De Coco</p>
                            <p>Rp. 6.000</p>
                        </div>
                        <span class="hapus">Hapus</span>
                    </div>

                    <div class="variant-item">
                        <div>
                            <p>Pudding</p>
                            <p>Rp. 2.000</p>
                        </div>
                        <span class="hapus">Hapus</span>
                    </div>
                </div>
                <p class="note">Tambahkan Lainnya di Menu Ini</p>
            </div>

            <!-- Ukuran -->
            <div class="card-section">
                <h3>Ukuran</h3>
                <h4>Small</h4>
            </div>

            <!-- Variasi -->
            <div class="card-section">
                <h3>Tambahkan Judul Variasi</h3>
                <h4>Nama Variasi</h4>
                <div class="variant-list">
                    <div class="variant-item">
                        <div>
                            <p>Nama Variasi</p>
                            <p>Atur Harga</p>
                        </div>
                        <span class="hapus">Hapus</span>
                    </div>
                </div>
                <p class="note">Tambahkan Jenis Variasi Lainnya di Menu Ini</p>
            </div>
        </div>
    </div>
</div>

<div class="action-buttons">
    <button class="btn-delete">Hapus Produk Ini</button>
    <button class="btn-warning">Peringatkan Toko Ini</button>
</div>