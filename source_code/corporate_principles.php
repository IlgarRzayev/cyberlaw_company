<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Principles</title>
    <style>
        .cyberlaw-body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background-color: #0b0e4a;
            color: white;
        }

        .cyberlaw-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 80%;
            margin: 0 auto;
        }

        .cyberlaw-bos{
            margin-top: 70px;
        }

        .cyberlaw-title {
            font-size: 36px;
            top: 182px;
            width: 350px;
            height: 44px;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            line-height: 43.57px;
            display: inline-block;
            margin-bottom: 40px;
        }

        .cyberlaw-description {
            height: 83px;
            font-size: 16px;
            line-height: 24.2px;
            font-family: 'Inter', sans-serif;
            color: #FFFFFF;
            margin: 0 0 111px 0;
        }

        .cyberlaw-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1em;
            margin-bottom: 100px;
        }

        .cyberlaw-grid-item {
            background-color: #B4E0F8;
            color: #0051AB;
            padding: 52px, 81px, 52px, 81px;
            border-radius: 8px;
            width: 413px;
            height: 158px;
            top: 650px;
            gap: 10px;
            font-size: 1.2em;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media (max-width: 768px) {
            .cyberlaw-grid {
                grid-template-columns: 1fr;
            }
        }
        
    </style>
</head>
<body class="cyberlaw-body">
    <?php include 'navbar.php'; ?>

    <div class="cyberlaw-container">
        <div class="cyberlaw-bos">
            <h1 class="cyberlaw-title">Korporativ prinsiplər</h1>
            <p class="cyberlaw-description">Lorem ipsum dolor sit amet consectetur. Felis purus neque varius sit. Cras rhoncus rhoncus risus et hac eget vulputate vulputate id. In dolor id ornare proin senectus etiam. Semper nibh elit nunc at. Ut sagittis nibh ipsum ipsum. Amet egestas quam adipiscing lorem.</p>
        </div>
        <div class="cyberlaw-grid">
            <div class="cyberlaw-grid-item">Accountability</div>
            <div class="cyberlaw-grid-item">Policies</div>
            <div class="cyberlaw-grid-item">Risk management</div>
            <div class="cyberlaw-grid-item">Responsibility</div>
            <div class="cyberlaw-grid-item">Accountability</div>
            <div class="cyberlaw-grid-item">Transparency</div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
