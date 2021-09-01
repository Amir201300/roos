<!DOCTYPE html>
<html dir="rtl" lang="ar">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/Admin/assets/images/favicon.png">
    <title>@yield('title')</title>
    <!-- Custom CSS -->
    <link href="/Admin/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/Admin/dist/css/style.min.css" rel="stylesheet">
    <link href="/Admin/dist/css/newStyleAr.css" rel="stylesheet">
    <link href="/Admin/toast/jquery.toast.css" rel="stylesheet"/>
    @yield('style')
</head>

<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper">

    @include('Admin.includes.layouts.header')
    @include('Admin.includes.layouts.sidebar')
    @yield('header')

    @yield('content')

</div>

{{--@include('include.Admin.DeleteModel')--}}


<script src="/Admin/assets/libs/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap tether Core JavaScript -->
<script src="/Admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="/Admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="/Admin/dist/js/app.min.js"></script>
<!-- Theme settings -->
<script src="/Admin/dist/js/app.init.js"></script>
<script src="/Admin/dist/js/app-style-switcher.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/Admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="/Admin/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="/Admin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/Admin/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="/Admin/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!--c3 JavaScript -->
<script src="/Admin/assets/extra-libs/c3/d3.min.js"></script>
<script src="/Admin/assets/extra-libs/c3/c3.min.js"></script>
<script src="/Admin/dist/js/pages/dashboards/dashboard3.js"></script>
<script src="/Admin/toast/jquery.toast.js"></script>
@yield('script')


</body>
</html>