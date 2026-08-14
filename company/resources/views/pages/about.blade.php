<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AUGZUU | About Us</title>

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
           ABOUT HERO
        ========================= */

        .about-hero {
            min-height: 78vh;

            padding: 80px 8%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 70px;

            background: white;

            overflow: hidden;
        }

        .about-content {
            max-width: 600px;
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

        .about-content h1 {
            font-size: 64px;

            line-height: 1;

            letter-spacing: -3px;

            margin-bottom: 25px;
        }

        .about-content h1 span {
            color: #2563eb;
        }

        .about-content p {
            color: #64748b;

            font-size: 17px;

            line-height: 1.8;

            margin-bottom: 18px;
        }


        /* =========================
           SHOE IMAGE AREA
        ========================= */

        .about-image {

            width: 500px;
            height: 470px;

            position: relative;

            display: flex;

            align-items: center;
            justify-content: center;

            isolation: isolate;
        }


        /* BLUE GLOW */

        .about-glow {

            position: absolute;

            width: 410px;
            height: 410px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(37, 99, 235, 0.28),
                    rgba(37, 99, 235, 0.08),
                    transparent 70%
                );

            filter: blur(5px);

            z-index: -2;

            animation: glow 4s ease-in-out infinite;
        }


        /* CIRCLE */

        .about-image::before {

            content: "";

            position: absolute;

            width: 380px;
            height: 380px;

            border-radius: 50%;

            border: 1px solid
                rgba(37, 99, 235, 0.18);

            z-index: -1;
        }


        /* SHOE */

        .about-image img {

            width: 500px;

            max-width: 120%;

            height: auto;

            object-fit: contain;

            transform: rotate(-8deg);

            filter:
                contrast(1.08)
                saturate(1.08)
                drop-shadow(
                    0 25px 18px
                    rgba(15, 23, 42, 0.16)
                )
                drop-shadow(
                    0 40px 30px
                    rgba(15, 23, 42, 0.12)
                );

            transition: 0.5s ease;
        }

        .about-image:hover img {

            transform:
                translateY(-12px)
                rotate(-11deg)
                scale(1.05);

            filter:
                contrast(1.12)
                saturate(1.12)
                drop-shadow(
                    0 30px 20px
                    rgba(15, 23, 42, 0.18)
                )
                drop-shadow(
                    0 45px 30px
                    rgba(37, 99, 235, 0.20)
                );
        }


        /* =========================
           STORY
        ========================= */

        .story {

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

        .story h2 {

            font-size: 42px;

            margin-top: 12px;

            margin-bottom: 25px;
        }

        .story > p {

            max-width: 750px;

            margin: auto;

            color: #64748b;

            font-size: 17px;

            line-height: 1.8;
        }


        /* =========================
           VALUES
        ========================= */

        .values {

            padding: 90px 8%;

            background: white;

            text-align: center;
        }

        .values h2 {

            font-size: 40px;

            margin-bottom: 50px;
        }

        .value-grid {

            display: flex;

            justify-content: center;

            gap: 25px;

            flex-wrap: wrap;
        }

        .value-card {

            width: 290px;

            padding: 35px;

            text-align: left;

            background: #f8fafc;

            border: 1px solid #e2e8f0;

            border-radius: 16px;

            transition: 0.3s;
        }

        .value-card:hover {

            transform: translateY(-8px);

            border-color: #3b82f6;

            box-shadow:
                0 20px 35px
                rgba(15, 23, 42, 0.08);
        }

        .value-icon {

            width: 50px;
            height: 50px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 12px;

            background: #eff6ff;

            color: #2563eb;

            font-size: 23px;

            margin-bottom: 20px;
        }

        .value-card h3 {

            font-size: 20px;

            margin-bottom: 12px;
        }

        .value-card p {

            color: #64748b;

            font-size: 14px;

            line-height: 1.7;
        }


        /* =========================
           STATS
        ========================= */

        .stats {

            padding: 70px 8%;

            background: #0f172a;

            display: flex;

            justify-content: center;

            gap: 100px;

            color: white;

            text-align: center;
        }

        .stat h3 {

            font-size: 40px;

            color: #3b82f6;

            margin-bottom: 5px;
        }

        .stat p {

            color: #94a3b8;

            font-size: 14px;
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
           ANIMATION
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


        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width: 950px) {

            .about-hero {
                padding: 70px 5%;
            }

            .about-content h1 {
                font-size: 52px;
            }

            .about-image {
                width: 400px;
                height: 400px;
            }

            .about-image img {
                width: 430px;
            }

            .about-glow {
                width: 340px;
                height: 340px;
            }

            .about-image::before {
                width: 320px;
                height: 320px;
            }
        }


        @media(max-width: 800px) {

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

            .about-hero {

                flex-direction: column;

                text-align: center;

                padding: 70px 5%;
            }

            .about-content {
                max-width: 700px;
            }

            .about-content p {
                margin-left: auto;
                margin-right: auto;
            }

            .about-image {
                width: 100%;
                height: 400px;
            }
        }


        @media(max-width: 600px) {

            .about-content h1 {
                font-size: 45px;
            }

            .about-content p {
                font-size: 16px;
            }

            .about-image {
                height: 320px;
            }

            .about-image img {
                width: 350px;
            }

            .about-glow {
                width: 280px;
                height: 280px;
            }

            .about-image::before {
                width: 260px;
                height: 260px;
            }

            .story {
                padding: 75px 5%;
            }

            .story h2 {
                font-size: 34px;
            }

            .stats {
                flex-direction: column;

                gap: 35px;
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
     ABOUT HERO
========================= -->

<section class="about-hero">


    <div class="about-content">

        <div class="tag">
            ABOUT AUGZUU
        </div>


        <h1>
            Made to
            <span>Move.</span>
        </h1>


        <p>
            AUGZUU is a modern footwear brand built around
            one simple idea — your shoes should keep up
            with the way you move.
        </p>


        <p>
            We combine contemporary design, everyday
            comfort, and a confident street-inspired
            aesthetic to create sneakers for the modern
            generation.
        </p>


        <p>
            From everyday walks to late-night city runs,
            AUGZUU is designed to move with you.
        </p>

    </div>



    <!-- SHOE IMAGE -->

    <div class="about-image">

        <div class="about-glow"></div>


        <img
            src="/images/shoe.png"
            alt="AUGZUU Sneaker"
        >

    </div>


</section>



<!-- =========================
     STORY
========================= -->

<section class="story">

    <div class="section-label">
        OUR STORY
    </div>


    <h2>
        More Than Just Sneakers
    </h2>


    <p>
        AUGZUU represents movement, individuality,
        and self-expression. We believe that footwear
        is more than something you wear — it is part
        of how you present yourself to the world.
        <br><br>
        That's why every AUGZUU concept focuses on
        the perfect balance between style, comfort,
        and personality.
    </p>

</section>



<!-- =========================
     VALUES
========================= -->

<section class="values">

    <div class="section-label">
        WHAT WE BELIEVE
    </div>


    <h2>
        Our Core Values
    </h2>


    <div class="value-grid">


        <div class="value-card">

            <div class="value-icon">
                ⚡
            </div>


            <h3>
                Innovation
            </h3>


            <p>
                We explore fresh ideas, modern designs,
                and new ways to make everyday footwear
                better let's go baby.
            </p>

        </div>



        <div class="value-card">

            <div class="value-icon">
                ✦
            </div>


            <h3>
                Style
            </h3>


            <p>
                We create sneakers that help people
                express their personality and
                individual style.
            </p>

        </div>



        <div class="value-card">

            <div class="value-icon">
                ✓
            </div>


            <h3>
                Comfort
            </h3>


            <p>
                Great style should never come at the
                cost of comfort. AUGZUU is made for
                everyday movement.
            </p>

        </div>


    </div>

</section>



<!-- =========================
     STATS
========================= -->

<section class="stats">


    <div class="stat">

        <h3>
            2026
        </h3>

        <p>
            Brand Established
        </p>

    </div>


    <div class="stat">

        <h3>
            100%
        </h3>

        <p>
            Designed for Movement
        </p>

    </div>


    <div class="stat">

        <h3>
            ∞
        </h3>

        <p>
            Ways to Move Different
        </p>

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