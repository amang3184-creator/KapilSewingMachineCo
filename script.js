/* ==================================
   MOBILE MENU
================================== */

const menuBtn = document.getElementById("menuBtn");
const navbar = document.getElementById("navbar");

if (menuBtn && navbar) {

    menuBtn.addEventListener("click", function () {

        navbar.classList.toggle("mobile-open");

        if (navbar.classList.contains("mobile-open")) {

            menuBtn.textContent = "×";

        } else {

            menuBtn.textContent = "☰";

        }

    });

}


/* ==================================
   FOOTER YEAR
================================== */

const yearElement = document.getElementById("year");

if (yearElement) {

    yearElement.textContent =
        new Date().getFullYear();

}


/* ==================================
   PRODUCT FILTER
================================== */

const filterButtons =
    document.querySelectorAll(".filter-btn");

const productCards =
    document.querySelectorAll(".product-card");


filterButtons.forEach(function(button) {

    button.addEventListener("click", function() {

        /* Remove active class */

        filterButtons.forEach(function(btn) {

            btn.classList.remove("active");

        });


        /* Add active class */

        button.classList.add("active");


        /* Get selected category */

        const filter =
            button.getAttribute("data-filter");


        /* Show/hide products */

        productCards.forEach(function(card) {

            const category =
                card.getAttribute("data-category");


            if (
                filter === "all" ||
                category === filter
            ) {

                card.style.display = "";

            } else {

                card.style.display = "none";

            }

        });

    });

});


/* ==================================
   PRODUCT DATABASE
================================== */

const products = {

    "usha-ta1": {

        name: "Usha TA1",

        category: "TA1 MACHINE",

        type: "Domestic Sewing Machine",

        price: "₹8,500",

        warranty: "1 Year",

        image: "images/usha.jpg",

        description:
            "Reliable domestic sewing machine suitable for everyday tailoring, home sewing and general stitching requirements."

    },


    "singer-ta1": {

        name: "Singer TA1",

        category: "TA1 MACHINE",

        type: "Domestic Sewing Machine",

        price: "₹8,500",

        warranty: "1 Year",

        image: "images/singer.jpg",

        description:
            "A trusted TA1 sewing machine suitable for home users, tailoring work and everyday sewing requirements."

    },


    "kapil-ta1": {

        name: "Kapil TA1",

        category: "TA1 MACHINE",

        type: "Domestic Sewing Machine",

        price: "₹8,500",

        warranty: "2 Years",

        image: "images/kapil.jpg",

        description:
            "Kapil TA1 sewing machine designed for dependable everyday performance and tailoring requirements."

    },


    "jack-f6": {

        name: "Jack F6",

        category: "INDUSTRIAL",

        type: "Industrial Sewing Machine",

        price: "₹27,000",

        warranty: "Contact Us",

        image: "images/jack-f6.jpg",

        description:
            "Professional industrial sewing machine designed for businesses, garment production and demanding sewing applications."

    },


    "jack-a2c": {

        name: "Jack A2C",

        category: "INDUSTRIAL",

        type: "Industrial Sewing Machine",

        price: "₹30,000",

        warranty: "Contact Us",

        image: "images/jack-a2c.jpg",

        description:
            "Industrial sewing machine suitable for professional tailoring and garment production environments."

    },


    "kia-overlock": {

        name: "Kia 4-Thread Overlock",

        category: "OVERLOCK",

        type: "4-Thread Overlock Machine",

        price: "₹27,000",

        warranty: "Contact Us",

        image: "images/kia-4thread.jpg",

        description:
            "4-thread overlock machine designed for professional fabric finishing and garment production."

    }

};


/* ==================================
   PRODUCT DETAIL PAGE
================================== */

const productImage =
    document.getElementById("productImage");

const productName =
    document.getElementById("productName");

const productCategory =
    document.getElementById("productCategory");

const productDescription =
    document.getElementById("productDescription");

const productPrice =
    document.getElementById("productPrice");

const productType =
    document.getElementById("productType");

const productWarranty =
    document.getElementById("productWarranty");

const whatsappBtn =
    document.getElementById("whatsappBtn");


if (
    productImage &&
    productName &&
    productCategory
) {

    /* Get ID from URL */

    const params =
        new URLSearchParams(window.location.search);

    const productId =
        params.get("id");


    /* Find product */

    const product =
        products[productId];


    if (product) {

        /* Update page */

        productImage.src =
            product.image;

        productImage.alt =
            product.name;

        productName.textContent =
            product.name;

        productCategory.textContent =
            product.category;

        productDescription.textContent =
            product.description;

        productPrice.textContent =
            product.price;

        productType.textContent =
            product.type;

        productWarranty.textContent =
            product.warranty;


        /* Page title */

        document.title =
            product.name +
            " | Kapil Sewing Machine Co.";


        /* WhatsApp message */

        const message =
            `Hello Kapil Sewing Machine Co., I am interested in ${product.name}. Please share more details about price and availability.`;


        whatsappBtn.href =
            "https://wa.me/919820758796?text=" +
            encodeURIComponent(message);

    } else {

        /* Product not found */

        productName.textContent =
            "Product Not Found";

        productDescription.textContent =
            "The requested product could not be found.";

        productImage.style.display =
            "none";

    }

}