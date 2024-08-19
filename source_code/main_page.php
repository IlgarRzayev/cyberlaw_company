<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiber Təhlükəsizlik Mərkəzi</title>
    <style>
        .main-body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #0b0e4a;
            color: #fff;
        }

        .main-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            height: 100vh;
            max-width: 1200px;
            margin: 0 auto;
        }

        .content {
            max-width: 600px;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 20px;
            width: 556px;
            height: 146px;
            top: 220px;
            left: 80px;
            font-weight: 700;
            size: 48px;
            line-height: 72.61px;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 40px;
        }

        .buttons {
            display: flex;
            gap: 30px;
            left: 80px;
        }

        .btn {
            padding: 20px 24px 20px 24px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
            width: 148px;
        }

        .btn-primary {
            background-color: #0D9CE8;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #034D93;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #117a8b;
        }

        .image img {
            max-width: 100%;
            height: auto;
        }

        .services-section {
            text-align: center;
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
            padding-top: 20px;
            top: 110.27px;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .section-description {
            font-size: 16px;
            margin-bottom: 40px;
            line-height: 24.2px;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 19px;
        }

        .service-card {
            background-color: #19255B;
            border-radius: 8px;
            padding: 52px 28px 52px 28px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: background-color 0.3s ease;
            gap: 47px;
            text-decoration: none;
        }

        .service-card:hover {
            background-color: #B4E0F8;
        }

        .service-card:hover .service-text {
            color: #000000;
        }

        .service-card:hover img {
            background-color: #FFFFFF;
        }

        .service-icon {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .service-text {
            font-size: 24px;
            color: white;
            margin: 0;
            font-weight: 500;
            font-family: 'Inter', sans-serif;
        }

        .services-grid img {
            background-color: #B4E0F8;
            width: 78px;
            height: 75px;
            padding: 13px 15px 13px 15px;
            gap: 10px;
            border-radius: 8px;
        }

        a {
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column-reverse;
                justify-content: center;
                align-items: center;
                text-align: center;
                padding: 20px;
                height: auto;
            }

            .image {
                margin-bottom: 20px;
            }

            .content {
                max-width: 100%;
            }

            .buttons {
                flex-direction: column;
                gap: 10px;
            }
        }

        /* Haqqımızda Bölümü */
        .about-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            height: auto;
            border-radius: 8px;
            background-color: #19255B;
            margin-top: 40px;
        }

        .about-section .images {
            display: flex;
            flex-direction: column;
            gap: 20px;
            flex-shrink: 0;
        }

        .about-section .images img {
            border-radius: 8px;
            max-width: 100%;
            height: auto;
        }

        .about-section .img-row {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .about-section .img-row img:first-child {
            width: 100%;
            max-width: 294px;
            height: auto;
        }

        .about-section .img-row img:last-child {
            width: 100%;
            max-width: 197px;
            height: auto;
            margin-top: 105px;
        }

        .about-section .images img.foto3 {
            width: 100%;
            max-width: 407px;
            height: auto;
            margin-left: 100px;
            padding-top: 58px;
        }

        .about-section .text-content {
            max-width: 600px;
            margin-left: 20px;
            flex-grow: 1;
        }

        .about-section h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            width: 100%;
            height: auto;
        }

        .about-section p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #BAB9B9;
            width: 100%;
            height: auto;
        }

        .about-section ul {
            list-style: none;
            padding: 0;
            margin-top: 8px;
        }

        .about-section ul li {
            font-size: 1rem;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 207px;
            height: auto;
        }

        .about-section ul li:before {
            content: '✓';
            margin-right: 10px;
            color: #17a2b8;
        }

        .about-title {
            text-align: center;
            font-size: 2.5rem;
            margin: 80px 0;
            color: #fff;
        }


        @media (max-width: 768px) {
            .about-section {
                flex-direction: column;
                align-items: center;
                padding: 10px;
            }

            .about-section .text-content {
                max-width: 100%;
                margin-left: 0;
                text-align: center;
            }

            .about-section .img-row {
                flex-direction: column;
                align-items: center;
                margin-top: 20px;
            }

            .about-section .img-row img:last-child {
                margin-top: 20px;
            }

            .about-section .images img.foto3 {
                margin-left: 0;
                padding-top: 20px;
            }

            .about-section h1 {
                font-size: 1.5rem;
            }

            .about-section p {
                font-size: 0.9rem;
            }

            .about-section ul li {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .about-section h1 {
                font-size: 1.25rem;
            }

            .about-section p {
                font-size: 0.8rem;
            }

            .about-section ul li {
                font-size: 0.8rem;
            }

            .about-section .img-row img:first-child, 
            .about-section .img-row img:last-child, 
            .about-section .images img.foto3 {
                max-width: 100%;
                margin-top: 10px;
            }
        }
        .blog-section {
            padding: 50px;
            background-color: #19255B; 
        }

        .blog-title {
            text-align: center;
            font-size: 36px;
            margin-bottom: 40px;
        }

        .blog-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .blog-card {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .blog-card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .blog-card-content {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: #fff;
        }

        .blog-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6); 
        }

        .blog-card p {
            font-size: 20px;
            line-height: 1.5;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6); 
        }

        .blog-card a {
            color: #E7E8ED; 
            text-decoration: none;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
        }

        .blog-card a .fa {
            margin-left: 5px;
            font-size: 18px; 
        }

        .blog-card:hover {
            transform: scale(1.05);
        }

        

        @media (max-width: 768px) {
            .blog-cards {
                grid-template-columns: 1fr;
            }
        }
        .unique-btn-primary {
            padding: 20px 24px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
            width: 148px;
            background-color: #0D9CE8;
            color: white;
            transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
        }

        .unique-btn-primary:hover {
            background-color: #0077c2;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.4);
            transform: translateY(-3px);
        }

        .unique-btn-secondary {
            padding: 20px 24px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
            width: 148px;
            background-color: #034D93;
            color: white;
            transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
        }

        .unique-btn-secondary:hover {
            background-color: #023f7a;
            box-shadow: 0 4px 15px rgba(0, 51, 102, 0.4);
            transform: translateY(-3px);
        }

    </style>
</head>
<body class="main-body">
<?php include 'navbar.php'; ?>

    <div class="container main-container">
        <div class="content">
            <h1>24/7 Kiber təhlükəsizlik əməliyyat mərkəzi</h1>
            <p>Lorem ipsum dolor sit amet consectetur. At nunc libero lectus eget vel quam vel. Lectus hendrerit consequat semper massa urna. Faucibus tellus duis pellentesque id nullam praesent luctus. Sapien ultricies maecenas senectus neque id amet leo. Quam eu diam.</p>
            <div class="buttons">
            <a href="#" class="unique-btn-primary">Get started</a>
            <a href="communicate.php" class="unique-btn-secondary">Contact us</a>

            </div>
        </div>
        <div class="image">
            <img src="images/Group.png" alt="Shield Image">
        </div>
    </div>
    
    <section class="services-section">
        <h2 class="section-title">Xidmətlər</h2>
        
        <div class="services-grid">
            <a href="#section1" class="service-card">
                <img src="images/icon1.png" alt="Icon 1" class="service-icon">
                <p class="service-text">İstifadəçi qaydaları və Məxfilik</p>
            </a>
            <a href="#section2" class="service-card">
                <img src="images/icon2.png" alt="Icon 2" class="service-icon">
                <p class="service-text">İstifadəçi qaydaları və Məxfilik</p>
            </a>
            <a href="#section3" class="service-card">
                <img src="images/icon3.png" alt="Icon 3" class="service-icon">
                <p class="service-text">İstifadəçi qaydaları və Məxfilik</p>
            </a>
            <a href="#section4" class="service-card">
                <img src="images/icon4.png" alt="Icon 4" class="service-icon">
                <p class="service-text">İstifadəçi qaydaları və Məxfilik</p>
            </a>
        </div>
    </section>


    <h2 class="about-title">Haqqımızda</h2>

    <section class="about-section">
        <div class="images">
            <div class="img-row">
                <img class="img1" src="images/foto1.png" alt="Image 1">
                <img class="img2" src="images/foto2.png" alt="Image 2">
            </div>
            <img class="foto3" src="images/foto3.png" alt="Image 3">
        </div>
        <div class="text-content">
            <h1>7/24 işləyən kiber təhlükəsizlik əməliyyat sistemi</h1>
            <p>
                Mauris amet ultrices nullam ipsum. Massa sed metus eleifend nunc ut. Vivamus eu auctor consectetur vivamus augue nunc dignissim. Ultrices vestibulum massa lectus senectus odio.</p>
            <ul>
                <li>Kiber Təhlükəsizlik</li>
                <li>Kiber Təhlükəsizlik</li>
                <li>Kiber Təhlükəsizlik</li>
                <li>Kiber Təhlükəsizlik</li>
            </ul>
        </div>
    </section>

    <h2 class="about-title">Blog</h2>

    <section class="blog-section">
        <div class="blog-cards">
            <div class="blog-card">
                <img src="images/blog1.png" alt="Blog Image 1">
                <div class="blog-card-content">
                    <p>Lorem ipsum dolor sit amet. Rhoncus ultricies integer quis.</p>
                    <a href="#">Read more <i class="fa">&#xf105;</i></a>
                </div>
            </div>
            <div class="blog-card">
                <img src="images/blog2.png" alt="Blog Image 2">
                <div class="blog-card-content">
                    <p>Lorem ipsum dolor sit amet. Rhoncus ultricies integer quis.</p>
                    <a href="#">Read more <i class="fa">&#xf105;</i></a>
                </div>
            </div>
            <div class="blog-card">
                <img src="images/blog3.png" alt="Blog Image 3">
                <div class="blog-card-content">
                    <p>Lorem ipsum dolor sit amet. Rhoncus ultricies integer quis.</p>
                    <a href="#">Read more <i class="fa">&#xf105;</i></a>
                </div>
            </div>
        </div>
    </section>
    <h2 class="about-title">Faq</h2>
    
    <?php include 'faq.php'; ?>
    
    <?php include 'footer.php'; ?>
       </body>
</html>
