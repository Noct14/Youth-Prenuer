<style>
    .tabs {
        display: flex;
        justify-content: center;
        gap: 0.5rem; /* sama dengan space-x-2 */
        padding-top: 1rem; /* sama dengan py-4 */
        padding-bottom: 1rem;
        /* border-bottom: 1px solid #D1D5DB; /* border-gray-300 */
        font-size: 0.875rem; /* text-sm */
    }

    .tab-link,
    .tabs button {
        padding: 0.25rem 0.75rem; /* py-1 px-3 */
        border-radius: 0.25rem;
        text-decoration: none;
        color: #000; /* warna teks hitam */
        background: none;
        border: none;
        cursor: pointer;
        text-align: center;
    }

    .tab-link:hover,
    .tabs button:hover {
        background-color: #E5E7EB; /* hover:bg-gray-200 */
    }

    .tab-active,
    .tabs button.active {
        background-color: #E5E7EB; /* bg-gray-200 */
        font-weight: 600; /* font-semibold */
    }
</style>


<div class="tabs">
    <a href="index.php?page=detil-akun"
       class="tab-link <?php echo $current_page === "detil-akun" ? 'tab-active' : ''; ?>">
        Kontak
    </a>
    <a href="index.php?page=dt-a-tr-belum-dibayar"
       class="tab-link <?php echo $current_page === "dt-a-tr-belum-dibayar" ? 'tab-active' : ''; ?>">
        Transaksi Belum Dibayar
    </a>
    <a href="index.php?page=dt-a-tr-diproses"
       class="tab-link <?php echo $current_page === "dt-a-tr-diproses" ? 'tab-active' : ''; ?>">
        Transaksi Diproses
    </a>
    <a href="index.php?page=dt-a-tr-selesai"
       class="tab-link <?php echo $current_page === "dt-a-tr-selesai" ? 'tab-active' : ''; ?>">
        Transaksi Selesai
    </a>
</div>
