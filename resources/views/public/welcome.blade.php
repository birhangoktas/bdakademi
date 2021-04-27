<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="BD Akademi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('public.seo')


    <!-- Google Font -->
    <link rel="icon" href="/public/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="/public/css/buton.css">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/public/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/public/css/animate.css">
    <link rel="stylesheet" href="/public/css/flaticon.css">
    <link rel="stylesheet" href="/public/css/sayac.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="sass/style.scss">
    <link rel="stylesheet" href="/public/css/style.css" type="text/css">
    <style>
        #countdown_timer>div {
            float: left;

            background: transparent;
            padding: 15px 20px;
            text-align: center;
            border-radius: 4px;
        }

        #countdown_timer>div>div:first-child {
            margin-top: 80%;
            text-align: center;
            padding-left: 30px;
            font-size: 28px;
            color: black;
            /*white theme*/
            text-shadow: 0px 1px 0px black;
            /*white theme*/
        }

        #countdown_timer>div>div:last-child {
            text-transform: capitalize;
            font-size: 14px;
            text-align: center;
            padding-left: 30px;

            color: #fff;
            /*black theme*/
            color: #444;
            /*white theme*/
        }

    </style>
</head>

<body style="overflow-x: hidden !important;">
    <a href="https://api.whatsapp.com/send?phone=905433121837&text=Merhaba%0AFiyat%0ABilgisi%0AAlacaktım." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"> Whatsapp</i>
    </a>



    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
        <section style="background-image: url(/public/img/arkaplan1.png);">
    </div>
-->


    <!-- Header Section Begin -->
    @include('public.include.top')
    <!-- Header Section End -->

    @yield('public.content')

    @include('public.include.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="/public/js/jquery-3.3.1.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    <script src="/public/js/jquery.magnific-popup.min.js"></script>
    <script src="/public/js/jquery-ui.min.js"></script>
    <script src="/public/js/mixitup.min.js"></script>
    <script src="/public/js/jquery.countdown.min.js"></script>
    <script src="/public/js/jquery.slicknav.js"></script>
    <script src="/public/js/owl.carousel.min.js"></script>
    <script src="/public/js/jquery.nicescroll.min.js"></script>
    <script src="/public/js/main.js"></script>
    <script src="/public/js/buton.js"></script>
    <script src="/public/js/jquery.min.js"></script>
    <script src="/public/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/public/js/jquery.waypoints.min.js"></script>
    <script src="/public/js/jquery.stellar.min.js"></script>
    <script src="/public/js/owl.carousel.min.js"></script>
    <script src="/public/js/jquery.animateNumber.min.js"></script>
    <script src="/public/js/scrollax.min.js"></script>
    <script src="/public/js/main.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>



</body>

</html>
