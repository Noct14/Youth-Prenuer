<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Navbar UEC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #fff;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: #ffffff;
            border-bottom: 1px solid #ccc;
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
        }

        .nav-button {
            background-color: #f1f1f1; /* Warna latar belakang tombol nav */
            color: #333;
            border: 1px solid #ccc;
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none; /* Hapus garis bawah pada link */
            font-size: 14px;
            white-space: nowrap; /* Pastikan teks tidak patah baris */
            transition: background-color 0.2s, color 0.2s;
        }

        .nav-button:hover {
            background-color: #e0e0e0;
            color: #000;
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

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px;
            }

            .search-bar {
                margin: 15px 0;
                max-width: 100%;
            }

            .nav-buttons {
                margin-top: 10px;
                justify-content: center;
                width: 100%;
            }

            .nav-button, .logout-button {
                flex-grow: 1; /* Biarkan tombol memenuhi lebar di mobile */
                text-align: center;
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
            </div>
        </div>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Cari di Sini">
            <button class="clear-btn" onclick="clearSearch()">✖</button>
        </div>
        <div class="nav-buttons">
             <a href="daftar_transaksi.php" class="nav-button">Transaksi</a>
            <a href="keranjang.php" class="nav-button">Keranjang</a>
            <a href="favorit.php" class="nav-button">Favorit</a>
            <button class="logout-button">Logout</button>
        </div>
    </div>

    <script>
        function clearSearch() {
            document.getElementById('searchInput').value = '';
            document.getElementById('searchInput').focus();
        }
    </script>

</body>
</html>