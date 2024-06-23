<!DOCTYPE html>
<html>

<head>
    <title>Connect | {{ env("APP_NAME") }} </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #feaa2d;
        }

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

        .logo {
            height: 10rem;
            max-width: 100%;
        }

        @media screen and (max-width: 992px) {
            .social-button {
                margin: 30px;
                padding: 6% 5%;
            }
        }
    </style>
</head>

<body>
    <div class="row" style="max-width: 100%;">
        <div class="col-lg-8 col-10 offset-lg-2 offset-md-1 offset-sm-0 text-center">
            <img src="{{ asset('assets/web/img/logo.png') }}" class="logo" alt="Logo">
            <a href="{{ env('WEBSITE_URL') }}" target="_blank" class="social-button">
                Visit Our Website
            </a>
            <a href="{{ env('REVIEW_URL') }}" target="_blank" class="social-button">
                Review us on Google
            </a>
            <a href="{{ route('menu') }}" target="_blank" class="social-button">
                Check Our Menu
            </a>
            <a href="{{ env('FACEBOOK_URL') }}" target="_blank" class="social-button">
                Follow Us On Facebook
            </a>

            <a href="{{ env('INSTAGRAM_URL') }}" target="_blank" class="social-button">
                Follow Us On Instagram
            </a>
        </div>
    </div>
</body>

</html>