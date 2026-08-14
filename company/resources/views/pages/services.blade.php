<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AUGZUU | Collection</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #f8fafc;
            color: #0f172a;
        }


        /* =========================
           NAVBAR
        ========================= */

        nav {
            width: 100%;
            padding: 22px 8%;

            display: flex;
            justify-content: space-between;
            align-items: center;

            background: #0f172a;
        }

        .logo {
            color: white;

            font-size: 25px;
            font-weight: 800;

            letter-spacing: 3px;
        }

        .logo span {
            color: #3b82f6;
        }

        nav ul {
            display: flex;

            align-items: center;

            gap: 35px;

            list-style: none;
        }

        nav ul li a {
            color: #e2e8f0;

            text-decoration: none;

            font-size: 15px;

            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #3b82f6;
        }

        .nav-button {
            padding: 10px 20px;

            border: 1px solid #3b82f6;

            border-radius: 6px;
        }

        .nav-button:hover {
            background: #2563eb;

            color: white !important;
        }


        /* =========================
           COLLECTION HERO
        ========================= */

        .collection-hero {

            padding: 90px 8% 70px;

            text-align: center;

            background: white;
        }

        .tag {

            display: inline-block;

            padding: 8px 15px;

            background: #eff6ff;

            color: #2563eb;

            border-radius: 50px;

            font-size: 13px;

            font-weight: bold;

            letter-spacing: 2px;

            margin-bottom: 20px;
        }

        .collection-hero h1 {

            font-size: 60px;

            line-height: 1;

            letter-spacing: -3px;

            margin-bottom: 20px;
        }

        .collection-hero h1 span {
            color: #2563eb;
        }

        .collection-hero p {

            max-width: 650px;

            margin: auto;

            color: #64748b;

            font-size: 17px;

            line-height: 1.8;
        }


        /* =========================
           CATEGORY FILTER
        ========================= */

        .categories {

            padding: 25px 8%;

            display: flex;

            justify-content: center;

            gap: 12px;

            flex-wrap: wrap;

            background: white;

            border-top: 1px solid #e2e8f0;

            border-bottom: 1px solid #e2e8f0;
        }

        .category {

            padding: 11px 22px;

            border: 1px solid #cbd5e1;

            border-radius: 50px;

            color: #475569;

            font-size: 14px;

            cursor: pointer;

            transition: 0.3s;
        }

        .category:hover,
        .category.active {

            background: #2563eb;

            border-color: #2563eb;

            color: white;
        }


        /* =========================
           PRODUCTS
        ========================= */

        .collection {

            padding: 80px 8%;

            background: #f8fafc;
        }

        .product-grid {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 28px;

            max-width: 1200px;

            margin: auto;
        }


        /* =========================
           PRODUCT CARD
        ========================= */

        .product-card {

            background: white;

            border: 1px solid #e2e8f0;

            border-radius: 18px;

            overflow: hidden;

            transition: 0.35s;

            position: relative;
        }

        .product-card:hover {

            transform: translateY(-10px);

            border-color: #3b82f6;

            box-shadow:
                0 25px 50px
                rgba(15, 23, 42, 0.10);
        }


        /* SALE BADGE */

        .badge {

            position: absolute;

            top: 18px;

            left: 18px;

            z-index: 5;

            padding: 7px 12px;

            background: #2563eb;

            color: white;

            border-radius: 50px;

            font-size: 11px;

            font-weight: bold;

            letter-spacing: 1px;
        }


        /* PRODUCT IMAGE */

        .product-image {

            height: 280px;

            background:
                linear-gradient(
                    135deg,
                    #eff6ff,
                    #f8fafc
                );

            display: flex;

            align-items: center;

            justify-content: center;

            overflow: hidden;

            position: relative;
        }

        .product-image::before {

            content: "";

            position: absolute;

            width: 190px;

            height: 190px;

            border-radius: 50%;

            background:
                rgba(37, 99, 235, 0.08);
        }

        .product-image img {

            width: 90%;

            height: 90%;

            object-fit: contain;

            position: relative;

            z-index: 2;

            transform: rotate(-5deg);

            filter:
                contrast(1.08)
                saturate(1.08)
                drop-shadow(
                    0 20px 15px
                    rgba(15, 23, 42, 0.15)
                );

            transition: 0.45s;
        }

        .product-card:hover
        .product-image img {

            transform:
                rotate(-8deg)
                translateY(-10px)
                scale(1.08);

            filter:
                contrast(1.12)
                saturate(1.12)
                drop-shadow(
                    0 30px 20px
                    rgba(37, 99, 235, 0.20)
                );
        }


        /* =========================
           PRODUCT INFO
        ========================= */

        .product-info {

            padding: 25px;
        }

        .product-category {

            color: #2563eb;

            font-size: 11px;

            font-weight: bold;

            letter-spacing: 2px;

            margin-bottom: 8px;
        }

        .product-info h2 {

            font-size: 21px;

            margin-bottom: 10px;
        }

        .product-info p {

            color: #64748b;

            font-size: 14px;

            line-height: 1.6;

            margin-bottom: 18px;
        }

        .product-bottom {

            display: flex;

            justify-content: space-between;

            align-items: center;
        }

        .price {

            font-size: 20px;

            font-weight: bold;

            color: #0f172a;
        }

        .shop-btn {

            padding: 10px 17px;

            background: #2563eb;

            color: white;

            text-decoration: none;

            border-radius: 6px;

            font-size: 13px;

            font-weight: bold;

            transition: 0.3s;
        }

        .shop-btn:hover {

            background: #1d4ed8;

            transform: translateY(-2px);
        }


        /* =========================
           FEATURE BANNER
        ========================= */

        .banner {

            margin-top: 80px;

            padding: 55px 60px;

            border-radius: 20px;

            background:
                linear-gradient(
                    120deg,
                    #020617,
                    #0f172a 55%,
                    #1d4ed8
                );

            color: white;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 30px;

            overflow: hidden;

            position: relative;
        }

        .banner-content {

            position: relative;

            z-index: 2;
        }

        .banner h2 {

            font-size: 36px;

            margin-bottom: 12px;
        }

        .banner p {

            color: #cbd5e1;

            max-width: 550px;

            line-height: 1.7;

            margin-bottom: 22px;
        }

        .banner-btn {

            display: inline-block;

            padding: 13px 23px;

            background: white;

            color: #0f172a;

            text-decoration: none;

            border-radius: 7px;

            font-weight: bold;

            transition: 0.3s;
        }

        .banner-btn:hover {

            background: #3b82f6;

            color: white;

            transform: translateY(-3px);
        }

        .banner-circle {

            position: absolute;

            width: 350px;

            height: 350px;

            border-radius: 50%;

            border: 1px solid
                rgba(255,255,255,0.10);

            right: -100px;

            top: -130px;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {

            padding: 30px 8%;

            background: #020617;

            color: #64748b;

            display: flex;

            justify-content: space-between;

            align-items: center;
        }

        footer strong {

            color: white;

            letter-spacing: 3px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width: 950px) {

            .product-grid {

                grid-template-columns:
                    repeat(2, 1fr);
            }

            .collection-hero h1 {

                font-size: 52px;
            }
        }


        @media(max-width: 750px) {

            nav {

                flex-direction: column;

                gap: 20px;

                padding: 20px 5%;
            }

            nav ul {

                gap: 18px;

                flex-wrap: wrap;

                justify-content: center;
            }

            .product-grid {

                grid-template-columns: 1fr;

                max-width: 400px;
            }

            .banner {

                padding: 40px 30px;

                flex-direction: column;

                align-items: flex-start;
            }
        }


        @media(max-width: 600px) {

            .collection-hero {

                padding: 70px 5%;
            }

            .collection-hero h1 {

                font-size: 43px;

                letter-spacing: -2px;
            }

            .collection-hero p {

                font-size: 15px;
            }

            .collection {

                padding: 60px 5%;
            }

            .product-image {

                height: 250px;
            }

            .banner h2 {

                font-size: 29px;
            }

            footer {

                flex-direction: column;

                gap: 10px;

                text-align: center;
            }
        }

    </style>

</head>


<body>


<!-- =========================
     NAVBAR
========================= -->

<nav>

    <div class="logo">
        AUG<span>ZUU</span>
    </div>


    <ul>

        <li>
            <a href="/">
                Home
            </a>
        </li>

        <li>
            <a href="/about">
                About
            </a>
        </li>

        <li>
            <a href="/services">
                Services
            </a>
        </li>

        <li>
            <a href="/contact" class="nav-button">
                Contact
            </a>
        </li>

    </ul>

</nav>



<!-- =========================
     COLLECTION HERO
========================= -->

<section class="collection-hero">

    <div class="tag">
        AUGZUU COLLECTION
    </div>


    <h1>
        Find Your
        <span>Pair.</span>
    </h1>


    <p>
        Explore the latest AUGZUU sneakers designed
        for everyday movement, street style, and
        modern comfort.
    </p>

</section>



<!-- =========================
     CATEGORIES
========================= -->

<div class="categories">

    <div class="category active">
        All
    </div>

    <div class="category">
        Running
    </div>

    <div class="category">
        Lifestyle
    </div>

    <div class="category">
        Streetwear
    </div>

    <div class="category">
        Performance
    </div>

</div>



<!-- =========================
     COLLECTION
========================= -->

<section class="collection">


    <div class="product-grid">


        <!-- PRODUCT 1 -->

        <div class="product-card">

            <div class="badge">
                NEW
            </div>


            <div class="product-image">

                <img
                    src="/images/shoe1.png"
                    alt="AUGZUU Runner"
                >

            </div>


            <div class="product-info">

                <div class="product-category">
                    RUNNING
                </div>


                <h2>
                    AUGZUU Runner
                </h2>


                <p>
                    Lightweight and comfortable sneakers
                    made for everyday movement.
                </p>


                <div class="product-bottom">

                    <div class="price">
                        ₱2,999
                    </div>


                    <a
                        href="/contact"
                        class="shop-btn"
                    >
                        Get Yours
                    </a>

                </div>

            </div>

        </div>



        <!-- PRODUCT 2 -->

        <div class="product-card">

            <div class="badge">
                BEST SELLER
            </div>


            <div class="product-image">

                <img
                    src="/images/shoe1.png"
                    alt="AUGZUU Street"
                >

            </div>


            <div class="product-info">

                <div class="product-category">
                    STREETWEAR
                </div>


                <h2>
                    AUGZUU Street
                </h2>


                <p>
                    Clean and bold street-inspired
                    sneakers for everyday style.
                </p>


                <div class="product-bottom">

                    <div class="price">
                        ₱3,499
                    </div>


                    <a
                        href="/contact"
                        class="shop-btn"
                    >
                        Get Yours
                    </a>

                </div>

            </div>

        </div>



        <!-- PRODUCT 3 -->

        <div class="product-card">

            <div class="product-image">

                <img
                    src="/images/shoe1.png"
                    alt="AUGZUU Pro"
                >

            </div>


            <div class="product-info">

                <div class="product-category">
                    PERFORMANCE
                </div>


                <h2>
                    AUGZUU Pro
                </h2>


                <p>
                    Performance-inspired footwear
                    built for active lifestyles.
                </p>


                <div class="product-bottom">

                    <div class="price">
                        ₱3,999
                    </div>


                    <a
                        href="/contact"
                        class="shop-btn"
                    >
                        Get Yours
                    </a>

                </div>

            </div>

        </div>



        <!-- PRODUCT 4 -->

        <div class="product-card">

            <div class="product-image">

                <img
                    src="/images/shoe1.png"
                    alt="AUGZUU Classic"
                >

            </div>


            <div class="product-info">

                <div class="product-category">
                    LIFESTYLE
                </div>


                <h2>
                    AUGZUU Classic
                </h2>


                <p>
                    Minimal everyday sneakers designed
                    for timeless street style.
                </p>


                <div class="product-bottom">

                    <div class="price">
                        ₱2,799
                    </div>


                    <a
                        href="/contact"
                        class="shop-btn"
                    >
                        Get Yours
                    </a>

                </div>

            </div>

        </div>



        <!-- PRODUCT 5 -->

        <div class="product-card">

            <div class="product-image">

                <img
                    src="/images/shoe1.png"
                    alt="AUGZUU Motion"
                >

            </div>


            <div class="product-info">

                <div class="product-category">
                    RUNNING
                </div>


                <h2>
                    AUGZUU Motion
                </h2>


                <p>
                    Flexible sneakers designed for
                    movement and daily comfort.
                </p>


                <div class="product-bottom">

                    <div class="price">
                        ₱3,299
                    </div>


                    <a
                        href="/contact"
                        class="shop-btn"
                    >
                        Get Yours
                    </a>

                </div>

            </div>

        </div>



        <!-- PRODUCT 6 -->

        <div class="product-card">

            <div class="badge">
                LIMITED
            </div>


            <div class="product-image">

                <img
                    src="/images/shoe1.png"
                    alt="AUGZUU Elite"
                >

            </div>


            <div class="product-info">

                <div class="product-category">
                    PREMIUM
                </div>


                <h2>
                    AUGZUU Elite
                </h2>


                <p>
                    A premium silhouette combining
                    modern design and everyday comfort.
                </p>


                <div class="product-bottom">

                    <div class="price">
                        ₱4,499
                    </div>


                    <a
                        href="/contact"
                        class="shop-btn"
                    >
                        Get Yours
                    </a>

                </div>

            </div>

        </div>


    </div>



    <!-- =========================
         BANNER
    ========================= -->

    <div class="banner">

        <div class="banner-content">

            <h2>
                Move Different.
            </h2>


            <p>
                Your next favorite pair is waiting.
                Explore AUGZUU and find the sneaker
                that matches your movement.
            </p>


            <a
                href="/contact"
                class="banner-btn"
            >
                Contact Us →
            </a>

        </div>


        <div class="banner-circle"></div>

    </div>


</section>



<!-- =========================
     FOOTER
========================= -->

<footer>

    <strong>
        AUGZUU
    </strong>


    <span>
        © 2026 AUGZUU. All Rights Reserved.
    </span>

</footer>


</body>

</html>