<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Locations | Kapil Sewing Machine Co.</title>

<meta name="description"
content="Visit Kapil Sewing Machine Co. at our Andheri and Nallasopara East locations.">

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

    min-height:360px;

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

    margin-bottom:20px;
}

.hero p{
    max-width:650px;

    font-size:18px;
    line-height:1.7;

    color:#eee;
}


/* ================= LOCATIONS ================= */

.locations-section{
    max-width:1250px;
    margin:auto;

    padding:75px 25px;
}

.section-title{
    text-align:center;

    margin-bottom:45px;
}

.section-title h2{
    font-size:40px;

    margin-bottom:10px;
}

.section-title p{
    color:#666;

    line-height:1.6;
}


/* ================= LOCATION GRID ================= */

.location-grid{
    display:grid;

    grid-template-columns:repeat(2,1fr);

    gap:30px;
}

.location-card{
    background:white;

    border:1px solid #e5e5e5;

    border-radius:18px;

    overflow:hidden;

    box-shadow:0 8px 30px rgba(0,0,0,.06);
}

.location-map{
    width:100%;
    height:280px;
}

.location-map iframe{
    width:100%;
    height:100%;
    border:0;
}

.location-content{
    padding:30px;
}

.location-label{
    display:inline-block;

    background:#d71920;
    color:white;

    padding:6px 12px;

    border-radius:20px;

    font-size:11px;
    font-weight:800;

    text-transform:uppercase;

    margin-bottom:15px;
}

.location-content h3{
    font-size:28px;

    margin-bottom:12px;
}

.location-address{
    color:#666;

    line-height:1.7;

    font-size:15px;

    margin-bottom:20px;
}

.phone{
    font-size:17px;

    font-weight:700;

    margin-bottom:20px;
}

.phone a{
    color:#111;
    text-decoration:none;
}

.phone a:hover{
    color:#d71920;
}


/* ================= BUTTONS ================= */

.location-actions{
    display:flex;

    gap:10px;
}

.btn{
    flex:1;

    text-align:center;

    text-decoration:none;

    padding:13px;

    border-radius:8px;

    font-size:13px;

    font-weight:700;
}

.btn-map{
    background:#111;
    color:white;
}

.btn-map:hover{
    background:#333;
}

.btn-call{
    background:#d71920;
    color:white;
}

.btn-call:hover{
    background:#b9141a;
}


/* ================= CTA ================= */

.cta{
    background:#111;

    color:white;
}

.cta-inner{
    max-width:1250px;

    margin:auto;

    padding:65px 25px;

    text-align:center;
}

.cta h2{
    font-size:34px;

    margin-bottom:10px;
}

.cta p{
    color:#bbb;

    line-height:1.6;

    margin-bottom:25px;
}

.cta-button{
    display:inline-block;

    background:#d71920;

    color:white;

    text-decoration:none;

    padding:14px 22px;

    border-radius:8px;

    font-weight:700;
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
    max-width:1250px;

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

    .location-grid{
        grid-template-columns:1fr;
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
        min-height:330px;
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

    .locations-section{
        padding:55px 18px;
    }

    .section-title h2{
        font-size:32px;
    }

    .location-content{
        padding:25px;
    }

    .location-actions{
        flex-direction:column;
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
VISIT OUR STORES
</span>

<h1>
Find us near you.
</h1>

<p>
Visit Kapil Sewing Machine Co. for sewing machines,
product guidance, demonstrations and enquiries.
</p>

</div>

</section>



<!-- ================= LOCATIONS ================= -->

<section class="locations-section">


<div class="section-title">

<h2>
Our Locations
</h2>

<p>
Visit either of our stores for product enquiries,
machine demonstrations and purchases.
</p>

</div>



<div class="location-grid">


<!-- ================= ANDHERI ================= -->

<div class="location-card">


<div class="location-map">

<iframe
src="https://www.google.com/maps?q=Shop%20No%202%20Dubey%20Building%20Old%20Nagardas%20Road%20Andheri%20East%20Mumbai%20400059&output=embed"
loading="lazy"
allowfullscreen
>
</iframe>

</div>


<div class="location-content">

<span class="location-label">
Andheri
</span>

<h3>
Andheri East
</h3>

<p class="location-address">

Shop No. 2, Dubey Building,<br>
Old Nagardas Road,<br>
Andheri East, Mumbai – 400059.

</p>


<div class="phone">

📞

<a href="tel:+919820758796">
+91 98207 58796
</a>

</div>


<div class="location-actions">

<a
class="btn btn-map"
href="https://share.google/ym0eFGBH0WaN06zIT"
target="_blank"
>
Open in Google Maps
</a>

<a
class="btn btn-call"
href="tel:+919820758796"
>
Call
</a>

</div>

</div>

</div>



<!-- ================= NALLASOPARA ================= -->

<div class="location-card">


<div class="location-map">

<iframe
src="https://www.google.com/maps?q=Deepjyot%20Apartment%20Ambawadi%20Nalasopara%20East&output=embed"
loading="lazy"
allowfullscreen
>
</iframe>

</div>


<div class="location-content">

<span class="location-label">
Nallasopara
</span>

<h3>
Nallasopara East
</h3>

<p class="location-address">

Shop No. 14/15, Deepjyot Apartment,<br>
Ambawadi, Near Apna Bank,<br>
Nalasopara East.

</p>


<div class="phone">

📞

<a href="tel:+919082776192">
+91 90827 76192
</a>

</div>


<div class="location-actions">

<a
class="btn btn-map"
href="https://maps.app.goo.gl/YWDpWqHQKoJwb6WM9"
target="_blank"
>
Open in Google Maps
</a>

<a
class="btn btn-call"
href="tel:+919082776192"
>
Call
</a>

</div>

</div>

</div>


</div>

</section>



<!-- ================= CTA ================= -->

<section class="cta">

<div class="cta-inner">

<h2>
Need help finding us?
</h2>

<p>
Call our nearest branch and our team will assist you.
</p>

<a
class="cta-button"
href="tel:+919820758796"
>
Call Andheri
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

<a href="about.php">
About
</a>

<a href="contact.php">
Contact
</a>

<a href="tel:+919820758796">
Andheri
</a>

<a href="tel:+919082776192">
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