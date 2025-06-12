<?php include 'header_buyer.php'; ?>
<title>Pencarian Produk</title>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    /* New wrapper for the grid to handle centering */
    .grid-wrapper {
        padding: 40px 20px; /* Overall padding around the grid */
        display: flex;
        justify-content: center; /* Center the grid itself */
        /* max-width is not needed here as grid will handle it */
    }

    /* Grid container for the product cards */
    .product-grid-container {
        display: grid;
        /* This is the key: auto-fit will try to fit as many columns as possible. */
        /* Forcing 5 columns using repeat(5, 1fr) for fixed count on wider screens */
        /* minmax will ensure responsiveness down to 1 column */
        grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
        gap: 20px; /* Space between cards */
        max-width: 1390px; /* (270px * 5 cards) + (20px * 4 gaps) = 1350px. Add a little buffer. */
        /* This max-width is crucial for controlling when the 5-column layout applies */
        /* and allowing the grid to center within the grid-wrapper. */
    }

    /* Styling for individual product cards (mostly unchanged, just adjusted to fit grid) */
    .product-card {
        width: 270px; /* Fixed width for each card */
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: transform 0.2s ease-in-out;
        display: flex; /* Make card a flex container */
        flex-direction: column; /* Stack image and content vertically */
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    .product-card-image {
        width: 100%;
        height: 200px;
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 1px solid #eee;
    }

    .product-card-image img {
        max-width: 80px;
        opacity: 0.3;
    }

    .product-card-content {
        padding: 15px;
        flex-grow: 1; /* Allows content to grow and push store name down */
        display: flex;
        flex-direction: column;
    }

    .product-card-title {
        font-size: 1.1em;
        font-weight: bold;
        color: #333;
        margin-bottom: 8px;
        line-height: 1.4; /* Improve readability */
    }

    .product-card-price {
        font-size: 1.15em;
        color: #000;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .product-card-store {
        font-size: 0.9em;
        color: #777;
        margin-top: auto; /* Pushes store name to the bottom */
    }

    /* Media queries for responsiveness - adjust max-width to control columns */
    /* On smaller screens, the 'auto-fit' will reduce the number of columns automatically */
    /* based on the minmax(270px, 1fr) setting. */
    @media (min-width: 1350px) { /* When screen is wide enough for 5 cards + gaps */
        .product-grid-container {
            grid-template-columns: repeat(5, 1fr); /* Force exactly 5 equal columns */
        }
    }

    @media (max-width: 1349px) and (min-width: 1080px) { /* For 4 columns (approx 270*4 + 20*3) */
        .product-grid-container {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 1079px) and (min-width: 810px) { /* For 3 columns */
        .product-grid-container {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 809px) and (min-width: 540px) { /* For 2 columns */
        .product-grid-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 539px) { /* For 1 column on very small screens */
        .product-grid-container {
            grid-template-columns: repeat(1, 1fr);
        }
        .product-card {
            width: 100%; /* Make card fill available width in single column */
        }
    }
</style>

<div class="grid-wrapper">
    <div class="product-grid-container">

        <div class="product-card">
            <div class="product-card-image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png" alt="Placeholder Image">
            </div>
            <div class="product-card-content">
                <div class="product-card-title">Nasi Katsu Gak Mau Ribet</div>
                <div class="product-card-price">Rp. 20.000</div>
                <div class="product-card-store">Dapur Cinta</div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-card-image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png" alt="Placeholder Image">
            </div>
            <div class="product-card-content">
                <div class="product-card-title">Boba Melekat Kayak Kamu</div>
                <div class="product-card-price">Rp. 10.000 - 20.000</div>
                <div class="product-card-store">Teh Tarik Kaiten</div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-card-image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png" alt="Placeholder Image">
            </div>
            <div class="product-card-content">
                <div class="product-card-title">Basreng Cakar Setan</div>
                <div class="product-card-price">Rp 12.000</div>
                <div class="product-card-store">BasrengMania</div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-card-image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png" alt="Placeholder Image">
            </div>
            <div class="product-card-content">
                <div class="product-card-title">Ricebowl Ayam Manja</div>
                <div class="product-card-price">Rp. 25.0000</div>
                <div class="product-card-store">Katering Manja</div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-card-image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png" alt="Placeholder Image">
            </div>
            <div class="product-card-content">
                <div class="product-card-title">Teh Tarik Tersedot Perasaan</div>
                <div class="product-card-price">Rp. 10.000</div>
                <div class="product-card-store">Henokh Drink</div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-card-image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png" alt="Placeholder Image">
            </div>
            <div class="product-card-content">
                <div class="product-card-title">Keripik Pisang Sinyal Hilang</div>
                <div class="product-card-price">Rp. 10.000</div>
                <div class="product-card-store">Pisang Mania</div>
            </div>
        </div>

        </div>
</div>

<?php include 'footer.php'; ?>