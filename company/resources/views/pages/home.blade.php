<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AUGZUU | Move Different</title>

    <style>

        /* =========================
           GLOBAL
        ========================= */

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
            font-weight: 500;

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
           HERO
        ========================= */

        .hero {
            min-height: 82vh;

            padding: 70px 8%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 60px;

            background: white;

            overflow: hidden;
        }


        /* LEFT SIDE */

        .hero-content {
            max-width: 600px;

            z-index: 3;
        }

        .tag {
            display: inline-block;

            padding: 8px 15px;

            background: #eff6ff;

            color: #2563eb;

            border-radius: 50px;

            font-size: 13px;

            font-weight: bold;

            letter-spacing: 1.5px;

            margin-bottom: 22px;
        }

        .hero h1 {
            font-size: 72px;

            line-height: 0.98;

            letter-spacing: -4px;

            margin-bottom: 28px;
        }

        .hero h1 span {
            color: #2563eb;
        }

        .hero p {
            color: #64748b;

            font-size: 18px;

            line-height: 1.8;

            max-width: 520px;

            margin-bottom: 35px;
        }


        /* =========================
           BUTTONS
        ========================= */

        .buttons {
            display: flex;

            gap: 15px;

            align-items: center;
        }

        .primary-btn {
            display: inline-block;

            padding: 15px 28px;

            background: #2563eb;

            color: white;

            text-decoration: none;

            border-radius: 7px;

            font-weight: bold;

            box-shadow:
                0 10px 20px
                rgba(37, 99, 235, 0.2);

            transition: 0.3s;
        }

        .primary-btn:hover {
            background: #1d4ed8;

            transform: translateY(-3px);

            box-shadow:
                0 15px 25px
                rgba(37, 99, 235, 0.3);
        }

        .secondary-btn {
            display: inline-block;

            padding: 15px 28px;

            border: 1px solid #cbd5e1;

            color: #0f172a;

            text-decoration: none;

            border-radius: 7px;

            font-weight: bold;

            transition: 0.3s;
        }

        .secondary-btn:hover {
            border-color: #2563eb;

            color: #2563eb;

            transform: translateY(-3px);
        }


        /* =========================
           PREMIUM SHOE IMAGE
        ========================= */

        .hero-image {

            width: 520px;

            min-width: 400px;

            height: 500px;

            position: relative;

            display: flex;

            align-items: center;

            justify-content: center;

            isolation: isolate;
        }


        /* BLUE GLOW */

        .blue-circle {

            position: absolute;

            width: 440px;

            height: 440px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(37, 99, 235, 0.30) 0%,
                    rgba(37, 99, 235, 0.12) 45%,
                    rgba(37, 99, 235, 0) 72%
                );

            filter: blur(5px);

            z-index: -2;

            animation: glow 4s ease-in-out infinite;
        }


        /* CIRCLE BORDER */

        .hero-image::before {

            content: "";

            position: absolute;

            width: 400px;

            height: 400px;

            border-radius: 50%;

            border: 1px solid rgba(37, 99, 235, 0.18);

            z-index: -1;
        }


        /* FLOATING DOT */

        .hero-image::after {

            content: "";

            position: absolute;

            width: 14px;

            height: 14px;

            background: #2563eb;

            border-radius: 50%;

            top: 65px;

            right: 50px;

            box-shadow:
                0 0 0 8px rgba(37, 99, 235, 0.08),
                0 0 25px rgba(37, 99, 235, 0.4);

            animation:
                floatingDot 3s ease-in-out infinite;
        }


        /* ACTUAL SHOE */

        .hero-image img {

            width: 530px;

            max-width: 120%;

            height: auto;

            object-fit: contain;

            position: relative;

            z-index: 2;

            filter:
                drop-shadow(
                    0 18px 12px
                    rgba(15, 23, 42, 0.12)
                )
                drop-shadow(
                    0 35px 25px
                    rgba(15, 23, 42, 0.18)
                );

            transform: rotate(-5deg);

            transition:
                transform 0.5s ease,
                filter 0.5s ease;
        }


        /* SHOE HOVER */

        .hero-image:hover img {

            transform:
                translateY(-15px)
                rotate(-7deg)
                scale(1.05);

            filter:
                drop-shadow(
                    0 25px 15px
                    rgba(15, 23, 42, 0.15)
                )
                drop-shadow(
                    0 45px 30px
                    rgba(37, 99, 235, 0.20)
                );
        }


        /* =========================
           IMAGE ANIMATION
        ========================= */

        @keyframes glow {

            0%,
            100% {
                transform: scale(1);

                opacity: 0.8;
            }

            50% {
                transform: scale(1.08);

                opacity: 1;
            }
        }

        @keyframes floatingDot {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }
        }


        /* =========================
           FEATURES
        ========================= */

        .features {

            padding: 30px 8%;

            display: flex;

            justify-content: center;

            align-items: center;

            gap: 80px;

            background: #0f172a;

            color: white;
        }

        .feature {

            display: flex;

            align-items: center;

            gap: 12px;
        }

        .feature-icon {

            width: 42px;

            height: 42px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #1e293b;

            border-radius: 50%;

            color: #3b82f6;

            font-weight: bold;

            border: 1px solid #334155;
        }

        .feature h4 {
            font-size: 14px;
        }

        .feature p {

            color: #94a3b8;

            font-size: 12px;

            margin-top: 3px;
        }


        /* =========================
           PRODUCTS
        ========================= */

        .products {

            padding: 100px 8%;

            background: #f8fafc;

            text-align: center;
        }

        .section-label {

            color: #2563eb;

            font-size: 13px;

            font-weight: bold;

            letter-spacing: 3px;
        }

        .products h2 {

            font-size: 44px;

            margin-top: 12px;

            margin-bottom: 55px;
        }

        .product-grid {

            display: flex;

            justify-content: center;

            gap: 25px;

            flex-wrap: wrap;
        }

        .product-card {

            width: 300px;

            background: white;

            border-radius: 16px;

            overflow: hidden;

            text-align: left;

            border: 1px solid #e2e8f0;

            transition: 0.3s;

            box-shadow:
                0 5px 15px
                rgba(15, 23, 42, 0.03);
        }

        .product-card:hover {

            transform: translateY(-10px);

            border-color: #3b82f6;

            box-shadow:
                0 25px 45px
                rgba(15, 23, 42, 0.10);
        }

        .product-image {

            height: 230px;

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

        .product-image::after {

            content: "";

            position: absolute;

            width: 120px;

            height: 120px;

            border-radius: 50%;

            background: rgba(37, 99, 235, 0.08);

            z-index: 0;
        }

        .product-image img {

            width: 88%;

            height: 88%;

            object-fit: contain;

            position: relative;

            z-index: 1;

            transition: 0.4s;
        }

        .product-card:hover
        .product-image img {

            transform:
                scale(1.08)
                rotate(-3deg);
        }

        .product-info {

            padding: 25px;
        }

        .product-info h3 {

            font-size: 19px;

            margin-bottom: 8px;
        }

        .product-info p {

            color: #64748b;

            font-size: 14px;

            line-height: 1.6;

            margin-bottom: 15px;
        }

        .price {

            color: #2563eb;

            font-size: 20px;

            font-weight: bold;
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
           TABLET
        ========================= */

        @media(max-width: 1000px) {

            .hero {

                padding: 60px 5%;
            }

            .hero h1 {

                font-size: 60px;
            }

            .hero-image {

                width: 450px;

                min-width: 350px;

                height: 450px;
            }

            .hero-image img {

                width: 450px;
            }

            .blue-circle {

                width: 380px;

                height: 380px;
            }

            .hero-image::before {

                width: 350px;

                height: 350px;
            }
        }


        /* =========================
           MOBILE
        ========================= */

        @media(max-width: 800px) {

            nav {

                padding: 20px 5%;

                flex-direction: column;

                gap: 20px;
            }

            nav ul {

                gap: 18px;

                flex-wrap: wrap;

                justify-content: center;
            }

            .hero {

                flex-direction: column;

                text-align: center;

                padding: 70px 5%;

                min-height: auto;
            }

            .hero-content {

                max-width: 700px;
            }

            .hero p {

                margin-left: auto;

                margin-right: auto;
            }

            .buttons {

                justify-content: center;
            }

            .hero-image {

                width: 100%;

                min-width: unset;

                height: 420px;
            }

            .features {

                gap: 25px;

                flex-wrap: wrap;
            }
        }


        @media(max-width: 600px) {

            .hero h1 {

                font-size: 48px;

                letter-spacing: -2px;
            }

            .hero p {

                font-size: 16px;
            }

            .buttons {

                flex-direction: column;
            }

            .primary-btn,
            .secondary-btn {

                width: 210px;
            }

            .hero-image {

                height: 340px;
            }

            .hero-image img {

                width: 350px;

                max-width: 100%;
            }

            .blue-circle {

                width: 280px;

                height: 280px;
            }

            .hero-image::before {

                width: 260px;

                height: 260px;
            }

            .hero-image::after {

                top: 35px;

                right: 35px;
            }

            .features {

                flex-direction: column;

                align-items: flex-start;

                padding-left: 12%;
            }

            .products {

                padding: 75px 5%;
            }

            .products h2 {

                font-size: 34px;
            }

            .product-card {

                width: 100%;

                max-width: 350px;
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
     HERO
========================= -->

<section class="hero">


    <!-- LEFT -->

    <div class="hero-content">

        <div class="tag">
            NEW COLLECTION 2026
        </div>


        <h1>
            Move
            <span>Different.</span>
        </h1>


        <p>
            Discover AUGZUU — footwear designed for
            movement, comfort, and everyday style.
            Step into a new generation of sneakers.
        </p>


        <div class="buttons">

            <a
                href="/services"
                class="primary-btn"
            >
                Shop Collection →
            </a>


            <a
                href="/about"
                class="secondary-btn"
            >
                Our Story
            </a>

        </div>

    </div>



    <!-- RIGHT / SHOE -->

    <div class="hero-image">

        <div class="blue-circle"></div>


        <img
            src="/images/shoe.png"
            alt="AUGZUU Sneakers"
        >

    </div>


</section>



<!-- =========================
     FEATURES
========================= -->

<section class="features">


    <div class="feature">

        <div class="feature-icon">
            ✓
        </div>

        <div>

            <h4>
                Premium Quality
            </h4>

            <p>
                Built to last
            </p>

        </div>

    </div>



    <div class="feature">

        <div class="feature-icon">
            ★
        </div>

        <div>

            <h4>
                Modern Design
            </h4>

            <p>
                Made to stand out
            </p>

        </div>

    </div>



    <div class="feature">

        <div class="feature-icon">
            ⚡
        </div>

        <div>

            <h4>
                Built for Motion
            </h4>

            <p>
                Comfort every step
            </p>

        </div>

    </div>


</section>



<!-- =========================
     FEATURED COLLECTION
========================= -->

<section class="products">


    <div class="section-label">
        AUGZUU COLLECTION
    </div>


    <h2>
        Featured Sneakers
    </h2>



    <div class="product-grid">


        <!-- PRODUCT 1 -->

        <div class="product-card">

            <div class="product-image">

                <img
                    src="/images/shoe.jpg"
                    alt="AUGZUU Runner"
                >

            </div>


            <div class="product-info">

                <h3>
                    AUGZUU Runner
                </h3>


                <p>
                    Lightweight sneakers designed
                    for everyday movement.
                </p>


                <div class="price">
                    ₱2,999
                </div>

            </div>

        </div>



        <!-- PRODUCT 2 -->

        <div class="product-card">

            <div class="product-image">

                <img
                    src="/images/shoe.jpg"
                    alt="AUGZUU Street"
                >

            </div>


            <div class="product-info">

                <h3>
                    AUGZUU Street
                </h3>


                <p>
                    A clean streetwear silhouette
                    made for everyday style.
                </p>


                <div class="price">
                    ₱3,499
                </div>

            </div>

        </div>



        <!-- PRODUCT 3 -->

        <div class="product-card">

            <div class="product-image">

                <img
                    src="/images/shoe.jpg"
                    alt="AUGZUU Pro"
                >

            </div>


            <div class="product-info">

                <h3>
                    AUGZUU Pro
                </h3>


                <p>
                    Performance-inspired sneakers
                    built for active lifestyles.
                </p>


                <div class="price">
                    ₱3,999
                </div>

            </div>

        </div>


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