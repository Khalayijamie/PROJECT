<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Car wash</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, ">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
       integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
       crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <style type="text/css">
    .centre{
        margin: auto;
        width: 50%;
        text-align: center;
        padding: 30px
    }

    table,th,td{
        border: 1px solid lightblue;
    }

    .th_deg{
        font-size: 30px;
        padding: 5px;
        background: lightgreen;
    }

    .img_deg{
        height: 150px;
        width: 150px;
    }

    .total_deg{
        font-size: 20px;
        padding: 40px;
    }

    </style>
</head>

<body class="full-wrapper">
  
    <!-- ? Preloader Start -->
    @include('home.preloader')
    <!-- Preloader Start -->
    @include('home.header')
    @include('sweetalert::alert')

    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{session()->get('message')}}

    </div>
    @endif
    
   

    <div class="centre">
        <table>
            <tr>
                <th class="th_deg">Product</th>
                <th class="th_deg">Quantity</th>
                <th class="th_deg">price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Action</th>
            </tr>

            <?php $totalprice=0; ?>
            @foreach ($cart as $cart)
                
            <tr>
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>{{$cart->price}}</td>
                <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
                <td><a class="btn btn-failure"  onclick="confirmation(event)" href="{{url('remove_cart', $cart->id)}}">Remove </td>
            </tr>

            <?php $totalprice=$totalprice + $cart->price ?>
            @endforeach


            <div>
                <h1 class="total_deg">Total Amount: Kshs {{$totalprice}}</h1>
            </div>
        
            <h1>Proceed to Order</h1>
        
            <a href="{{url('cash_order')}}" class="btn btn-danger">payment with cash</a>
           
            <a href="{{url('stripe', $totalprice)}}" class="btn btn-danger">Pay using your card</a>
        </div>
        </table>

       
 
        
   
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<script>
    function confirmation(ev){
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
            title: "Are you sure you want to remove this item",
            text: "You will not be able to revert this!!",
            icon: "warning",
            buttons:true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if(willCancel){
                window.location.href = urlToRedirect;
            }
        })
    }
    </script>

</body>
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


</html>
