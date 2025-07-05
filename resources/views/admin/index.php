<?php include 'header_admin.php'; ?>

<section>
    <?php
    $content = "dashboard.php"; // Default content
    $mod = "";
    if (isset($_GET['page'])) {
            $mod = $_GET['page'];
    }

    switch ($mod) {
        case "dt":
            $content = "daftar_toko.php";
            break;
        case "dp":
            $content = "daftar_pembeli.php";
            break;
        case "tr":
            $content = "daftar_transaksi.php";
            break;
        case "dt-toko":
            $content = "detil_toko_produk.php";
            break;
        case "dt-tr-masuk":
            $content = "detil_toko_transaksi_masuk.php";
            break;
        case "dt-tr-diproses":
            $content = "detil_toko_transaksi_diproses.php";
            break;
        case "dt-tr-selesai":
            $content = "detil_toko_transaksi_selesai.php";
            break;
        case "dt-p-penarikan":
            $content = "detil_toko_pengajuan_penarikan.php";
            break;
        case "dt-ditarik":
            $content = "detil_toko_telah_ditarik.php";
            break;
        case "detil-produk":
            $content = "detil_produk.php";
            break;
        case "detil-akun":
            $content = "detil_akun_kontak.php";
            break;
        case "dt-a-tr-belum-dibayar":
            $content = "detil_akun_transaksi_belum_dibayar.php";
            break;
        case "dt-a-tr-diproses":
            $content = "detil_akun_transaksi_diproses.php";
            break;
        case "dt-a-tr-selesai":
            $content = "detil_akun_transaksi_selesai.php";
            break;
        default:
            $content = "dashboard.php";
    }
    include($content);
    ?>
</section>

<?php include 'footer.php'; ?>