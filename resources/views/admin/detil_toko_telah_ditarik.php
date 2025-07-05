<?php include 'detil_toko.php'; ?>
<style>
    .content-container {
        padding: 1.5rem 2.5rem; /* py-6 px-10 */
    }

    .transaction-block {
        display: flex;
        gap: 1rem; /* gap-4 */
        border: 1px solid #D1D5DB; /* border-gray-300 */
        border-radius: 0.5rem; /* rounded-lg */
        padding: 1rem; /* p-4 */
        margin-top: 10px;
        align-items: center;
    }

    .transaction-block img {
        width: 10rem;
        height: 10rem; 
        border-radius: 0.5rem; /* rounded */
        position: relative;
    }

    .transaction-info {
        flex: 1;
    }

    .transaction-title {
        font-weight: 600;
        margin-bottom: 10px;
    }

    .transaction-details {
        font-size: 0.875rem; /* text-sm */
        color: #374151; /* text-gray-700 */

    }

    .transaction-finish {
        margin-top: 10px;
        font-size: 0.875rem; /* text-sm */
        color: #374151; /* text-gray-700 */
        float: right;
        max-width: 250px;
    }

    .footer-info {
        font-size: 0.875rem; /* text-sm */
        color: #4B5563; /* text-gray-600 */
        padding-top: 1rem; /* pt-4 */
    }

    p {
        margin-block-end: 0;
    }
</style>

<div class="content-container space-y-6">
    <div>
        <p>Hendi - 42023041</p>
    </div>
            <div class="transaction-block">
        <img src="https://cdn-icons-png.flaticon.com/512/1829/1829586.png" alt="Cinque Terre">
        <div class="transaction-info">
            <div class="transaction-title">Boba Melekat Kayak Kamu #UEC0110</div>
            <div class="transaction-details">
                Pembeli: Hendi -<br>
                Teh Susu, Large - (1x 15.000)<br>
                Total: 15.000<br>
                Tanggal: 30-03-2025
            </div>
            <div class="transaction-finish">
                Total: 15.000<br>
                Barang Telah Diambil<br>
                Penjual Mengajukan Penarikan Dana<br>
            </div>
        </div>
    </div>

    <div class="footer-info">
        Menampilkan hasil: 1 dari 50
    </div>
</div>