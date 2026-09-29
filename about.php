<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>About Us | Kapil Sewing Machine Co.</title>

<meta name="description"
content="Learn about Kapil Sewing Machine Co., a wholesale and retail sewing machine supplier serving tailors, boutiques, garment businesses and home users.">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial, Helvetica, sans-serif;
    background:#f7f7f7;
    color:#111;
}

/* ================= HEADER ================= */

header{
    background:#050505;
    color:white;
    position:sticky;
    top:0;
    z-index:1000;
    box-shadow:0 4px 20px rgba(0,0,0,.15);
}

.navbar{
    max-width:1250px;
    margin:auto;
    padding:18px 25px;

    display:flex;
    align-items:center;
    justify-content:space-between;
}

.logo-area{
    display:flex;
    align-items:center;
    gap:12px;
}

.logo-area img{
    width:48px;
    height:48px;
    object-fit:contain;
    border-radius:8px;
}

.logo-text{
    font-size:18px;
    font-weight:800;
}

.nav-links{
    display:flex;
    align-items:center;
    gap:28px;
}

.nav-links a{
    color:white;
    text-decoration:none;
    font-size:14px;
    font-weight:600;
    transition:.2s;
}

.nav-links a:hover{
    color:#d71920;
}

.nav-button{
    background:#d71920;
    padding:11px 18px;
    border-radius:8px;
}

.nav-button:hover{
    background:#b9141a;
    color:white !important;
}


/* ================= HERO ================= */

.hero{
    background:
    linear-gradient(90deg,rgba(0,0,0,.85),rgba(0,0,0,.55)),
    url("cover-photo.png") center/cover;

    min-height:380px;

    display:flex;
    align-items:center;
}

.hero-content{
    max-width:1250px;
    width:100%;
    margin:auto;
    padding:70px 25px;

    color:white;
}

.hero-tag{
    display:inline-block;

    background:#d71920;

    padding:8px 14px;

    border-radius:30px;

    font-size:12px;
    font-weight:bold;

    margin-bottom:18px;
}

.hero h1{
    font-size:clamp(40px,6vw,68px);
    line-height:1;

    max-width:750px;

    margin-bottom:20px;
}

.hero p{
    max-width:650px;

    font-size:18px;
    line-height:1.7;

    color:#eee;
}


/* ================= ABOUT ================= */

.about-section{
    max-width:1200px;
    margin:auto;

    padding:80px 25px;
}

.about-grid{
    display:grid;

    grid-template-columns:1fr 1fr;

    gap:60px;

    align-items:center;
}

.about-image{
    background:white;

    border-radius:20px;

    padding:35px;

    box-shadow:0 10px 40px rgba(0,0,0,.08);
}

.about-image img{
    width:100%;
    height:380px;

    object-fit:cover;

    border-radius:14px;
}

.about-content h2{
    font-size:40px;

    margin-bottom:20px;
}

.about-content p{
    color:#666;

    font-size:16px;

    line-height:1.8;

    margin-bottom:18px;
}


/* ================= FEATURES ================= */

.features{
    max-width:1200px;
    margin:auto;

    padding:0 25px 80px;
}

.features h2{
    font-size:36px;

    margin-bottom:35px;
}

.feature-grid{
    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:22px;
}

.feature-card{
    background:white;

    padding:30px;

    border-radius:16px;

    border:1px solid #e8e8e8;

    transition:.3s;
}

.feature-card:hover{
    transform:translateY(-5px);

    box-shadow:0 15px 35px rgba(0,0,0,.08);
}

.feature-icon{
    width:50px;
    height:50px;

    display:flex;
    align-items:center;
    justify-content:center;

    background:#d71920;

    color:white;

    border-radius:12px;

    font-size:22px;

    margin-bottom:20px;
}

.feature-card h3{
    font-size:20px;

    margin-bottom:10px;
}

.feature-card p{
    color:#666;

    line-height:1.7;

    font-size:14px;
}


/* ================= CTA ================= */

.cta{
    background:#111;

    color:white;
}

.cta-inner{
    max-width:1200px;

    margin:auto;

    padding:65px 25px;

    display:flex;

    align-items:center;

    justify-content:space-between;

    gap:30px;
}

.cta h2{
    font-size:34px;

    margin-bottom:10px;
}

.cta p{
    color:#bbb;

    line-height:1.6;
}

.cta-button{
    display:inline-block;

    background:#d71920;

    color:white;

    text-decoration:none;

    padding:14px 22px;

    border-radius:8px;

    font-weight:700;

    white-space:nowrap;
}

.cta-button:hover{
    background:#b9141a;
}


/* ================= FOOTER ================= */

footer{
    background:#050505;

    color:#aaa;

    padding:35px 25px;
}

.footer-inner{
    max-width:1200px;

    margin:auto;

    display:flex;

    justify-content:space-between;

    gap:20px;
}

.footer-brand{
    color:white;

    font-weight:800;
}

.footer-links{
    display:flex;

    gap:20px;

    flex-wrap:wrap;
}

.footer-links a{
    color:#aaa;

    text-decoration:none;

    font-size:13px;
}

.footer-links a:hover{
    color:white;
}


/* ================= MOBILE ================= */

@media(max-width:850px){

    .nav-links{
        gap:10px;
    }

    .nav-links a:not(.nav-button){
        display:none;
    }

    .about-grid{
        grid-template-columns:1fr;

        gap:35px;
    }

    .feature-grid{
        grid-template-columns:1fr;
    }

    .cta-inner{
        display:block;
    }

    .cta-button{
        margin-top:20px;
    }

}

@media(max-width:600px){

    .navbar{
        padding:14px 18px;
    }

    .logo-area img{
        width:40px;
        height:40px;
    }

    .logo-text{
        font-size:15px;
    }

    .hero{
        min-height:350px;
    }

    .hero-content{
        padding:55px 20px;
    }

    .hero h1{
        font-size:42px;
    }

    .hero p{
        font-size:15px;
    }

    .about-section{
        padding:55px 18px;
    }

    .about-content h2{
        font-size:32px;
    }

    .features{
        padding:0 18px 55px;
    }

}

</style>

</head>


<body>


<!-- ================= HEADER ================= -->

<header>

<div class="navbar">

<a href="index.html"
style="text-decoration:none;color:white;">

<div class="logo-area">

<img
src="ksm-logo.jpeg"
alt="Kapil Sewing Machine Co. Logo"
>

<div class="logo-text">
Kapil Sewing Machine Co.
</div>

</div>

</a>


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



<!-- ================= HERO ================= -->

<section class="hero">

<div class="hero-content">

<span class="hero-tag">
ABOUT KAPIL SEWING MACHINE CO.
</span>

<h1>
Built around better sewing.
</h1>

<p>
We provide reliable sewing machines for homes,
tailors, boutiques, garment manufacturers and
businesses across different sewing requirements.
</p>

</div>

</section>



<!-- ================= ABOUT ================= -->

<section class="about-section">

<div class="about-grid">


<div class="about-image">

<img
src="cover-photo.png"
alt="Kapil Sewing Machine Co."
>

</div>


<div class="about-content">

<h2>
About Kapil Sewing Machine Co.
</h2>

<p>
Kapil Sewing Machine Co. is a wholesale and retail
sewing machine business serving customers looking
for reliable machines for different sewing needs.
</p>

<p>
Our range covers machines from domestic sewing
requirements to industrial applications. We help
customers choose machines according to their work,
production requirements and budget.
</p>

<p>
We focus on quality products, competitive pricing
and dependable after-sales support. Customers can
also contact us for product guidance and machine
demonstrations.
</p>

</div>

</div>

</section>



<!-- ================= FEATURES ================= -->

<section class="features">

<h2>
Why Choose Us?
</h2>


<div class="feature-grid">


<div class="feature-card">

<div class="feature-icon">
✓
</div>

<h3>
Quality Machines
</h3>

<p>
We offer a range of sewing machines suitable for
home users, tailors, boutiques and industrial
requirements.
</p>

</div>



<div class="feature-card">

<div class="feature-icon">
₹
</div>

<h3>
Competitive Pricing
</h3>

<p>
We provide wholesale and retail options with
competitive pricing for different types of customers.
</p>

</div>



<div class="feature-card">

<div class="feature-icon">
★
</div>

<h3>
Product Guidance
</h3>

<p>
Our team can help you understand machine features
and choose a machine suitable for your sewing work.
</p>

</div>



<div class="feature-card">

<div class="feature-icon">
⚙
</div>

<h3>
Domestic to Industrial
</h3>

<p>
Our product range includes domestic and industrial
sewing machines for different applications.
</p>

</div>



<div class="feature-card">

<div class="feature-icon">
☎
</div>

<h3>
Customer Support
</h3>

<p>
We are available to assist customers with product
information, enquiries and machine requirements.
</p>

</div>



<div class="feature-card">

<div class="feature-icon">
↗
</div>

<h3>
Wholesale Enquiries
</h3>

<p>
Businesses, organisations and bulk buyers can
contact us for wholesale machine requirements.
</p>

</div>


</div>

</section>



<!-- ================= CTA ================= -->

<section class="cta">

<div class="cta-inner">

<div>

<h2>
Looking for the right machine?
</h2>

<p>
Contact us for pricing, product guidance and
machine demonstrations.
</p>

</div>


<a
class="cta-button"
href="https://wa.me/919820758796?text=Hello%20Kapil%20Sewing%20Machine%20Co.%2C%20I%20want%20to%20know%20more%20about%20your%20sewing%20machines."
target="_blank"
>
Chat on WhatsApp
</a>

</div>

</section>



<!-- ================= FOOTER ================= -->

<footer>

<div class="footer-inner">


<div>

<div class="footer-brand">
Kapil Sewing Machine Co.
</div>

<div style="margin-top:8px;font-size:13px;">
Wholesale & Retail • Domestic to Industrial
</div>

</div>


<div class="footer-links">

<a href="index.html">
Home
</a>

<a href="products.php">
Machines
</a>

<a href="locations.php">
Locations
</a>

<a href="contact.php">
Contact
</a>

<a
href="tel:+919820758796"
>
Andheri
</a>

<a
href="tel:+919082776192"
>
Nallasopara
</a>

<a
href="https://instagram.com/kapilsewingmachineco"
target="_blank"
>
Instagram
</a>

</div>


</div>

</footer>


</body>

</html>