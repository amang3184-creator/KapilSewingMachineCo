<?php

include "db.php";

$result = $conn->query("SELECT * FROM products ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Machines | Kapil Sewing Machine Co.</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            color: #222;
        }

        /* HEADER */

        header {
            background: #111;
            color: white;
            padding: 15px 5%;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav {
            max-width: 1200px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            width: 48px;
            height: 48px;
            object-fit: contain;
            background: white;
            border-radius: 6px;
        }

        .logo-text {
            font-size: 20px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        .nav-links a:hover {
            color: #d71920;
        }

        .nav-button {
            background: #d71920;
            padding: 10px 16px;
            border-radius: 6px;
            color: white !important;
        }

        /* HERO */

        .hero {
            background:
                linear-gradient(
                    rgba(0,0,0,0.65),
                    rgba(0,0,0,0.65)
                ),
                url("cover-photo.png");

            background-size: cover;
            background-position: center;

            min-height: 360px;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;
            color: white;

            padding: 40px 20px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
        }

        /* PRODUCTS */

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 60px 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 34px;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #666;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .product-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width: 100%;
            height: 240px;
            object-fit: contain;
            background: #f8f8f8;
            padding: 15px;
        }

        .product-content {
            padding: 22px;
        }

        .brand {
            color: #d71920;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .product-content h3 {
            font-size: 23px;
            margin-bottom: 8px;
        }

        .category {
            color: #777;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .description {
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .price {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .warranty {
            color: #555;
            font-size: 14px;
            margin-bottom: 18px;
        }

        .product-actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            flex: 1;
            text-align: center;
            padding: 11px 10px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        .btn-primary {
            background: #d71920;
            color: white;
        }

        .btn-primary:hover {
            background: #b9141a;
        }

        .btn-secondary {
            background: #111;
            color: white;
        }

        .btn-secondary:hover {
            background: #333;
        }

        /* FOOTER */

        footer {
            background: #111;
            color: white;
            padding: 40px 20px 20px;
            margin-top: 50px;
        }

        .footer-container {
            max-width: 1200px;
            margin: auto;

            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .footer-column h3 {
            margin-bottom: 15px;
        }

        .footer-column p {
            color: #ccc;
            margin-bottom: 8px;
        }

        .footer-column a {
            color: #ccc;
            text-decoration: none;
        }

        .copyright {
            max-width: 1200px;
            margin: 30px auto 0;
            padding-top: 20px;
            border-top: 1px solid #333;
            text-align: center;
            color: #aaa;
            font-size: 14px;
        }

        /* MOBILE */

        @media (max-width: 900px) {

            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 700px) {

            .nav {
                flex-direction: column;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero h1 {
                font-size: 36px;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .footer-container {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


<!-- HEADER -->

<header>

    <div class="nav">

        <div class="logo">

            <img
                src="ksm-logo.jpeg"
                alt="Kapil Sewing Machine Co. Logo"
            >

            <div class="logo-text">
                Kapil Sewing Machine Co.
            </div>

        </div>


        <nav class="nav-links">

            <a href="index.html">
                Home
            </a>

            <a href="products.php">
                Machines
            </a>

            <a href="about.php">
                About
            </a>

            <a href="locations.php">
                Locations
            </a>

            <a href="contact.php">
                Contact
            </a>

            <a
                class="nav-button"
                href="tel:+919820758796"
            >
                Call Now
            </a>

        </nav>

    </div>

</header>


<!-- HERO -->

<section class="hero">

    <div>

        <h1>Our Machines</h1>

        <p>
            Quality sewing machines for homes,
            tailors, boutiques and industries.
        </p>

    </div>

</section>


<!-- PRODUCTS -->

<main class="container">

    <div class="section-title">

        <h2>Explore Our Machines</h2>

        <p>
            Choose a machine and view its complete details.
        </p>

    </div>


    <div class="products-grid">


        <?php

        if ($result && $result->num_rows > 0) {

            while ($product = $result->fetch_assoc()) {

                /*
                 * Decide which WhatsApp number to use.
                 *
                 * Jack and Kia products:
                 * Nallasopara
                 *
                 * Other products:
                 * Andheri
                 */

                if (
                    stripos($product['brand'], 'Jack') !== false ||
                    $product['brand'] === 'Kia'
                ) {

                    $whatsappNumber = '919082776192';

                } else {

                    $whatsappNumber = '919820758796';

                }


                $whatsappMessage =
                    "Hello Kapil Sewing Machine Co., I am interested in " .
                    $product['name'] .
                    ". Price: ₹" .
                    number_format($product['price']) .
                    ".";


                $whatsappLink =
                    "https://wa.me/" .
                    $whatsappNumber .
                    "?text=" .
                    urlencode($whatsappMessage);

                ?>


                <!-- PRODUCT CARD -->

                <div class="product-card">


                    <img
                        class="product-image"
                        src="<?php echo htmlspecialchars($product['image']); ?>"
                        alt="<?php echo htmlspecialchars($product['name']); ?>"
                    >


                    <div class="product-content">


                        <div class="brand">

                            <?php
                            echo htmlspecialchars($product['brand']);
                            ?>

                        </div>


                        <h3>

                            <?php
                            echo htmlspecialchars($product['name']);
                            ?>

                        </h3>


                        <div class="category">

                            <?php
                            echo htmlspecialchars($product['category']);
                            ?>

                        </div>


                        <div class="description">

                            <?php
                            echo htmlspecialchars($product['description']);
                            ?>

                        </div>


                        <div class="price">

                            ₹<?php
                            echo number_format($product['price']);
                            ?>

                        </div>


                        <?php if (!empty($product['warranty'])) { ?>

                            <div class="warranty">

                                Warranty:
                                <?php
                                echo htmlspecialchars($product['warranty']);
                                ?>

                            </div>

                        <?php } ?>


                        <div class="product-actions">


                            <a
                                class="btn btn-secondary"
                                href="product.php?id=<?php echo $product['id']; ?>"
                            >
                                View Details
                            </a>


                            <a
                                class="btn btn-primary"
                                href="<?php echo $whatsappLink; ?>"
                                target="_blank"
                            >
                                WhatsApp
                            </a>


                        </div>


                    </div>

                </div>


                <?php

            }

        } else {

            ?>

            <p>
                No products found.
            </p>

            <?php

        }

        ?>

    </div>

</main>


<!-- FOOTER -->

<footer>

    <div class="footer-container">


        <div class="footer-column">

            <h3>
                Kapil Sewing Machine Co.
            </h3>

            <p>
                Wholesale & Retail Sewing Machines
            </p>

            <p>
                Domestic to Industrial Sewing Machines
            </p>

        </div>


        <div class="footer-column">

            <h3>
                Quick Links
            </h3>

            <p>
                <a href="index.html">
                    Home
                </a>
            </p>

            <p>
                <a href="products.php">
                    Machines
                </a>
            </p>

            <p>
                <a href="about.php">
                    About
                </a>
            </p>

            <p>
                <a href="locations.php">
                    Locations
                </a>
            </p>

            <p>
                <a href="contact.php">
                    Contact
                </a>
            </p>

        </div>


        <div class="footer-column">

            <h3>
                Contact
            </h3>

            <p>
                📞
                <a href="tel:+919820758796">
                    +91 98207 58796
                </a>
            </p>

            <p>
                📞
                <a href="tel:+919082776192">
                    +91 90827 76192
                </a>
            </p>

            <p>
                📧
                <a href="mailto:kapilsewingmachineco@gmail.com">
                    Email Us
                </a>
            </p>

        </div>


    </div>


    <div class="copyright">

        © 2026 Kapil Sewing Machine Co.
        All Rights Reserved.

    </div>

</footer>


</body>

</html>