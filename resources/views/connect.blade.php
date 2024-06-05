<!DOCTYPE html>
<html>

<head>
    <title>Social Media Buttons</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        .social-button {
            display: block;
            margin: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f0f0f0;
            cursor: pointer;
            padding: 2% 5%;
            text-align: center;
            font-weight: bolder;
            font-size: 2rem;
        }

        .social-button:hover {
            background-color: #e0e0e0;
            text-decoration: unset;
        }

        .row {
            margin-top: 5%;
        }

        @media screen and (max-width: 992px) {
            .social-button {
                margin: 30px;
            }
        }

        /* On screens that are 600px or less, set the background color to olive */
        @media screen and (max-width: 600px) {
            body {
                background-color: olive;
            }
        }
    </style>
</head>

<body>
    <div class="row" style="max-width: 100%;">
        <div class="col-lg-8 col-10 offset-lg-2 offset-1">
            <a href="#" class="social-button">
                Visit Our Website
            </a>
            <a href="#" class="social-button">
                Review us on Google
            </a>
            <a href="#" class="social-button">
                Check Our Menu
            </a>
            <a href="#" class="social-button">
                Follow Us On Facebook
            </a>

            <a href="#" class="social-button">
                Follow Us On Instagram
            </a>
        </div>
    </div>
</body>

</html>