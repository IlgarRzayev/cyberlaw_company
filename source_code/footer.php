<!DOCTYPE html>
<html lang="en">
<head>
    <title>Footer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cyberlaw-footer h3 {
            color: rgba(255, 255, 255, 1);
            padding-bottom: 30px;
        }
        .cyberlaw-footer {
            background-color: #19255B;
            padding: 54px 15px;
            margin-top: 100px;
        }
        .cyberlaw-footer li, .cyberlaw-footer p {
            color: rgba(255, 255, 255, 0.8);
        }
        .cyberlaw-footer img{
            width: 18px;
            height: 18px;
            gap: 15px;
        }

        @media (max-width: 576px) {
            .cyberlaw-footer {
                text-align: center;
            }
            .cyberlaw-social-icons a {
                display: inline-block;
                margin: 0 5px;
            }
            .cyberlaw-contact-info p {
                margin: 0;
            }
        }
        .faq {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px; 
            gap: 10px;
        }

        

        .accordion-button {
            background-color: #B4E0F8;
            color: #19255B;
            position: relative;
            border: none;
            box-shadow: none;
            outline: none;
            padding: 15px 20px; 
        }

        .accordion-button:focus {
            box-shadow: none;
            outline: none;
        }

        .accordion-button::after {
            display: none;
        }

        .accordion-button:not(.collapsed)::after {
            display: inline-block;
            content: "\f078";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            right: 1.25rem;
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.5);
        }

        .accordion-button:not(.collapsed) {
            background-color: #19255B;
            color: white;
        }

        .accordion-item {
            border: none;
            margin-bottom: 10px;
        }

        .accordion-body {
            background-color: #0b0e4a;
            color: #B3B7C8;
            padding: 10px 15px; 
        }
    </style>
</head>
<body>
    <footer class="cyberlaw-footer">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h3>Cyberlaw</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Leo risus elit justo imperdiet pellentesque. Nulla justo erat vestibulum.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h3>Haqqımızda</h3>
                    <ul class="list-unstyled">
                        <li>Kiber təhlükəsizlik</li>
                        <li>Kiber təhlükəsizlik</li>
                        <li>Kiber təhlükəsizlik</li>
                        <li>Kiber təhlükəsizlik</li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h3>Abunəlik</h3>
                    <div class="cyberlaw-social-icons">
                        <a href="#"><img src="images/instagram_icon.png" alt="Instagram"></a>
                        <a href="#"><img src="images/facebook_icon.png" alt="Facebook"></a>
                        <a href="#"><img src="images/linkedin_icon.png" alt="LinkedIn"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h3>Əlaqə</h3>
                    <div class="cyberlaw-contact-info">
                        <p><img src="images/mobile_icon.png" alt="mobile"> +994 9999999</p>
                        <p><img src="images/mail_icon.png" alt="email"> ilqar@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
