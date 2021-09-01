<!DOCTYPE html>
<html lang="en-US">

<head>

    <!-- Meta
    ============================================= -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, intial-scale=1">

    <!-- Stylesheets
    ============================================= -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href="/Fronted/css/style.css" rel="stylesheet">
    <link href="/Fronted/css/style-rtl.css" rel="stylesheet">

    <!--<link href="https://fonts.googleapis.com/css?family=Cairo:400,400i,600,600i,700,700i&subset=arabic" rel="stylesheet">-->
    <!--<link rel="preconnect" href="https://fonts.gstatic.com">-->


    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500&display=swap" rel="stylesheet">
    <!--<script src='https://kit.fontawesome.com/a076d05399.js'></script>-->
    <link href="/Fronted/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0//css/font-awesome.min.css">
    <!-- Favicon
    ============================================= -->
    <link rel="shortcut icon" href="/Fronted/images/logo.ico">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet"/>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Title
    ============================================= -->
    <title>@yield('title')</title>
    <style>

        .slider {
            width: 80%;
            margin: 100px auto;

        }

        .slick-slide {
            margin: 0px 20px;
        }



        .slick-prev:before,
        .slick-next:before {
            color: black;
        }


        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .2;
        }

        .slick-active {
            opacity: .5;
        }

        .slick-current {
            opacity: 1;
        }
    </style>

</head>

<body>
<div id="scroll-progress"><span class="scroll-percent"></span></div>

<!-- Website Loading
============================================= -->
<div id="website-loading">

    <div class="loader">
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"></div>
    </div><!-- .loader end -->

</div><!-- .website-loading end -->

<div id="full-container">
    @include('Fronted.layouts.header')

    @yield('content')

    @include('Fronted.layouts.footer')


</div>









<a class="scroll-top" href="#"><i class="fas fa-angle-double-up scroll-icon"></i></a>

<!-- External JavaScripts


============================================= -->

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<!--<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
</script>

<script src="/Fronted/js/jquery.js"></script>
<script src="/Fronted/js/jRespond.min.js"></script>
<script src="/Fronted/js/jquery.easing.min.js"></script>
<script src="/Fronted/js/owl.carousel.min.js"></script>
<script src="/Fronted/js/simple-scrollbar.min.js"></script>
<script src="/Fronted/js/superfish.js"></script>
<script src="/Fronted/js/scrollIt.min.js"></script>
<script src='/Fronted/js/functions.js'></script>
<script>
    wow = new WOW(
        {
            boxClass:     'wow',      // default
            animateClass: 'animated', // change this if you are not using animate.css
            offset:       0,          // default
            mobile:       true,       // keep it on mobile
            live:         true        // track if element updates
        }
    )
    wow.init();

    $(document).ready(function () {
        $(function () {
            var current_page_URL = location.href;

            $("a").each(function () {

                if ($(this).attr("href") !== "#") {

                    var target_URL = $(this).prop("href");

                    if (target_URL == current_page_URL) {
                        $('nav a').parents('li, ul').removeClass('active');
                        $(this).parent('li').addClass('active');

                        return false;
                    }
                }
            });
        });
    });
</script>



</body>
</html>
