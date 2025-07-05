<?php include 'detil_toko.php'; ?>
<style>
        .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        padding: 50px;
    }

    .product-card {
        border: 1px solid #ccc;
        border-radius: 10px;
        overflow: hidden;
        background-color: #fff;
        margin: 3%;
    }

    .product-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
        margin-left: auto;
        margin-right: auto;
        background-color: #eee;
    }

    .product-card .info {
        padding: 15px;  
    }

    .product-card .info h4 {
        margin: 0 0 5px;
        font-size: 16px;
    }

    .product-card .info p {
        margin: 0;
        font-size: 14px;
    }

    .product-card .info p.price {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .product-card .info p.seller {
        color: #777;
        font-size: 13px;
    }

    .btn-group-view {
        margin-top: 10px;
        display: flex;
        justify-content: flex-end;
    }

    .btn-view {
        color: #E5E7EB;
        background-color: black;
        border: none;
        padding: 8px 16px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 14px;
    }

    .btn-view:hover{
        color: #fff;
    }
</style>
<div class="product-grid">
    <div class="product-card">
        <img src="https://cdn-icons-png.flaticon.com/512/1829/1829586.png" alt="Produk 1">
        <div class="info">
            <h4>Yoghurt Kiwi</h4>
            <p class="price">Rp. 20.000</p>
            <p class="seller">Teh Tarik Kalten</p>
            <div class='btn-group-view'>
              <a class='btn-view' href='index.php?page=detil-produk'>Lihat Produk</a>
            </div>
        </div>
    </div>
    <div class="product-card">
        <img src="https://cdn-icons-png.flaticon.com/512/1829/1829586.png" alt="Produk 2">
        <div class="info">
            <h4>Boba Melekat Kayak Kamu</h4>
            <p class="price">Rp. 10.000 - 20.000</p>
            <p class="seller">Teh Tarik Kalten</p>
            <div class='btn-group-view'>
              <a class='btn-view' href='index.php?page=detil-produk'>Lihat Produk</a>
            </div>
        </div>
    </div>
    <div class="product-card">
        <img src="https://cdn-icons-png.flaticon.com/512/1829/1829586.png" alt="Produk 3">
        <div class="info">
            <h4>Yoghurt Strawberry</h4>
            <p class="price">Rp. 10.000</p>
            <p class="seller">Teh Tarik Kalten</p>
            <div class='btn-group-view'>
              <a class='btn-view' href='index.php?page=detil-produk'>Lihat Produk</a>
            </div>
        </div>
    </div>
</div>