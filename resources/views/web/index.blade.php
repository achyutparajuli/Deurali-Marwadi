<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description"
        content="Experience the taste of authentic Indian sweets and Marwadi cuisine at {{ env('APP_NAME') }}. Enjoy traditional dishes, comfortable stays, and exceptional hospitality.">
    <meta name="keywords"
        content="Indian sweets, Marwadi cuisine, authentic Indian food, traditional Indian sweets, Marwadi dishes, Indian restaurant, Marwadi restaurant, Indian hotel, Marwadi hotel, Indian desserts">
    <meta name="author" content="{{ env('APP_NAME') }}Name]">
    <meta property="og:title" content="Authentic Indian Sweets and Marwadi Cuisine | {{ env('APP_NAME') }}">
    <meta property="og:description"
        content="Experience the taste of authentic Indian sweets and Marwadi cuisine at {{ env('APP_NAME') }}. Enjoy traditional dishes, comfortable stays, and exceptional hospitality.">
    <meta property="og:image" content="{{ asset('assets/web/img/logo.png') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Authentic Indian Sweets and Marwadi Cuisine | {{ env('APP_NAME') }}">
    <meta name="twitter:description"
        content="Experience the taste of authentic Indian sweets and Marwadi cuisine at {{ env('APP_NAME') }}. Enjoy traditional dishes, comfortable stays, and exceptional hospitality.">
    <link rel="canonical" href="{{ url('/') }}">
    <link rel="icon" href="{{ asset('assets/web/img/logo.png') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/web/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/web/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/web/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img src="{{ asset('assets/web/img/logo.png') }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                        <a href="#about-section" class="nav-item nav-link">About</a>
                        <a href="#popular-items-section" class="nav-item nav-link">Popular Items<span
                                class="blink-dot"><span class="circle"></span></span></a>
                        <a href="#contact-section" class="nav-item nav-link">Contact</a>
                        <a href="#find-us-section" class="nav-item nav-link">Find Us</a>
                    </div>
                    <a href="#contact-section" class="btn btn-primary py-2 px-4 book-a-table">Book A Table</a>
                </div>

            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Mithai & Snacks</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">
                                Welcome To Deurali Marwadi,where indulgence meets luxury. We are more than just a Mithai
                                and snacks shop; we are a
                                destination for exquisite Indian mithai and savory delights, coupled with the opulence
                                of hotel luxury stays.
                            </p>
                            <a href="{{ route('menu') }}"
                                class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Explore our delightful
                                menu</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden d-none d-md-block d-lg-block">
                            <img class="img-fluid" src="{{ asset('assets/web/img/hero.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>Our commitment to quality food ensures that each mithai and dish is crafted using
                                    the finest ingredients, offering a
                                    delightful and authentic taste experience with every bite.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>Experience the convenience of online ordering with our mithai and snacks restaurant,
                                    allowing you to savor our
                                    delightful treats from the comfort of your home with just a few clicks.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-check text-primary mb-4"></i>
                                <h5>Quality Service
                                </h5>
                                <p>For exceptional service in our mithai and snacks restaurant, we prioritize highly
                                    trained staff and a welcoming
                                    environment, ensuring each guest enjoys an impeccable dining experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="about-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="{{ asset('assets/web/img/about-1.jpg') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="{{ asset('assets/web/img/about-2.jpg') }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="{{ asset('assets/web/img/about-3.jpg') }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="{{ asset('assets/web/img/about-4.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>{{ env('APP_NAME')
                            }}</h1>
                        <p class="mb-4 text-justify">
                            Welcome to Deurali Mithai & Sweets, where we specialize in bringing you the finest selection
                            of traditional and
                            contemporary mithai (sweets). With a legacy of culinary excellence spanning decades, our
                            artisanal creations are
                            meticulously crafted using premium ingredients to ensure every bite is a celebration of
                            flavor and quality. Whether
                            you're celebrating a special occasion or simply indulging in a sweet moment, we invite you
                            to experience the richness of
                            our heritage through our delectable offerings.
                        </p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                                        {{ date('Y') - 1998 }}
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">100
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Special Items</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('menu') }}">Explore our delightful
                            menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5" id="popular-items-section">
            <div class=" container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items <a href="{{ route('menu') }}"
                            class="see-all-menu d-block d-sm-inline" target="_blank">See All</a></h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                                href="#tab-1">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Mithai Moments</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                                href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Suggested Items</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                                href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Mouthwatering</small>
                                    <h6 class="mt-n1 mb-0">Lovely Dinners</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                @foreach($mithais as $mithai)
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="{{ asset($mithai['image']) }}"
                                            alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{ $mithai['name'] }}</span>
                                                <span class="text-primary">{{ env('CURRENCY') }}{{ $mithai['price']
                                                    }}</span>
                                            </h5>
                                            <small class="fst-italic">{{ $mithai['short_desc'] }}</small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @foreach($suggestions as $suggested)
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded"
                                            src="{{ asset($suggested['image']) }}" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{ $suggested['name'] }}</span>
                                                <span class="text-primary">{{ env('CURRENCY') }}{{ $suggested['price']
                                                    }}</span>
                                            </h5>
                                            <small class="fst-italic">{{ $suggested['short_desc'] }}</small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @foreach($dinners as $dinner)
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="{{ asset($dinner['image']) }}"
                                            alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{ $dinner['name'] }}</span>
                                                <span class="text-primary">{{ env('CURRENCY') }}{{ $dinner['price']
                                                    }}</span>
                                            </h5>
                                            <small class="fst-italic">{{ $dinner['short_desc'] }}</small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" id="contact-section" data-wow-delay="0.1s"
            style="padding-top: unset !important;">
            <div class="container-xxl py-5" style="padding-top: unset !important;"></div>
            <div class="row g-0">
                <div class="col-md-6 d-none d-md-block d-lg-block">
                    <div class="video">
                        <!-- <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button> -->
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Any Queries?</h5>
                        <h1 class="text-white mb-4">Tell Us How You Felt</h1>
                        <form action="{{ route('send-message') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name"
                                            name="name" required>
                                        <label for="name">Your Name *</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email"
                                            name="email" required>
                                        <label for="email">Your Email *</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="subject" class="form-control form-subject" id="subject"
                                            placeholder="Your subject" name="subject" required>
                                        <label for="subject">Your Subject *</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control form-message" placeholder="Message" id="message"
                                            style="height: 100px" name="message" required></textarea>
                                        <label for="message">Message *</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->

    </div>
    </div>
    <!-- Team End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5" id="find-us-section">

        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Location</h5>
                <h1 class="mb-5">Find us on Google</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 wow fadeIn map-div text-center" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Rastra Bank chowk Outlet
                    </h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28129.653065209473!2d83.971529!3d28.201034!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595006ac8317f%3A0x3ece11a27d67528!2sDeurali%20Marwadi%20Hotel%20and%20Restaurant!5e0!3m2!1sen!2snp!4v1719141120643!5m2!1sen!2snp"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-md-6 wow fadeIn map-div text-center" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Chipledunga Outlet</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d439.43190945989346!2d83.989064!3d28.223858!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595cc281b4247%3A0x6b35b8626e3dd681!2sHotel%20Deurali!5e0!3m2!1sen!2snp!4v1719141149277!5m2!1sen!2snp"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach($reviews as $review)
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>{{ $review['review'] }}
                    </p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset($review['image']) }}"
                            style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">{{ $review['name'] }}</h5>
                            <small>{{ $review['profession'] }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->




    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                    <a href="#about-section" class="btn btn-link">About</a>
                    <a href="#popular-items-section" class="btn btn-link">Popular Items</a>
                    <a href="#contact-section" class="btn btn-link">Contact</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                        Rastrabank Chowk , Pokhara
                    </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>
                        <a class="all-unset" href="tel:+977 61-450576">+977 61-450576</a>
                    </p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>
                        <a href="mailto:deuralimarwadi@gmail.com" class="all-unset">{{ env('GMAIL') }}</a>
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="{{ env('INSTAGRAM_URL') }}" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ env('FACEBOOK_URL') }}" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="mailto:{{ env('GMAIL') }}" target="_blank"><i
                                class="fab fa-google"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ route('connect') }}" target="_blank"><i
                                class="fas fa-link"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                    <h5 class="text-light fw-normal">Sunday - Friday</h5>
                    <p>08AM - 09PM</p>
                    <h5 class="text-light fw-normal">Saturday</h5>
                    <p>9AM - 8PM</p>
                </div>
                <div class="col-lg-3 col-md-6 d-none">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright pb-4">
                <div class="row mb-3">
                    <div class="col-md-12 text-center mb-4 mb-md-0">
                        Copyright © {{ date('Y') }} {{ env('APP_NAME') }}. |
                        Developed By: <a class="border-bottom" href="https://achyutparajuli.com.np"
                            target="_blank">Achyut
                            Parajuli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/web/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/web/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/web/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/web/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/web/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/web/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/web/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/web/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/web/js/main.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('body').on('click', '.nav-link', function (event) {
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            });

            $('body').on('click', '.book-a-table', function (event) {
                $('.form-subject').val('Regarding Booking a Table.');
                $('.form-message').val('I kindly request confirmation of my reservation. Please contact me at your earliest convenience to discuss further details.');
            });
        });
    </script>
</body>

</html>