<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar-body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        .cyberlaw-navbar {
            background: #0b0e4a;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            position: relative;
            width: 100%;
        }

        .cyberlaw-nav {
            list-style-type: none;
            display: flex;
            gap: 32px;
            margin: 0;
            padding: 0;
        }

        .cyberlaw-nav a {
            text-decoration: none;
            color: #FFFFFF;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 19.36px;
            text-align: left;
        }

        .cyberlaw-nav a:hover {
            color: #0D9CE8;
        }

        .cyberlaw-navbar-brand {
            text-decoration: none;
            color: #fff;
            font-size: 32px;
            font-weight: bold;
            margin-right: 40px;
        }

        .cyberlaw-btn-contact {
            background-color: #0D9CE8;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            padding: 20px 24px;
        }

        .cyberlaw-btn-contact:hover {
            background-color: #1C86EE;
        }

        /* Navbar toggler */
        .navbar-toggler {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .navbar-toggler span {
            display: block;
            width: 25px;
            height: 3px;
            background-color: #FFFFFF;
        }

        /* Mobile view */
        @media (max-width: 768px) {
            .cyberlaw-navbar {
                flex-wrap: wrap;
            }

            .cyberlaw-nav {
                flex-direction: column;
                gap: 16px;
                display: none;
                width: 100%;
                margin-top: 20px;
                background-color: #0b0e4a;
                padding: 20px;
            }

            .navbar-toggler {
                display: flex;
            }

            .cyberlaw-nav.show {
                display: flex;
            }

            .cyberlaw-btn-contact {
                margin-top: 20px;
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body class="navbar-body">
    <nav class="cyberlaw-navbar">
        <a class="cyberlaw-navbar-brand" href="#">Cyberlaw</a>
        <div class="navbar-toggler">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="cyberlaw-nav">
            <li><a href="main_page.php">Əsas Səhifə</a></li>
            <li><a href="about.php">Haqqımızda</a></li>
            <li><a href="corporate_principles.php">Korporativ prinsiplər</a></li>
            <li><a href="services.php">Xidmətlər</a></li>
            <li><a href="communicate.php">Əlaqə</a></li>
        </ul>
        <a class="cyberlaw-btn-contact" href="communicate.php">Bizimlə əlaqə</a>
    </nav>

    <script>
        const toggler = document.querySelector('.navbar-toggler');
        const navMenu = document.querySelector('.cyberlaw-nav');

        toggler.addEventListener('click', () => {
            navMenu.classList.toggle('show');
        });
    </script>
</body>
</html>
