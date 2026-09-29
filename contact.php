<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us | Kapil Sewing Machine Co.</title>

    <meta
        name="description"
        content="Contact Kapil Sewing Machine Co. for sewing machine enquiries, wholesale orders, retail purchases and product support."
    >

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
            line-height: 1.6;
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
            border-radius: 6px;
            background: white;
        }

        .logo-text {
            font-size: 20px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 22px;
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
            font-weight: bold;
        }

        .nav-button:hover {
            background: #b9141a;
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

            min-height: 380px;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;
            color: white;

            padding: 40px 20px;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 19px;
            color: #eee;
        }

        /* MAIN */

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

        /* CONTACT CARDS */

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-bottom: 60px;
        }

        .contact-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .contact-icon {
            font-size: 35px;
            margin-bottom: 15px;
        }

        .contact-card h3 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .contact-card p {
            color: #666;
            margin-bottom: 8px;
        }

        .contact-card a {
            color: #d71920;
            text-decoration: none;
            font-weight: bold;
        }

        .contact-card a:hover {
            text-decoration: underline;
        }

        /* BUTTONS */

        .buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
            font-size: 15px;
        }

        .btn-primary {
            background: #f9f5f5;
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

        .btn-whatsapp {
            background: #25D366;
            color: white;
        }

        .btn-whatsapp:hover {
            background: #1da851;
        }

        /* ENQUIRY SECTION */

        .enquiry-section {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);

            margin-bottom: 60px;
        }

        .enquiry-section h2 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .enquiry-section > p {
            color: #666;
            margin-bottom: 30px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            font-weight: bold;
            margin-bottom: 7px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 13px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-family: Arial, sans-serif;
            font-size: 15px;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #d71920;
        }

        textarea {
            min-height: 130px;
            resize: vertical;
        }

        .submit-area {
            margin-top: 25px;
        }

        /* LOCATIONS */

        .locations {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .location-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .location-card h3 {
            font-size: 24px;
            margin-bottom: 12px;
        }

        .location-card p {
            color: #666;
            margin-bottom: 8px;
        }

        /* FOOTER */

        footer {
            background: #111;
            color: white;
            padding: 40px 20px 20px;
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

        .footer-column a:hover {
            color: white;
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

        @media (max-width: 800px) {

            .nav {
                flex-direction: column;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
                gap: 12px;
            }

            .hero h1 {
                font-size: 36px;
            }

            .contact-grid,
            .locations,
            .form-grid,
            .footer-container {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }

            .enquiry-section {
                padding: 25px;
            }
        }

    </style>

</head>

<body>


<!-- HEADER -->

<header>

    <div class="nav">

        <div class="logo">

            <img src="ksm-logo.jpeg" alt="Kapil Sewing Machine Co. Logo">

            <div class="logo-text">
                Kapil Sewing Machine Co.
            </div>

        </div>


        <nav class="nav-links">

            <a href="index.html">Home</a>

            <a href="products.php">Machines</a>

            <a href="about.php">About</a>

            <a href="locations.php">Locations</a>

            <a href="contact.php">Contact</a>

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

    <div class="hero-content">

        <h1>Contact Us</h1>

        <p>
            Have a question about a sewing machine?
            Contact Kapil Sewing Machine Co. today.
        </p>

    </div>

</section>


<!-- CONTACT INFORMATION -->

<main class="container">

    <div class="section-title">

        <h2>Get In Touch</h2>

        <p>
            We are available for retail purchases, wholesale enquiries,
            machine guidance and product support.
        </p>

    </div>


    <div class="contact-grid">


        <!-- ANDHERI -->

        <div class="contact-card">

            <div class="contact-icon">📍</div>

            <h3>Andheri</h3>

            <p>
                Shop No. 2, Dubey Building,<br>
                Old Nagardas Road,<br>
                Andheri East, Mumbai – 400059
            </p>

            <p>
                📞
                <a href="tel:+919820758796">
                    +91 98207 58796
                </a>
            </p>

            <div class="buttons">

                <a
                    class="btn btn-primary"
                    href="tel:+919820758796"
                >
                    Call Andheri
                </a>

                <a
                    class="btn btn-whatsapp"
                    href="https://wa.me/919820758796?text=Hello%20Kapil%20Sewing%20Machine%20Co.%2C%20I%20have%20an%20enquiry."
                    target="_blank"
                >
                    WhatsApp
                </a>

            </div>

        </div>


        <!-- NALLASOPARA -->

        <div class="contact-card">

            <div class="contact-icon">📍</div>

            <h3>Nallasopara East</h3>

            <p>
                Shop No. 14/15, Deepjyot Apartment,<br>
                Ambawadi, Near Apna Bank,<br>
                Nalasopara East
            </p>

            <p>
                📞
                <a href="tel:+919082776192">
                    +91 90827 76192
                </a>
            </p>

            <div class="buttons">

                <a
                    class="btn btn-primary"
                    href="tel:+919082776192"
                >
                    Call Nallasopara
                </a>

                <a
                    class="btn btn-whatsapp"
                    href="https://wa.me/919082776192?text=Hello%20Kapil%20Sewing%20Machine%20Co.%2C%20I%20have%20an%20enquiry."
                    target="_blank"
                >
                    WhatsApp
                </a>

            </div>

        </div>


        <!-- EMAIL -->

        <div class="contact-card">

            <div class="contact-icon">📧</div>

            <h3>Email</h3>

            <p>
                For enquiries, wholesale orders and business
                communication:
            </p>

            <p>
                <a href="mailto:kapilsewingmachineco@gmail.com">
                    kapilsewingmachineco@gmail.com
                </a>
            </p>

            <div class="buttons">

                <a
                    class="btn btn-secondary"
                    href="mailto:kapilsewingmachineco@gmail.com"
                >
                    Send Email
                </a>

            </div>

        </div>


        <!-- INSTAGRAM -->

        <div class="contact-card">

            <div class="contact-icon">📱</div>

            <h3>Instagram</h3>

            <p>
                Follow Kapil Sewing Machine Co. for
                machines, products and updates.
            </p>

            <p>
                <a
                    href="https://instagram.com/kapilsewingmachineco"
                    target="_blank"
                >
                    @kapilsewingmachineco
                </a>
            </p>

            <div class="buttons">

                <a
                    class="btn btn-secondary"
                    href="https://instagram.com/kapilsewingmachineco"
                    target="_blank"
                >
                    Visit Instagram
                </a>

            </div>

        </div>

    </div>


    <!-- ENQUIRY FORM -->

    <section class="enquiry-section">

        <h2>Send an Enquiry</h2>

        <p>
            Fill in your details and we will open WhatsApp with
            your enquiry ready to send.
        </p>


        <form id="enquiryForm">

            <div class="form-grid">


                <div class="form-group">

                    <label for="name">
                        Your Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        placeholder="Enter your name"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="phone">
                        Phone Number
                    </label>

                    <input
                        type="tel"
                        id="phone"
                        placeholder="Enter your phone number"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="machine">
                        Machine / Product
                    </label>

                    <select id="machine">

                        <option value="">
                            Select a machine
                        </option>

                        <option value="TA1">
                            TA1 Sewing Machine
                        </option>

                        <option value="Jack Pro F5">
                            Jack Pro F5
                        </option>

                        <option value="Jack Pro F6">
                            Jack Pro F6
                        </option>

                        <option value="Jack Pro L1">
                            Jack Pro L1
                        </option>

                        <option value="Jack Pro Trimmer">
                            Jack Pro Trimmer
                        </option>

                        <option value="Jack A2C">
                            Jack A2C
                        </option>

                        <option value="Kia 4-Thread Overlock">
                            Kia 4-Thread Overlock
                        </option>

                        <option value="Other">
                            Other
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label for="type">
                        Enquiry Type
                    </label>

                    <select id="type">

                        <option value="Product Enquiry">
                            Product Enquiry
                        </option>

                        <option value="Wholesale Enquiry">
                            Wholesale Enquiry
                        </option>

                        <option value="Retail Purchase">
                            Retail Purchase
                        </option>

                        <option value="Product Support">
                            Product Support
                        </option>

                    </select>

                </div>


                <div class="form-group full">

                    <label for="message">
                        Message
                    </label>

                    <textarea
                        id="message"
                        placeholder="Tell us what you are looking for..."
                    ></textarea>

                </div>


            </div>


            <div class="submit-area">

                <button
                    type="submit"
                    class="btn btn-whatsapp"
                >
                    Send Enquiry on WhatsApp
                </button>

            </div>

        </form>

    </section>


    <!-- LOCATIONS -->

    <div class="section-title">

        <h2>Visit Our Stores</h2>

        <p>
            Visit us for machine demonstrations and product guidance.
        </p>

    </div>


    <div class="locations">


        <div class="location-card">

            <h3>Andheri</h3>

            <p>
                Shop No. 2, Dubey Building,
                Old Nagardas Road,
                Andheri East, Mumbai – 400059
            </p>

            <div class="buttons">

                <a
                    class="btn btn-primary"
                    href="https://share.google/ym0eFGBH0WaN06zIT"
                    target="_blank"
                >
                    Open in Google Maps
                </a>

            </div>

        </div>


        <div class="location-card">

            <h3>Nallasopara East</h3>

            <p>
                Shop No. 14/15, Deepjyot Apartment,
                Ambawadi, Near Apna Bank,
                Nalasopara East
            </p>

            <div class="buttons">

                <a
                    class="btn btn-primary"
                    href="https://maps.app.goo.gl/YWDpWqHQKoJwb6WM9"
                    target="_blank"
                >
                    Open in Google Maps
                </a>

            </div>

        </div>


    </div>

</main>


<!-- FOOTER -->

<footer>

    <div class="footer-container">


        <div class="footer-column">

            <h3>Kapil Sewing Machine Co.</h3>

            <p>
                Wholesale & Retail Sewing Machines
            </p>

            <p>
                Domestic to Industrial Sewing Machines
            </p>

            <p>
                Quality machines with dependable support.
            </p>

        </div>


        <div class="footer-column">

            <h3>Quick Links</h3>

            <p>
                <a href="index.html">Home</a>
            </p>

            <p>
                <a href="products.php">Machines</a>
            </p>

            <p>
                <a href="about.php">About</a>
            </p>

            <p>
                <a href="locations.php">Locations</a>
            </p>

            <p>
                <a href="contact.php">Contact</a>
            </p>

        </div>


        <div class="footer-column">

            <h3>Contact</h3>

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

            <p>
                📱
                <a
                    href="https://instagram.com/kapilsewingmachineco"
                    target="_blank"
                >
                    Instagram
                </a>
            </p>

        </div>


    </div>


    <div class="copyright">

        © 2026 Kapil Sewing Machine Co. All Rights Reserved.

    </div>

</footer>


<!-- WHATSAPP FORM SCRIPT -->

<script>

document.getElementById("enquiryForm").addEventListener("submit", function(event) {

    event.preventDefault();

    const name = document.getElementById("name").value;

    const phone = document.getElementById("phone").value;

    const machine = document.getElementById("machine").value;

    const type = document.getElementById("type").value;

    const message = document.getElementById("message").value;


    let whatsappMessage =
        "Hello Kapil Sewing Machine Co.%0A%0A" +

        "Name: " + encodeURIComponent(name) + "%0A" +

        "Phone: " + encodeURIComponent(phone) + "%0A" +

        "Machine/Product: " + encodeURIComponent(machine || "Not specified") + "%0A" +

        "Enquiry Type: " + encodeURIComponent(type) + "%0A%0A" +

        "Message: " + encodeURIComponent(message || "No additional message");


    const whatsappNumber = "919820758796";


    const whatsappURL =
        "https://wa.me/" +
        whatsappNumber +
        "?text=" +
        whatsappMessage;


    window.open(whatsappURL, "_blank");

});

</script>


</body>
</html>