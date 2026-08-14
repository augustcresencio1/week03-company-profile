<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AUGZUU | Contact</title>

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
           CONTACT HERO
        ========================= */

        .contact-hero {

            padding: 90px 8% 60px;

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

        .contact-hero h1 {

            font-size: 60px;

            line-height: 1;

            letter-spacing: -3px;

            margin-bottom: 20px;
        }

        .contact-hero h1 span {
            color: #2563eb;
        }

        .contact-hero p {

            max-width: 650px;

            margin: auto;

            color: #64748b;

            font-size: 17px;

            line-height: 1.8;
        }


        /* =========================
           CONTACT SECTION
        ========================= */

        .contact-section {

            padding: 70px 8% 100px;

            background: #f8fafc;

            display: grid;

            grid-template-columns:
                0.8fr 1.2fr;

            gap: 35px;

            max-width: 1300px;

            margin: auto;
        }


        /* =========================
           CONTACT INFO
        ========================= */

        .contact-info {

            background: #0f172a;

            color: white;

            border-radius: 20px;

            padding: 45px;

            position: relative;

            overflow: hidden;
        }

        .contact-info h2 {

            font-size: 30px;

            margin-bottom: 15px;
        }

        .contact-info > p {

            color: #94a3b8;

            line-height: 1.7;

            margin-bottom: 35px;
        }


        /* INFO ITEM */

        .info-item {

            display: flex;

            align-items: flex-start;

            gap: 15px;

            margin-bottom: 25px;
        }

        .info-icon {

            width: 45px;

            height: 45px;

            min-width: 45px;

            border-radius: 10px;

            background: #1e293b;

            border: 1px solid #334155;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #3b82f6;

            font-size: 18px;
        }

        .info-item h4 {

            font-size: 14px;

            margin-bottom: 5px;
        }

        .info-item p {

            color: #94a3b8;

            font-size: 13px;

            line-height: 1.5;
        }


        /* DECORATION */

        .contact-circle {

            position: absolute;

            width: 300px;

            height: 300px;

            border-radius: 50%;

            border: 1px solid
                rgba(59, 130, 246, 0.15);

            right: -150px;

            bottom: -150px;
        }


        /* =========================
           FORM
        ========================= */

        .contact-form {

            background: white;

            padding: 45px;

            border-radius: 20px;

            border: 1px solid #e2e8f0;

            box-shadow:
                0 15px 40px
                rgba(15, 23, 42, 0.05);
        }

        .contact-form h2 {

            font-size: 30px;

            margin-bottom: 10px;
        }

        .contact-form > p {

            color: #64748b;

            font-size: 14px;

            margin-bottom: 30px;
        }


        /* INPUT GRID */

        .input-row {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 18px;
        }


        .form-group {

            margin-bottom: 20px;
        }

        .form-group label {

            display: block;

            font-size: 13px;

            font-weight: bold;

            margin-bottom: 8px;

            color: #334155;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {

            width: 100%;

            padding: 14px 15px;

            border: 1px solid #cbd5e1;

            border-radius: 8px;

            outline: none;

            font-size: 14px;

            color: #0f172a;

            background: #f8fafc;

            transition: 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {

            border-color: #2563eb;

            background: white;

            box-shadow:
                0 0 0 3px
                rgba(37, 99, 235, 0.08);
        }

        .form-group textarea {

            min-height: 140px;

            resize: vertical;
        }


        /* =========================
           SUBMIT BUTTON
        ========================= */

        .submit-btn {

            width: 100%;

            padding: 15px;

            border: none;

            border-radius: 8px;

            background: #2563eb;

            color: white;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.3s;

            box-shadow:
                0 10px 20px
                rgba(37, 99, 235, 0.18);
        }

        .submit-btn:hover {

            background: #1d4ed8;

            transform: translateY(-2px);

            box-shadow:
                0 15px 25px
                rgba(37, 99, 235, 0.25);
        }


        /* =========================
           SOCIAL
        ========================= */

        .socials {

            margin-top: 35px;

            display: flex;

            gap: 10px;
        }

        .social {

            width: 40px;

            height: 40px;

            border-radius: 8px;

            background: #1e293b;

            border: 1px solid #334155;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #cbd5e1;

            text-decoration: none;

            font-size: 13px;

            font-weight: bold;

            transition: 0.3s;
        }

        .social:hover {

            background: #2563eb;

            border-color: #2563eb;

            color: white;

            transform: translateY(-3px);
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

        @media(max-width: 900px) {

            .contact-section {

                grid-template-columns: 1fr;

            }

            .contact-info {

                min-height: 450px;
            }

        }


        @media(max-width: 700px) {

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

            .contact-hero {

                padding: 70px 5% 50px;
            }

            .contact-hero h1 {

                font-size: 45px;

                letter-spacing: -2px;
            }

            .contact-section {

                padding: 50px 5% 70px;
            }

            .contact-info,
            .contact-form {

                padding: 30px;
            }

            .input-row {

                grid-template-columns: 1fr;
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
                Collection
            </a>
        </li>

        <li>
            <a
                href="/contact"
                class="nav-button"
            >
                Contact
            </a>
        </li>

    </ul>

</nav>



<!-- =========================
     CONTACT HERO
========================= -->

<section class="contact-hero">

    <div class="tag">
        GET IN TOUCH
    </div>


    <h1>
        Let's Talk
        <span>Sneakers.</span>
    </h1>


    <p>
        Have a question about AUGZUU, our collection,
        or your next pair? Send us a message and
        we'll get back to you.
    </p>

</section>



<!-- =========================
     CONTACT SECTION
========================= -->

<section class="contact-section">


    <!-- =====================
         CONTACT INFORMATION
    ====================== -->

    <div class="contact-info">

        <h2>
            Contact AUGZUU
        </h2>


        <p>
            We're always happy to hear from you.
            Reach out to us for questions, feedback,
            or anything about our sneaker collection.
        </p>



        <!-- EMAIL -->

        <div class="info-item">

            <div class="info-icon">
                @
            </div>

            <div>

                <h4>
                    Email
                </h4>

                <p>
                    hello@augzuu.com
                </p>

            </div>

        </div>



        <!-- PHONE -->

        <div class="info-item">

            <div class="info-icon">
                ☎
            </div>

            <div>

                <h4>
                    Phone
                </h4>

                <p>
                    +63 900 000 0000
                </p>

            </div>

        </div>



        <!-- LOCATION -->

        <div class="info-item">

            <div class="info-icon">
                ◉
            </div>

            <div>

                <h4>
                    Location
                </h4>

                <p>
                    Philippines
                </p>

            </div>

        </div>



        <!-- BUSINESS HOURS -->

        <div class="info-item">

            <div class="info-icon">
                ◷
            </div>

            <div>

                <h4>
                    Business Hours
                </h4>

                <p>
                    Monday – Saturday<br>
                    9:00 AM – 6:00 PM
                </p>

            </div>

        </div>



        <!-- SOCIALS -->

        <div class="socials">

            <a href="#" class="social">
                FB
            </a>

            <a href="#" class="social">
                IG
            </a>

            <a href="#" class="social">
                TT
            </a>

        </div>


        <div class="contact-circle"></div>

    </div>



    <!-- =====================
         CONTACT FORM
    ====================== -->

    <div class="contact-form">

        <h2>
            Send Us a Message
        </h2>


        <p>
            Fill out the form below and we'll get
            back to you as soon as possible.
        </p>


        <form>


            <!-- NAME + EMAIL -->

            <div class="input-row">

                <div class="form-group">

                    <label>
                        Full Name
                    </label>

                    <input
                        type="text"
                        placeholder="Your name"
                    >

                </div>


                <div class="form-group">

                    <label>
                        Email Address
                    </label>

                    <input
                        type="email"
                        placeholder="you@example.com"
                    >

                </div>

            </div>



            <!-- SUBJECT -->

            <div class="form-group">

                <label>
                    Subject
                </label>

                <select>

                    <option>
                        Select a subject
                    </option>

                    <option>
                        Product Inquiry
                    </option>

                    <option>
                        Order Concern
                    </option>

                    <option>
                        Partnership
                    </option>

                    <option>
                        General Question
                    </option>

                </select>

            </div>



            <!-- MESSAGE -->

            <div class="form-group">

                <label>
                    Message
                </label>

                <textarea
                    placeholder="Write your message here..."
                ></textarea>

            </div>



            <!-- SUBMIT -->

            <button
                type="submit"
                class="submit-btn"
            >
                Send Message →
            </button>


        </form>

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