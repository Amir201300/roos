<header id="header" data-scroll-index="0">

    <div id="header-wrap">

        <div class="full-container">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 pd-sub-header">

                            <ul class="header-contact-info">
                                <li><i class="fa fa-phone-square"></i><span> 966502555443+</span></li>
                                <li><i class="fas fa-envelope-open-text"></i><span>info@aqar.com</span></li>
                            </ul><!-- .header-contact-info end -->
                            <div class="header-social-icons">
                                <input type="button" class="form-control"
                                       onclick="location.href = 'registerForm.html';" value="تسجيل">

                                <nav class="navbar  navbar-expand-sm displaynone" style="position: relative;">

                                    <div class="collapse navbar-collapse show " id="navbar-list-4">
                                        <ul class="navbar-nav">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#"
                                                   id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <span> محمد علي</span>
                                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg"
                                                         width="40" height="40" class="rounded-circle">


                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="#"> <i
                                                                class="fa fa-user-o mr-lf"></i>معلوماتي</a>
                                                    <a class="dropdown-item" href="#"> <i
                                                                class="fas fa-bullhorn mr-lf"></i> أعلاناتي المفضلة </a>
                                                    <a class="dropdown-item" href="#"> <i
                                                                class="fas fa-building mr-lf"></i>عقاراتي </a>
                                                    <a class="dropdown-item" href="#"><i
                                                                class="fas fa-building mr-lf"></i> التذاكر </a>
                                                    <a class="dropdown-item" href="#"> <i
                                                                class="fa fa-sign-out mr-lf" aria-hidden="true"></i>تسجيل
                                                        الخروج </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>

                            </div><!-- .head

                                er-register -->


                        </div>
                    </div>

                </div>

            </div>

        </div><!-- #header-wrap end -->
        <div class="full-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-and-nav">
                        <a class="logo logo-header" href="/">
                            <img src="/Fronted/images/logo.png" alt="">

                        </a><!-- .logo end -->

                        <ul id="main-menu" class="main-menu" style="padding-left:132px;padding-top: 2%;">
                            <li @if(isset($active) AND  $active ==1) class="active" @endif><a href="/">{{trans('main.home')}}</a></li>
                            <li @if(isset($active) AND $active ==2) class="active" @endif><a href="/About-us">{{trans('main.aboutUs')}}</a></li>
                            <li @if(isset($active) AND  $active ==3) class="active" @endif><a href="{{route('page.aqaras')}}">{{trans('main.Real_estates')}}</a></li>
                            <li @if(isset($active) AND  $active ==4) class="active" @endif><a href="/contracts">{{trans('main.contracts')}}</a></li>
                            <li @if(isset($active) AND  $active ==5) class="active" @endif><a href="/ask-property">{{trans('main.ask_property')}}</a></li>
                            <li><a href="show-property.html">أعرض عقارك</a></li>
                            <li><a href="Jobs.html">الوظائف </a></li>
                            <li><a href="contact-us.html">اتصل بنا</a></li>
                        </ul>
                        <div class="mobile-menu-btn hamburger hamburger--slider">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                        </div><!-- .mobile-menu-btn -->
                        <div class="clearfix"></div>
                        <div id="mobile-menu"></div><!-- #mobile-menu end -->
                    </div><!-- .logo-and-nav end -->

                </div>

            </div>
        </div>

    </div>
</header><!-- #header end -->

<header id="header-sticky">
    <div id="header-sticky-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>
</header>
