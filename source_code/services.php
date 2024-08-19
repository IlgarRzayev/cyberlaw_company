<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xidmətlər</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .service-body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background-color: #0b0e4a;
            color: white;
        }


        .services-section {
            text-align: center;
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
            padding-top: 20px;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            margin-top: 80px;
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
            background-color: #B4E0F8;
        }

        .service-text {
            font-size: 24px;
            color: white;
            margin: 0;
            font-weight: 500;
            font-family: 'Inter', sans-serif;
        }
        .custom-img {
            width: 78px;
            height: 75px;
            padding: 13px 15px 13px 15px;
            gap: 10px;
            border-radius: 8px;
        }

        

        a {
            text-decoration: none;
        }

        .section-content {
            
            padding: 50px 20px;
            margin-top: 50px;
            display: flex;
            align-items: center;
            border-radius: 8px;
            gap: 20px;
            left: 80px;
            
        }

        .section-image {
            width: 300px;
            max-width: 100%;
            height: 300px;
            border-radius: 8px;
            background-color: #B4E0F8;
        }

        .section-text {
            width: 914px;
            height: 291px;
            text-align: left;
            gap: 39px;

        }

        .section-text h2 {
            font-size: 2rem;
            margin-top: 0px;
        }

        .section-text p {
            font-size: 1rem;
            line-height: 20.8px;
            color: #8C8C8C;
        }
        @media only screen and (max-width: 600px) {
            .services-section {
                padding-top: 10px;
            }

            .section-title {
                font-size: 2rem;
            }

            .section-description {
                font-size: 14px;
                margin-bottom: 20px;
            }

            .services-grid {
                grid-template-columns: 1fr; 
            }

            .service-card {
                padding: 30px 20px;
            }

            .service-icon {
                width: 40px;
                height: 40px;
            }

            img {
                width: 60px;
                height: 60px;
                padding: 10px;
            }

            .section-content {
                flex-direction: column;
                padding: 20px;
            }

            .section-image {
                width: 100%;
                height: auto;
            }

            .section-text {
                width: 100%;
                height: auto;
            }

            .section-text h2 {
                font-size: 1.5rem;
            }

            .section-text p {
                font-size: 0.9rem;
                line-height: 1.5;
            }
        }
    </style>
</head>
<body class="service-body">
<?php include 'navbar.php'; ?>

    <section class="services-section">
        <h2 class="section-title">Xidmətlər</h2>
        <p class="section-description">
            Lorem ipsum dolor sit amet consectetur. Felis purus neque varius sit. 
            Cras rhoncus rhoncus risus et hac eget vulputate vulputate id. In dolor id ornare 
            proin senectus etiam. Semper nibh elit nunc at. Ut sagittis nibh ipsum ipsum. 
            Amet egestas quam adipiscing lorem.
        </p>
        <div class="services-grid">
            <a href="#section1" class="service-card">
                <img src="images/icon1.png" alt="Icon 1" class="service-icon custom-img">
                <p class="service-text">İstifadəçi qaydaları və Məxfilik</p>
            </a>
            <a href="#section2" class="service-card">
                <img src="images/icon2.png" alt="Icon 2" class="service-icon custom-img">
                <p class="service-text">İstifadəçi qaydaları və Məxfilik</p>
            </a>
            <a href="#section3" class="service-card">
                <img src="images/icon3.png" alt="Icon 3" class="service-icon custom-img">
                <p class="service-text">İstifadəçi qaydaları və Məxfilik</p>
            </a>
            <a href="#section4" class="service-card">
                <img src="images/icon4.png" alt="Icon 4" class="service-icon custom-img">
                <p class="service-text">İstifadəçi qaydaları və Məxfilik</p>
            </a>
        </div>
    </section>

    <div id="section1" class="section-content">
        <img src="images/icon1.png" alt="Section 1 Image" class="section-image custom-img">
        <div class="section-text">
            <h2>İstifadəçi qaydaları və Məxfilik</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Sodales et at libero et ornare ut facilisis sed nunc. Ornare netus nisi eget lorem. Diam orci iaculis nibh iaculis ac. Molestie ac nunc cras laoreet pharetra.
                Augue cras sagittis nunc commodo interdum volutpat sagittis sit velit. Mauris fermentum id fringilla elementum non volutpat non nec ullamcorper. Lorem sed cursus ultricies duis at risus fames et eu. Neque ac enim id et. Pharetra tortor ornare nulla a sed neque. A egestas mauris amet senectus donec id turpis. Sapien integer malesuada viverra aliquam morbi ornare dignissim fermentum accumsan. In mattis massa lacus fringilla nisl quam integer quis tellus. Blandit id mattis viverra tincidunt pretium dui. Non porta bibendum molestie risus congue egestas tempus pretium nunc.
                Condimentum lorem morbi donec porttitor diam pulvinar. Volutpat ultricies odio eget magna lorem. A proin pellentesque et urna. Nullam arcu eu et pulvinar ornare. Ac condimentum adipiscing eget nulla. Eros elit tempus mauris pulvinar quam vitae. Et ac odio eget odio sed placerat semper. Adipiscing ac ultricies pellentesque in justo. Ut molestie quis bibendum.</p>
        </div>
    </div>
    <div id="section2" class="section-content">
        <img src="images/icon2.png" alt="Section 2 Image" class="section-image custom-img">
        <div class="section-text">
            <h2>İstifadəçi qaydaları və Məxfilik</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Sodales et at libero et ornare ut facilisis sed nunc. Ornare netus nisi eget lorem. Diam orci iaculis nibh iaculis ac. Molestie ac nunc cras laoreet pharetra.
                Augue cras sagittis nunc commodo interdum volutpat sagittis sit velit. Mauris fermentum id fringilla elementum non volutpat non nec ullamcorper. Lorem sed cursus ultricies duis at risus fames et eu. Neque ac enim id et. Pharetra tortor ornare nulla a sed neque. A egestas mauris amet senectus donec id turpis. Sapien integer malesuada viverra aliquam morbi ornare dignissim fermentum accumsan. In mattis massa lacus fringilla nisl quam integer quis tellus. Blandit id mattis viverra tincidunt pretium dui. Non porta bibendum molestie risus congue egestas tempus pretium nunc.
                Condimentum lorem morbi donec porttitor diam pulvinar. Volutpat ultricies odio eget magna lorem. A proin pellentesque et urna. Nullam arcu eu et pulvinar ornare. Ac condimentum adipiscing eget nulla. Eros elit tempus mauris pulvinar quam vitae. Et ac odio eget odio sed placerat semper. Adipiscing ac ultricies pellentesque in justo. Ut molestie quis bibendum.</p>
        </div>
    </div>
    <div id="section3" class="section-content">
        <img src="images/icon3.png" alt="Section 3 Image" class="section-image custom-img">
        <div class="section-text">
            <h2>İstifadəçi qaydaları və Məxfilik</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Sodales et at libero et ornare ut facilisis sed nunc. Ornare netus nisi eget lorem. Diam orci iaculis nibh iaculis ac. Molestie ac nunc cras laoreet pharetra.
                Augue cras sagittis nunc commodo interdum volutpat sagittis sit velit. Mauris fermentum id fringilla elementum non volutpat non nec ullamcorper. Lorem sed cursus ultricies duis at risus fames et eu. Neque ac enim id et. Pharetra tortor ornare nulla a sed neque. A egestas mauris amet senectus donec id turpis. Sapien integer malesuada viverra aliquam morbi ornare dignissim fermentum accumsan. In mattis massa lacus fringilla nisl quam integer quis tellus. Blandit id mattis viverra tincidunt pretium dui. Non porta bibendum molestie risus congue egestas tempus pretium nunc.
                Condimentum lorem morbi donec porttitor diam pulvinar. Volutpat ultricies odio eget magna lorem. A proin pellentesque et urna. Nullam arcu eu et pulvinar ornare. Ac condimentum adipiscing eget nulla. Eros elit tempus mauris pulvinar quam vitae. Et ac odio eget odio sed placerat semper. Adipiscing ac ultricies pellentesque in justo. Ut molestie quis bibendum.</p>
        </div>
    </div>
    <div id="section4" class="section-content">
        <img src="images/icon4.png" alt="Section 4 Image" class="section-image custom-img">
        <div class="section-text">
            <h2>İstifadəçi qaydaları və Məxfilik</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Sodales et at libero et ornare ut facilisis sed nunc. Ornare netus nisi eget lorem. Diam orci iaculis nibh iaculis ac. Molestie ac nunc cras laoreet pharetra.
                Augue cras sagittis nunc commodo interdum volutpat sagittis sit velit. Mauris fermentum id fringilla elementum non volutpat non nec ullamcorper. Lorem sed cursus ultricies duis at risus fames et eu. Neque ac enim id et. Pharetra tortor ornare nulla a sed neque. A egestas mauris amet senectus donec id turpis. Sapien integer malesuada viverra aliquam morbi ornare dignissim fermentum accumsan. In mattis massa lacus fringilla nisl quam integer quis tellus. Blandit id mattis viverra tincidunt pretium dui. Non porta bibendum molestie risus congue egestas tempus pretium nunc.
                Condimentum lorem morbi donec porttitor diam pulvinar. Volutpat ultricies odio eget magna lorem. A proin pellentesque et urna. Nullam arcu eu et pulvinar ornare. Ac condimentum adipiscing eget nulla. Eros elit tempus mauris pulvinar quam vitae. Et ac odio eget odio sed placerat semper. Adipiscing ac ultricies pellentesque in justo. Ut molestie quis bibendum.</p>
        </div>
    </div>
    <?php include 'footer.php'; ?>

</body>
</html>
