<?php
   require_once("config.php")
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Əlaqə</title>
    <style>
        .contact-body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background-color: #0b0e4a;
            color: white;
        }

        .contact-section {
            padding: 20px;
        }
        .contact-section h1 {
            width: 100%; 
            max-width: 838px; 
            margin: 0 auto 20px auto;
            font-size: 36px;
            line-height: 43.57px;
            font-weight: 500;
            color: #FFFFFF;
            text-align: center;
            margin-top: 30px;
        }
        .contact-section p {
            width: 100%;
            max-width: 838px;
            margin: 0 auto 20px auto;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 24.2px;
            text-align: center;
        }
        .form-control {
            background-color: #0b0e4a;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 8px;
            margin-bottom: 20px;
        }
 
        .contact-section .form-control::placeholder {
            color: #ffffff;
            opacity: 1;
        }

        .form-control.message {
            width: 100%;
            max-width: 846px;
            height: 248px;
            border-radius: 8px;
            border: 1px solid #fff;
            opacity: 1;
            resize: none;
            background-color: #0b0e4a;
        }
        .btn-primary {
            background: #0D9CE8;
            border: none;
            border-radius: 8px;
            width: 104px;
            height: 56px;
            padding: 0;
        }
        .btn-primary:hover {
            background-color: #0D6EFD;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            max-width: 846px;
            margin: 0 auto 20px auto;
        }
        .form-row .form-control {
            width: 100%;
            max-width: 257px;
            height: 56px;
            background-color: #0b0e4a;
        }
        .form-group-submit {
            display: flex;
            justify-content: flex-start;
            margin: 0 auto;
            width: 100%;
            max-width: 846px;
        }
        .form-control:focus {
            background-color: #0D9CE8;
            color: #fff; 
            border-color: #0D9CE8; 
        }
        
        

    

    </style>
</head>
<body class="contact-body">
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <section class="contact-section text-center">
            <h1 >Əlaqə</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur. Felis purus neque varius sit. Cras rhoncus rhoncus risus et hac eget vulputate vulputate id. In dolor id ornare proin senectus etiam. Semper nibh elit nunc at. Ut sagittis nibh ipsum ipsum. Amet egestas quam adipiscing lorem.</p>
            
            <form class="mt-4" action="contact.php" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control message" id="message" name="message" rows="5" placeholder="Message"></textarea>
                </div>
                <div class="form-group-submit">
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </div>
            </form>

        </section>
    </div>

    <?php include 'footer.php'; ?>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
