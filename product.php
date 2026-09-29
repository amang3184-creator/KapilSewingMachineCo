<?php

include "db.php";

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid product.");
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM products WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Product not found.");
}

$product = $result->fetch_assoc();

/* WhatsApp number */
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

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
<?php echo htmlspecialchars($product['name']); ?> |
Kapil Sewing Machine Co.
</title>

<style>

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background: #f6f6f6;
    color: #111;
}

/* HEADER */

header {
    background: #111;
    color: white;
    padding: 18px 7%;
}

.header-container {
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
    width: 45px;
    height: 45px;
    object-fit: contain;
    border-radius: 5px;
}

.logo h2 {
    font-size: 20px;
}

nav {
    display: flex;
    gap: 22px;
    align-items: center;
}

nav a {
    color: white;
    text-decoration: none;
    font-size: 15px;
}

nav a:hover {
    color: #d71920;
}

.call-btn {
    background: #d71920;
    padding: 10px 18px;
    border-radius: 6px;
    font-weight: bold;
}

/* PRODUCT SECTION */

.product-section {
    max-width: 1150px;
    margin: 60px auto;
    padding: 0 20px;
}

.back-link {
    display: inline-block;
    margin-bottom: 25px;
    color: #d71920;
    text-decoration: none;
    font-weight: bold;
}

.product-container {
    background: white;
    border-radius: 15px;
    padding: 40px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.08);
}

/* IMAGE */

.product-image {
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fafafa;
    border-radius: 12px;
    padding: 30px;
    min-height: 450px;
}

.product-image img {
    width: 100%;
    max-width: 450px;
    max-height: 450px;
    object-fit: contain;
}

/* DETAILS */

.product-details {
    padding: 20px 0;
}

.brand {
    color: #d71920;
    font-size: 15px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
}

.product-details h1 {
    font-size: 42px;
    margin-bottom: 20px;
}

.price {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 25px;
}

.info-box {
    display: flex;
    gap: 15px;
    margin-bottom: 25px;
}

.info {
    background: #f5f5f5;
    padding: 15px 20px;
    border-radius: 8px;
}

.info strong {
    display: block;
    font-size: 13px;
    color: #666;
    margin-bottom: 5px;
}

.info span {
    font-weight: bold;
}

.description {
    line-height: 1.7;
    color: #555;
    margin-bottom: 30px;
}

/* BUTTONS */

.buttons {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.btn {
    display: inline-block;
    text-decoration: none;
    padding: 14px 24px;
    border-radius: 7px;
    font-weight: bold;
    text-align: center;
}

.whatsapp {
    background: #25D366;
    color: white;
}

.call {
    background: #d71920;
    color: white;
}

.machines {
    background: #111;
    color: white;
}

.btn:hover {
    opacity: 0.9;
}

/* FOOTER */

footer {
    background: #111;
    color: #aaa;
    text-align: center;
    padding: 25px;
    margin-top: 60px;
}

footer strong {
    color: white;
}

/* MOBILE */

@media (max-width: 768px) {

    .header-container {
        flex-direction: column;
    }

    nav {
        flex-wrap: wrap;
        justify-content: center;
    }

    .product-container {
        grid-template-columns: 1fr;
        padding: 25px;
        gap: 25px;
    }

    .product-image {
        min-height: 300px;
    }

    .product-details h1 {
        font-size: 32px;
    }

    .price {
        font-size: 27px;
    }

    .buttons {
        flex-direction: column;
    }

    .btn {
        width: 100%;
    }

}

</style>

</head>

<body>

<!-- HEADER -->

<header>

<div class="header-container">

<div class="logo">

<img src="ksm-logo.jpeg" alt="Kapil Sewing Machine Co.">

<h2>Kapil Sewing Machine Co.</h2>

</div>

<nav>

<a href="index.html">Home</a>

<a href="products.php">Machines</a>

<a href="about.php">About</a>

<a href="locations.php">Locations</a>

<a href="contact.php">Contact</a>

<a class="call-btn" href="tel:+919820758796">
Call Now
</a>

</nav>

</div>

</header>


<!-- PRODUCT -->

<section class="product-section">

<a class="back-link" href="products.php">
← Back to All Machines
</a>

<div class="product-container">

<!-- IMAGE -->

<div class="product-image">

<img
src="<?php echo htmlspecialchars($product['image']); ?>"
alt="<?php echo htmlspecialchars($product['name']); ?>"
>

</div>


<!-- DETAILS -->

<div class="product-details">

<div class="brand">

<?php echo htmlspecialchars($product['brand']); ?>

</div>

<h1>

<?php echo htmlspecialchars($product['name']); ?>

</h1>

<div class="price">

₹<?php echo number_format($product['price']); ?>

</div>


<div class="info-box">

<div class="info">

<strong>Brand</strong>

<span>
<?php echo htmlspecialchars($product['brand']); ?>
</span>

</div>


<div class="info">

<strong>Warranty</strong>

<span>

<?php

echo !empty($product['warranty'])
    ? htmlspecialchars($product['warranty'])
    : "Contact Us";

?>

</span>

</div>

</div>


<p class="description">

<?php

echo !empty($product['description'])
    ? htmlspecialchars($product['description'])
    : "For product details, availability and current pricing, please contact Kapil Sewing Machine Co.";

?>

</p>


<div class="buttons">

<a
class="btn whatsapp"
href="<?php echo $whatsappLink; ?>"
target="_blank"
>
WhatsApp Enquiry
</a>


<a
class="btn call"
href="tel:+919820758796"
>
Call Now
</a>


<a
class="btn machines"
href="products.php"
>
View All Machines
</a>

</div>

</div>

</div>

</section>


<!-- FOOTER -->

<footer>

<p>
<strong>Kapil Sewing Machine Co.</strong>
</p>

<p>
Wholesale & Retail • Domestic to Industrial Sewing Machines
</p>

<p>
© 2026 Kapil Sewing Machine Co. All Rights Reserved.
</p>

</footer>

</body>

</html>