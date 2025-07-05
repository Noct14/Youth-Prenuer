<!DOCTYPE html>
<html lang="id">
<?php
    $current_page = isset($_GET['page']) ? $_GET['page'] : 'db';

    $title = "Dashboard";

    // Title & Subtitle
    $header_title = "Selamat Datang Admin";
    $header_subtitle = "Dashboard";

    switch ($current_page) {
        case 'dt':
            $title = "Daftar Toko";
            $header_title = "Daftar Toko";
            $header_subtitle = "";
            break;
        case 'dp':
            $title = "Daftar Pembeli";
            $header_title = "Daftar Pembeli";
            $header_subtitle = "";
            break;
        case 'tr':
            $title = "Daftar Transaksi";
            $header_title = "Transaksi";
            $header_subtitle = "";
            break;
        case 'dt-toko':
            $title = "Detail Toko - Produk";
            $header_title = "Detail Toko";
            $header_subtitle = "Teh Tarik Kalten";
            break;
        case 'dt-tr-masuk':
            $title = "Detail Toko - Transaksi Masuk";
            $header_title = "Detail Toko";
            $header_subtitle = "Teh Tarik Kalten - Transaksi Masuk";
            break;
        case 'dt-tr-diproses':
            $title = "Detail Toko - Transaksi Diproses";
            $header_title = "Detail Toko";
            $header_subtitle = "Teh Tarik Kalten - Transaksi Diproses";
            break;
        case 'dt-tr-selesai':
            $title = "Detail Toko - Transaksi Selesai";
            $header_title = "Detail Toko";
            $header_subtitle = "Teh Tarik Kalten - Transaksi Selesai";
            break;
        case 'dt-p-penarikan':
            $title = "Detail Toko - Pengajuan Penarikan";
            $header_title = "Detail Toko";
            $header_subtitle = "Teh Tarik Kalten - Pengajuan Penarikan";
            break;
        case 'dt-ditarik':
            $title = "Detail Toko - Telah Ditarik";
            $header_title = "Detail Toko";
            $header_subtitle = "Teh Tarik Kalten - Telah Ditarik";
            break;
        case 'detil-produk':
            $title = "Detail Produk";
            $header_title = "Detail Produk";
            $header_subtitle = "Boba Melekat Kaya Kamu - Teh Tarik Kalten";
            break;
        case 'detil-akun':
            $title = "Detail Akun - Kontak";
            $header_title = "Detail Akun";
            $header_subtitle = "Andreas - 412022014";
            break;
        case "dt-a-tr-belum-dibayar":
            $title = "Detail Akun - Transaksi Belum Dibayar";
            $header_title = "Transaksi Belum Dibayar";
            $header_subtitle = "Andreas - 412022014";
            break;
        case "dt-a-tr-diproses":
            $title = "Detail Akun - Transaksi Diproses";
            $header_title = "Transaksi Diproses";
            $header_subtitle = "Andreas - 412022014";
            break;
        case "dt-a-tr-selesai":
            $title = "Detail Akun -Transaksi Selesai";
            $header_title = "Transaksi Selesai";
            $header_subtitle = "Andreas - 412022014";
            break;
        default:
            // Biarkan nilai default: dashboard
            break;
    }
?>
<title><?php echo $title; ?></title>
<head>
    <meta charset="UTF-8">
    <link href="uec.png" rel='shorcut icon'>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #fff;
        }

        .navbar {
            display: flex;
            align-items: center;
            padding: 15px 30px;
            background-color: #ffffff;
            border-bottom: 1px solid #ccc;
        }

        .navbar-con {
            width: 100%;
            align-items: center;
            background-color: #ffffff;
        }

        .navbar-search {
            display: flex;
            width: 100%;
            align-items: center;
            background-color: #ffffff;
            justify-content: space-between;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-container img {
            width: 60px; /* Diperbarui: 2.5 cm = ~95px */
            height: 60px; /* Diperbarui: 2.5 cm = ~95px */
            margin-right: 10px;
        }

        .logo {
            font-weight: bold;
            line-height: 1.2;
            color: #333; /* Default color for logo */
        }

        .search-bar {
            position: relative;
            width: 100%;
            max-width: 750px;
            box-sizing: border-box;
            display: inline-block;
            border-radius: 30px;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 0 20px; /* Memberi sedikit jarak dari logo dan tombol */
        }

        .search-bar input {
            width: 90%;
            float: left;
            padding: 10px 12px;
            border: none;
            outline: none;
            box-sizing: border-box;
            font-size: 16px;
        }

        .search-bar:hover {
            box-shadow: 0 4px 6px rgba(0,0,0,0.2);
        }

        .search-bar button {
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: #333;
            width: auto;
            transition: background-color 0.2s;
            background-color: transparent;
            float: right;
        }

        .nav-buttons {
            display: flex;
            align-items: center;
            gap: 10px; /* Jarak antar tombol */
            padding: 10px;
        }

        .nav-menu {
            padding-bottom: 0px;
        }

        .nav-button {
            color:rgb(133, 133, 133);
            padding: 8px 16px;
            cursor: pointer;
            text-decoration: none; /* Hapus garis bawah pada link */
            font-size: 14px;
            white-space: nowrap; /* Pastikan teks tidak patah baris */
            transition: background-color 0.2s, color 0.2s;
            margin-left:10px;
        }

        .nav-button:hover {
            color: #000;
            transform: translateY(-1px);
        }

        .active {
            border-bottom: 2px solid #5f5f5f;
        }

        .logout-button {
            background-color: #333;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            white-space: nowrap;
            transition: background-color 0.2s;
        }

        .logout-button:hover {
            background-color: #555;
        }

        .header {
            background-color: #ddd;
            padding: 30px;
        }

        .header h1 {
            margin: 0;
        }

        .header p {
            font-size: 20px;
            color: gray;
            margin: 5px 0 0;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px;
            }

            .navbar-search {
                flex-direction: column;
            }

            .search-bar {
                margin: 15px 0;
                max-width: 100%;
            }

            .nav-buttons {
                margin-top: 10px;
                justify-content: center;
                width: 100%;
                gap: 3px; /* Jarak antar tombol */
                padding: 0;
            }

            .nav-button, .logout-button {
                flex-grow: 1; /* Biarkan tombol memenuhi lebar di mobile */
                text-align: center;
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo-container">
            <img src="uec.png" alt="Logo UEC">
            <div class="logo">
                Ukrida E Commerce
                <br>Admin
            </div>
        </div>
        <div class = "navbar-con">
            <div class="navbar-search">
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Cari di Sini">
                    <button class="clear-btn" onclick="clearSearch()">✖</button>
                </div>
                <div class="nav-buttons">
                    <button class="logout-button">Logout</button>
                </div>
            </div>

            <div class="nav-buttons nav-menu">
                <a href="index.php" class="nav-button <?php echo $current_page === 'db' ? 'active' : ''; ?>">Dashboard</a>
                <a href="index.php?page=dt" class="nav-button <?php echo $current_page === 'dt' ? 'active' : ''; ?>">Daftar Toko</a>
                <a href="index.php?page=dp" class="nav-button <?php echo $current_page === 'dp' ? 'active' : ''; ?>">Daftar Pembeli</a>
                <a href="index.php?page=tr" class="nav-button <?php echo $current_page === 'tr' ? 'active' : ''; ?>">Transaksi</a>
            </div>
        </div>
    
    </div>

    <div class="header">
        <h1><?php echo $header_title; ?></h1>
        <p><?php echo $header_subtitle; ?></p>
    </div>

    <script>
        function clearSearch() {
            document.getElementById('searchInput').value = '';
            document.getElementById('searchInput').focus();
        }
    </script>

</body>
</html>