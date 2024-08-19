<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .faq-body {
            background-color: #0b0e4a;
            color: white;
        }

        .faq {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;             gap: 10px;
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
<body class="faq-body">
    <div class="container faq">
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        What are the objectives of this service?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur. Tellus blandit commodo sollicitudin euismod faucibus amet etiam. Aliquam non blandit morbi luctus enim nisl. Aliquet amet egestas pellentesque bibendum nunc.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What are the objectives of this service?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur. Tellus blandit commodo sollicitudin euismod faucibus amet etiam. Aliquam non blandit morbi luctus enim nisl. Aliquet amet egestas pellentesque bibendum nunc.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What are the objectives of this service?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur. Tellus blandit commodo sollicitudin euismod faucibus amet etiam. Aliquam non blandit morbi luctus enim nisl. Aliquet amet egestas pellentesque bibendum nunc.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What are the objectives of this service?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur. Tellus blandit commodo sollicitudin euismod faucibus amet etiam. Aliquam non blandit morbi luctus enim nisl. Aliquet amet egestas pellentesque bibendum nunc.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        What are the objectives of this service?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur. Tellus blandit commodo sollicitudin euismod faucibus amet etiam. Aliquam non blandit morbi luctus enim nisl. Aliquet amet egestas pellentesque bibendum nunc.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
