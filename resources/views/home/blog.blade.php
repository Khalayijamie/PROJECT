<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Car wash</title>
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
                        <div class="card-header">Blog Page</div>
    
                   

                        <!-- Blog Form -->
                        <div class="card-body">
                            <h2>Create a New Blog Post</h2>
                            <form id="post-form">
                                <label for="title">Title:</label>
                                <input type="text" id="title" name="title" class="form-control" required>

                                <label for="content">Content:</label>
                                <textarea id="content" name="content" class="form-control" rows="4" required></textarea>

                                <button type="button" style="color:black" class="btn btn-primary" onclick="submitPost()">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-wrapper section-bg2"  data-background="home/assets/img/gallery/footer-bg.png">
            <!-- Footer Start-->
           @include('home.footer')
          <!-- Footer End-->
      </div>
  </footer>
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<script>
    function submitPost() {
        // Get form values
        var title = document.getElementById('title').value;
        var content = document.getElementById('content').value;

        // Create a new blog post element
        var postElement = document.createElement('div');
        postElement.className = 'blog-post';
        postElement.innerHTML = '<h3>' + title + '</h3><p>' + content + '</p>';

        // Append the new post to the existing posts container
        var postsContainer = document.querySelector('.card-body');
        postsContainer.appendChild(postElement);

        // Clear the form
        document.getElementById('post-form').reset();
    }
</script>

<!-- JS here -->

<script src="home/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="home/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="home/assets/js/popper.min.js"></script>
<script src="home/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="home/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
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

<!-- counter , waypoint,Hover Direction -->
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
</html>