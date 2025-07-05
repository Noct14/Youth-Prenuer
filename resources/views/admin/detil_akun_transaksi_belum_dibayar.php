<?php include "detil_akun.php"; ?>
<style>
    .content-container {
        padding: 1.5rem 2.5rem; /* py-6 px-10 */
    }

    .transaction-block {
        display: flex;
        align-items: center;
        gap: 1rem; /* gap-4 */
        border: 1px solid #D1D5DB; /* border-gray-300 */
        border-radius: 0.5rem; /* rounded-lg */
        padding: 1rem; /* p-4 */
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
        margin: 5px;
        margin-bottom: 10px;
    }

    .transaction-details {
        font-size: 0.875rem; /* text-sm */
        color: #374151; /* text-gray-700 */
    }

    .transaction-details p {
        margin: 5px;
    }

    .transaction-total {
        font-size: 0.875rem; /* text-sm */
        color: #374151; /* text-gray-700 */
        float: right;
        max-width: 200px;
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
    </div>
    <div class="transaction-block">
        <img src="https://cdn-icons-png.flaticon.com/512/1829/1829586.png" alt="Cinque Terre">
        <div class="transaction-info">
            <div class="transaction-title">Boba Melekat Kayak Kamu #UEC0108</div>
            <div class="transaction-details">
                <p>Pembeli: Andreas - 412022002</p>
                <p>Teh Susu, Medium - (4x 12.000)</p>
                <p>Total: 12.000</p>
                <p>Tanggal: 30-03-2025</p>
            </div>
            <div class="transaction-total">
                Total: 48.000
            </div>
        </div>
    </div>

    <div class="footer-info">
        Menampilkan hasil: 1 dari 50
    </div>
</div>