<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us - Car Wash</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="home/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="home/assets/css/slicknav.css">
    <link rel="stylesheet" href="home/assets/css/flaticon.css">
    <link rel="stylesheet" href="home/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="home/assets/css/gijgo.css">
    <link rel="stylesheet" href="home/assets/css/animate.min.css">
    <link rel="stylesheet" href="home/assets/css/animated-headline.css">
    <link rel="stylesheet" href="home/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="home/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="home/assets/css/themify-icons.css">
    <link rel="stylesheet" href="home/assets/css/slick.css">
    <link rel="stylesheet" href="home/assets/css/nice-select.css">
    <link rel="stylesheet" href="home/assets/css/style.css">
    <style>
        /* Add your custom styles here */
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
    
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
    
        .card-header {
            background-color: rgb(56, 216, 241);
            color: #fff;
            border-bottom: none;
            border-radius: 10px 10px 0 0;
        }
    
        .card-body {
            padding: 30px;
        }
    
        h2 {
            color: #2894a7;
        }
    
        label {
            color: #495057;
            font-weight: bold;
        }
    
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
            transition: border-color 0.3s;
        }
    
        .form-control:focus {
            border-color: #28a745;
        }
    
        textarea.form-control {
            min-height: 150px;
            resize: none; /* Disable textarea resizing */
            border-radius: 5px; /* Rounded corners for the textarea */
        }
    
        .form-control,
        textarea.form-control {
            margin-bottom: 15px;
        }
    
        .form-control,
        .btn-primary {
            transition: background-color 0.3s;
        }
    
        .btn-primary {
            background-color: #2890a7;
            border: 1px solid #2890a7;
            color: #fff;
        }
    
        .btn-primary:hover {
            background-color: skyblue;
            border: 1px solid skyblue;
        }
    </style>
    
    
</head>

<body class="full-wrapper">
    <!-- ? Preloader Start -->
    @include('home.preloader')
    <!-- Preloader Start -->
    @include('home.header')
    <main>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Contact Us</div>

                        <div class="card-body">
                            <h2>Get in Touch</h2>

                            <p>If you have any questions or inquiries, feel free to contact us using the form below:</p>

                            <!-- Contact Form -->
                            <form action="{{ route('contact.submit') }}" method="post">
                                @csrf
                            
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" required
                                           @auth
                                           placeholder="{{ Auth::user()->name }}"
                                           @endauth
                                    >
                                </div>
                            
                                <div class="form-group">
                                    <label for="email">Your Email</label>
                                    <input type="email" name="email" class="form-control" required
                                           @auth
                                           placeholder="{{ Auth::user()->email }}"
                                           @endauth
                                    >
                                </div>
                            
                                <div class="form-group">
                                    <label for="phone">Your Phone</label>
                                    <input type="tel" name="phone" class="form-control" required
                                           @auth
                                           placeholder="{{ Auth::user()->phone }}"
                                           @endauth
                                    >
                                </div>
                            
                                <div class="form-group">
                                    <label for="address">Your Address</label>
                                    <input type="text" name="address" class="form-control" required
                                           @auth
                                           placeholder="{{ Auth::user()->address }}"
                                           @endauth
                                    >
                                </div>
                            
                                <div class="form-group">
                                    <label for="message">Your Message</label>
                                    <textarea name="message" class="form-control" rows="5" required></textarea>
                                </div>
                            
                                <button type="submit" class="btn btn-primary" style="color: black;">Submit</button>
                            </form>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <div class="footer-wrapper section-bg2" data-background="home/assets/img/gallery/footer-bg.png">
            <!-- Footer Start-->
            @include('home.footer')
            <!-- Footer End-->
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="home/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="home/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="home/assets/js/popper.min.js"></script>
    <script src="home/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="home/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick, Owl-Carousel Plugins -->
    <script src="home/assets/js/owl.carousel.min.js"></script>
    <script src="home/assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="home/assets/js/wow.min.js"></script>
    <script src="home/assets/js/animated.headline.js"></script>
    <script src="home/assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="home/assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="home/assets/js/jquery.nice-select.min.js"></script>
    <script src="home/assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="home/assets/js/jquery.barfiller.js"></script>

    <!-- counter, waypoint,Hover Direction -->
    <script src="home/assets/js/jquery.counterup.min.js"></script>
    <script src="home/assets/js/waypoints.min.js"></script>
    <script src="home/assets/js/jquery.countdown.min.js"></script>
    <script src="home/assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="home/assets/js/contact.js"></script>
    <script src="home/assets/js/jquery.form.js"></script>
    <script src="home/assets/js/jquery.validate.min.js"></script>
    <script src="home/assets/js/mail-script.js"></script>
    <script src="home/assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="home/assets/js/plugins.js"></script>
    <script src="home/assets/js/main.js"></script>

</body>

</html
