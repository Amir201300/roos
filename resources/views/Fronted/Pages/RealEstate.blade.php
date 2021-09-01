@extends('Fronted.layouts.master')

@section('title')
    {{trans('main.Real_estates')}}
@endsection

@section('content')
    <section id="content">

        <div id="content-wrap mrg-btm">
            <section class="page-header content-header page-header-xs">
                <div class="container">
                    <!-- breadcrumbs -->
                    <ul id="breadcrumbs">
                        <li><a href="/">{{trans('main.home')}}</a></li>
                        <li>{{trans('main.Real_estates')}}</li>
                    </ul>
                </div>
            </section>


            <section class="bottomRightShadow realestats-search-sec search-sec">
                <div class="card-header tab-card-header header-position">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">بيع</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">ايجار</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">استثمار</a>
                        </li>
                    </ul>
                </div>

                <div class="card mt-3 tab-card realstate_tab_card">
                    <div class="card mt-3 tab-card">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">

                                <form action="#" method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row mrg-btm row_cust_width_sm">
                                                <div class="col-lg-3 col-md-2 col-sm-12 ">
                                                    <select class="form-control search-slt" id="type">
                                                        <option>نوع العقار </option>
                                                        <option>نوع العقار</option>
                                                        <option>نوع العقار</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-md-2 col-sm-12">
                                                    <select class="form-control search-slt" id="type">
                                                        <option> المنطقة </option>
                                                        <option>المنطقة</option>
                                                        <option>المنطقة</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-md-2 col-sm-12">
                                                    <select class="form-control search-slt" id="city">
                                                        <option>المدينة</option>
                                                        <option>المدينة</option>
                                                        <option>المدينة</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-md-2 col-sm-12">
                                                    <select class="form-control search-slt" id="city">
                                                        <option>الحي</option>
                                                        <option>الحي</option>
                                                        <option>الحي</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-lg-4 col-md-6 col-lg-offset-5 col-sm-12 mrg-btm col-xs-6 col-xs-offset-4">

                                                <input type="button" class="form-control btnsearch" value="ابحث هنا">

                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">

                                <form action="#" method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row mrg-btm row_cust_width_sm">
                                                <div class="col-lg-3 col-md-2 col-sm-12 ">
                                                    <select class="form-control search-slt" id="type">
                                                        <option>نوع العقار </option>
                                                        <option>نوع العقار</option>
                                                        <option>نوع العقار</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-md-2 col-sm-12">
                                                    <select class="form-control search-slt" id="type">
                                                        <option> المنطقة </option>
                                                        <option>المنطقة</option>
                                                        <option>المنطقة</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-md-2 col-sm-12">
                                                    <select class="form-control search-slt" id="city">
                                                        <option>المدينة</option>
                                                        <option>المدينة</option>
                                                        <option>المدينة</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-md-2 col-sm-12">
                                                    <select class="form-control search-slt" id="city">
                                                        <option>الحي</option>
                                                        <option>الحي</option>
                                                        <option>الحي</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-lg-4 col-md-6 col-lg-offset-5 col-sm-12 mrg-btm col-xs-6 col-xs-offset-4">

                                                <input type="button" class="form-control btnsearch" value="ابحث هنا">

                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">

                                <form action="#" method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row mrg-btm row_cust_width_sm">
                                                <div class="col-lg-3 col-md-2 col-sm-12 ">
                                                    <select class="form-control search-slt" id="type">
                                                        <option>نوع العقار </option>
                                                        <option>نوع العقار</option>
                                                        <option>نوع العقار</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-md-2 col-sm-12">
                                                    <select class="form-control search-slt" id="type">
                                                        <option> المنطقة </option>
                                                        <option>المنطقة</option>
                                                        <option>المنطقة</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-md-2 col-sm-12">
                                                    <select class="form-control search-slt" id="city">
                                                        <option>المدينة</option>
                                                        <option>المدينة</option>
                                                        <option>المدينة</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-md-2 col-sm-12">
                                                    <select class="form-control search-slt" id="city">
                                                        <option>الحي</option>
                                                        <option>الحي</option>
                                                        <option>الحي</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-lg-4 col-md-6 col-lg-offset-5 col-sm-12 mrg-btm col-xs-6 col-xs-offset-4">

                                                <input type="button" class="form-control btnsearch" value="ابحث هنا">

                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                </div>

            </section>
        </div>

        <div class="wrapper mr-sec">
            <div class="container">
                <div class="row custom_wisth_sm">
                    <div class="col-md-9  col-md-offset-3  realstate-div-content">

                        <!--Start eaqarat_mumayaza Single-->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <div class="service-aqar real-state-box real-height text-center wow animated zoomIn bottomRightShadow aqar-content"
                                     data-wow-duration="1s" data-wow-delay="0.3s">

                                    <div class="box-img img-bg box-realStateImg box-real-estates">
                                        <a href="#">
                                            <img  src="/Fronted/images/content-img/Featured_RealEstate.png"  alt="Featured Realstate"/>
                                        </a>
                                        <h6>
                                            <input type="button" class="form-control code-realstate-box2"
                                                   value="كود 501" style="float:left;margin-top: -11px;">
                                        </h6>
                                    </div><!-- .box-img end -->
                                    <div class="box-content-service-aqar box-content-realState realstate-pd">
                                        <p>شقة للبيع </p>

                                        <p><img src="/Fronted/images/content-img/Mask.png"
                                                alt="location"/>الرياض-ابها</p>

                                        <div class="realState-type">
                                            <span><img src="/Fronted/images/content-img/area.png" alt="location"/>مساحة&nbsp 120م2</span>
                                            <span><img src="/Fronted/images/content-img/bead.png" alt="location"/>نوم&nbsp 2</span>
                                            <span><img src="/Fronted/images/content-img/bath.png" alt="location"/>حمام&nbsp 1</span>
                                            <span><img src="/Fronted/images/content-img/floor.png" alt="location"/>طابق&nbsp 3</span>
                                        </div>

                                        <h6><span
                                                    class="price_span">200 ريال</span><input
                                                    type="button" class="form-control" value="التفاصيل"
                                                    onclick="window.location.href = 'property-Details.html';"
                                                    style="float:left;margin-top: -6px;margin-left: 10px;height: 35px;padding: 0px 23px;">

                                            <button title="remove from wishlist" type="button" class="form-control btn_liked btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>


                                            <button title="add to wishlist" type="button" class="form-control btn_like btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>

                                        </h6>


                                    </div><!-- .box-content end -->

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <div class="service-aqar real-state-box real-height text-center wow animated zoomIn bottomRightShadow aqar-content"
                                     data-wow-duration="1s" data-wow-delay="0.3s">

                                    <div class="box-img img-bg box-realStateImg box-real-estates">
                                        <a href="#">
                                            <img  src="/Fronted/images/content-img/Featured_RealEstate.png"  alt="Featured Realstate"/>
                                        </a>
                                        <h6>
                                            <input type="button" class="form-control code-realstate-box2"
                                                   value="كود 501" style="float:left;margin-top: -11px;">
                                        </h6>
                                    </div><!-- .box-img end -->
                                    <div class="box-content-service-aqar box-content-realState realstate-pd">
                                        <p>شقة للبيع </p>

                                        <p><img src="/Fronted/images/content-img/Mask.png"
                                                alt="location"/>الرياض-ابها</p>

                                        <div class="realState-type">
                                            <span><img src="/Fronted/images/content-img/area.png" alt="location"/>مساحة&nbsp 120م2</span>
                                            <span><img src="/Fronted/images/content-img/bead.png" alt="location"/>نوم&nbsp 2</span>
                                            <span><img src="/Fronted/images/content-img/bath.png" alt="location"/>حمام&nbsp 1</span>
                                            <span><img src="/Fronted/images/content-img/floor.png" alt="location"/>طابق&nbsp 3</span>
                                        </div>

                                        <h6><span
                                                    class="price_span">200 ريال</span><input
                                                    type="button" class="form-control" value="التفاصيل"
                                                    onclick="window.location.href = 'property-Details.html';"
                                                    style="float:left;margin-top: -6px;margin-left: 10px;height: 35px;padding: 0px 23px;">

                                            <button title="remove from wishlist" type="button" class="form-control btn_liked btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>


                                            <button title="add to wishlist" type="button" class="form-control btn_like btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>

                                        </h6>


                                    </div><!-- .box-content end -->

                                </div>
                            </div>
                        </div>

                        <!--Start eaqarat_mumayaza Single-->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <div class="service-aqar real-state-box real-height text-center wow animated zoomIn bottomRightShadow aqar-content"
                                     data-wow-duration="1s" data-wow-delay="0.3s">

                                    <div class="box-img img-bg box-realStateImg box-real-estates">
                                        <a href="#">
                                            <img  src="/Fronted/images/content-img/Featured_RealEstate.png"  alt="Featured Realstate"/>
                                        </a>
                                        <h6>
                                            <input type="button" class="form-control code-realstate-box2"
                                                   value="كود 501" style="float:left;margin-top: -11px;">
                                        </h6>
                                    </div><!-- .box-img end -->
                                    <div class="box-content-service-aqar box-content-realState realstate-pd">
                                        <p>شقة للبيع </p>

                                        <p><img src="/Fronted/images/content-img/Mask.png"
                                                alt="location"/>الرياض-ابها</p>

                                        <div class="realState-type">
                                            <span><img src="/Fronted/images/content-img/area.png" alt="location"/>مساحة&nbsp 120م2</span>
                                            <span><img src="/Fronted/images/content-img/bead.png" alt="location"/>نوم&nbsp 2</span>
                                            <span><img src="/Fronted/images/content-img/bath.png" alt="location"/>حمام&nbsp 1</span>
                                            <span><img src="/Fronted/images/content-img/floor.png" alt="location"/>طابق&nbsp 3</span>
                                        </div>

                                        <h6><span
                                                    class="price_span">200 ريال</span><input
                                                    type="button" class="form-control" value="التفاصيل"
                                                    onclick="window.location.href = 'property-Details.html';"
                                                    style="float:left;margin-top: -6px;margin-left: 10px;height: 35px;padding: 0px 23px;">

                                            <button title="remove from wishlist" type="button" class="form-control btn_liked btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>


                                            <button title="add to wishlist" type="button" class="form-control btn_like btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>

                                        </h6>


                                    </div><!-- .box-content end -->

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <div class="service-aqar real-state-box real-height text-center wow animated zoomIn bottomRightShadow aqar-content"
                                     data-wow-duration="1s" data-wow-delay="0.3s">

                                    <div class="box-img img-bg box-realStateImg box-real-estates">
                                        <a href="#">
                                            <img  src="/Fronted/images/content-img/Featured_RealEstate.png"  alt="Featured Realstate"/>
                                        </a>
                                        <h6>
                                            <input type="button" class="form-control code-realstate-box2"
                                                   value="كود 501" style="float:left;margin-top: -11px;">
                                        </h6>
                                    </div><!-- .box-img end -->
                                    <div class="box-content-service-aqar box-content-realState realstate-pd">
                                        <p>شقة للبيع </p>

                                        <p><img src="/Fronted/images/content-img/Mask.png"
                                                alt="location"/>الرياض-ابها</p>

                                        <div class="realState-type">
                                            <span><img src="/Fronted/images/content-img/area.png" alt="location"/>مساحة&nbsp 120م2</span>
                                            <span><img src="/Fronted/images/content-img/bead.png" alt="location"/>نوم&nbsp 2</span>
                                            <span><img src="/Fronted/images/content-img/bath.png" alt="location"/>حمام&nbsp 1</span>
                                            <span><img src="/Fronted/images/content-img/floor.png" alt="location"/>طابق&nbsp 3</span>
                                        </div>

                                        <h6><span
                                                    class="price_span">200 ريال</span><input
                                                    type="button" class="form-control" value="التفاصيل"
                                                    onclick="window.location.href = 'property-Details.html';"
                                                    style="float:left;margin-top: -6px;margin-left: 10px;height: 35px;padding: 0px 23px;">

                                            <button title="remove from wishlist" type="button" class="form-control btn_liked btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>


                                            <button title="add to wishlist" type="button" class="form-control btn_like btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>

                                        </h6>


                                    </div><!-- .box-content end -->

                                </div>
                            </div>
                        </div>
                        <!--End eaqarat_mumayaza Single-->
                        <!--Start eaqarat_mumayaza Single-->

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <div class="service-aqar real-state-box real-height text-center wow animated zoomIn bottomRightShadow aqar-content"
                                     data-wow-duration="1s" data-wow-delay="0.3s">

                                    <div class="box-img img-bg box-realStateImg box-real-estates">
                                        <a href="#">
                                            <img  src="/Fronted/images/content-img/Featured_RealEstate.png"  alt="Featured Realstate"/>
                                        </a>
                                        <h6>
                                            <input type="button" class="form-control code-realstate-box2"
                                                   value="كود 501" style="float:left;margin-top: -11px;">
                                        </h6>
                                    </div><!-- .box-img end -->
                                    <div class="box-content-service-aqar box-content-realState realstate-pd">
                                        <p>شقة للبيع </p>

                                        <p><img src="/Fronted/images/content-img/Mask.png"
                                                alt="location"/>الرياض-ابها</p>

                                        <div class="realState-type">
                                            <span><img src="/Fronted/images/content-img/area.png" alt="location"/>مساحة&nbsp 120م2</span>
                                            <span><img src="/Fronted/images/content-img/bead.png" alt="location"/>نوم&nbsp 2</span>
                                            <span><img src="/Fronted/images/content-img/bath.png" alt="location"/>حمام&nbsp 1</span>
                                            <span><img src="/Fronted/images/content-img/floor.png" alt="location"/>طابق&nbsp 3</span>
                                        </div>

                                        <h6><span
                                                    class="price_span">200 ريال</span><input
                                                    type="button" class="form-control" value="التفاصيل"
                                                    onclick="window.location.href = 'property-Details.html';"
                                                    style="float:left;margin-top: -6px;margin-left: 10px;height: 35px;padding: 0px 23px;">

                                            <button title="remove from wishlist" type="button" class="form-control btn_liked btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>


                                            <button title="add to wishlist" type="button" class="form-control btn_like btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>

                                        </h6>


                                    </div><!-- .box-content end -->

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <div class="service-aqar real-state-box real-height text-center wow animated zoomIn bottomRightShadow aqar-content"
                                     data-wow-duration="1s" data-wow-delay="0.3s">

                                    <div class="box-img img-bg box-realStateImg box-real-estates">
                                        <a href="#">
                                            <img  src="/Fronted/images/content-img/Featured_RealEstate.png"  alt="Featured Realstate"/>
                                        </a>
                                        <h6>
                                            <input type="button" class="form-control code-realstate-box2"
                                                   value="كود 501" style="float:left;margin-top: -11px;">
                                        </h6>
                                    </div><!-- .box-img end -->
                                    <div class="box-content-service-aqar box-content-realState realstate-pd">
                                        <p>شقة للبيع </p>

                                        <p><img src="/Fronted/images/content-img/Mask.png"
                                                alt="location"/>الرياض-ابها</p>

                                        <div class="realState-type">
                                            <span><img src="/Fronted/images/content-img/area.png" alt="location"/>مساحة&nbsp 120م2</span>
                                            <span><img src="/Fronted/images/content-img/bead.png" alt="location"/>نوم&nbsp 2</span>
                                            <span><img src="/Fronted/images/content-img/bath.png" alt="location"/>حمام&nbsp 1</span>
                                            <span><img src="/Fronted/images/content-img/floor.png" alt="location"/>طابق&nbsp 3</span>
                                        </div>

                                        <h6><span
                                                    class="price_span">200 ريال</span><input
                                                    type="button" class="form-control" value="التفاصيل"
                                                    onclick="window.location.href = 'property-Details.html';"
                                                    style="float:left;margin-top: -6px;margin-left: 10px;height: 35px;padding: 0px 23px;">

                                            <button title="remove from wishlist" type="button" class="form-control btn_liked btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>


                                            <button title="add to wishlist" type="button" class="form-control btn_like btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>

                                        </h6>


                                    </div><!-- .box-content end -->

                                </div>
                            </div>
                        </div>
                        <!--Start eaqarat_mumayaza Single-->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <div class="service-aqar real-state-box real-height text-center wow animated zoomIn bottomRightShadow aqar-content"
                                     data-wow-duration="1s" data-wow-delay="0.3s">

                                    <div class="box-img img-bg box-realStateImg box-real-estates">
                                        <a href="#">
                                            <img  src="/Fronted/images/content-img/Featured_RealEstate.png"  alt="Featured Realstate"/>
                                        </a>
                                        <h6>
                                            <input type="button" class="form-control code-realstate-box2"
                                                   value="كود 501" style="float:left;margin-top: -11px;">
                                        </h6>
                                    </div><!-- .box-img end -->
                                    <div class="box-content-service-aqar box-content-realState realstate-pd">
                                        <p>شقة للبيع </p>

                                        <p><img src="/Fronted/images/content-img/Mask.png"
                                                alt="location"/>الرياض-ابها</p>

                                        <div class="realState-type">
                                            <span><img src="/Fronted/images/content-img/area.png" alt="location"/>مساحة&nbsp 120م2</span>
                                            <span><img src="/Fronted/images/content-img/bead.png" alt="location"/>نوم&nbsp 2</span>
                                            <span><img src="/Fronted/images/content-img/bath.png" alt="location"/>حمام&nbsp 1</span>
                                            <span><img src="/Fronted/images/content-img/floor.png" alt="location"/>طابق&nbsp 3</span>
                                        </div>

                                        <h6><span
                                                    class="price_span">200 ريال</span><input
                                                    type="button" class="form-control" value="التفاصيل"
                                                    onclick="window.location.href = 'property-Details.html';"
                                                    style="float:left;margin-top: -6px;margin-left: 10px;height: 35px;padding: 0px 23px;">

                                            <button title="remove from wishlist" type="button" class="form-control btn_liked btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>


                                            <button title="add to wishlist" type="button" class="form-control btn_like btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>

                                        </h6>


                                    </div><!-- .box-content end -->

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <div class="service-aqar real-state-box real-height text-center wow animated zoomIn bottomRightShadow aqar-content"
                                     data-wow-duration="1s" data-wow-delay="0.3s">

                                    <div class="box-img img-bg box-realStateImg box-real-estates">
                                        <a href="#">
                                            <img  src="/Fronted/images/content-img/Featured_RealEstate.png"  alt="Featured Realstate"/>
                                        </a>
                                        <h6>
                                            <input type="button" class="form-control code-realstate-box2"
                                                   value="كود 501" style="float:left;margin-top: -11px;">
                                        </h6>
                                    </div><!-- .box-img end -->
                                    <div class="box-content-service-aqar box-content-realState realstate-pd">
                                        <p>شقة للبيع </p>

                                        <p><img src="/Fronted/images/content-img/Mask.png"
                                                alt="location"/>الرياض-ابها</p>

                                        <div class="realState-type">
                                            <span><img src="/Fronted/images/content-img/area.png" alt="location"/>مساحة&nbsp 120م2</span>
                                            <span><img src="/Fronted/images/content-img/bead.png" alt="location"/>نوم&nbsp 2</span>
                                            <span><img src="/Fronted/images/content-img/bath.png" alt="location"/>حمام&nbsp 1</span>
                                            <span><img src="/Fronted/images/content-img/floor.png" alt="location"/>طابق&nbsp 3</span>
                                        </div>

                                        <h6><span
                                                    class="price_span">200 ريال</span><input
                                                    type="button" class="form-control" value="التفاصيل"
                                                    onclick="window.location.href = 'property-Details.html';"
                                                    style="float:left;margin-top: -6px;margin-left: 10px;height: 35px;padding: 0px 23px;">

                                            <button title="remove from wishlist" type="button" class="form-control btn_liked btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>


                                            <button title="add to wishlist" type="button" class="form-control btn_like btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>

                                        </h6>


                                    </div><!-- .box-content end -->

                                </div>
                            </div>
                        </div>
                        <!--Start eaqarat_mumayaza Single-->
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <div class="service-aqar real-state-box real-height text-center wow animated zoomIn bottomRightShadow aqar-content"
                                     data-wow-duration="1s" data-wow-delay="0.3s">

                                    <div class="box-img img-bg box-realStateImg box-real-estates">
                                        <a href="#">
                                            <img  src="/Fronted/images/content-img/Featured_RealEstate.png"  alt="Featured Realstate"/>
                                        </a>
                                        <h6>
                                            <input type="button" class="form-control code-realstate-box2"
                                                   value="كود 501" style="float:left;margin-top: -11px;">
                                        </h6>
                                    </div><!-- .box-img end -->
                                    <div class="box-content-service-aqar box-content-realState realstate-pd">
                                        <p>شقة للبيع </p>

                                        <p><img src="/Fronted/images/content-img/Mask.png"
                                                alt="location"/>الرياض-ابها</p>

                                        <div class="realState-type">
                                            <span><img src="/Fronted/images/content-img/area.png" alt="location"/>مساحة&nbsp 120م2</span>
                                            <span><img src="/Fronted/images/content-img/bead.png" alt="location"/>نوم&nbsp 2</span>
                                            <span><img src="/Fronted/images/content-img/bath.png" alt="location"/>حمام&nbsp 1</span>
                                            <span><img src="/Fronted/images/content-img/floor.png" alt="location"/>طابق&nbsp 3</span>
                                        </div>

                                        <h6><span
                                                    class="price_span">200 ريال</span><input
                                                    type="button" class="form-control" value="التفاصيل"
                                                    onclick="window.location.href = 'property-Details.html';"
                                                    style="float:left;margin-top: -6px;margin-left: 10px;height: 35px;padding: 0px 23px;">

                                            <button title="remove from wishlist" type="button" class="form-control btn_liked btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>


                                            <button title="add to wishlist" type="button" class="form-control btn_like btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>

                                        </h6>


                                    </div><!-- .box-content end -->

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <div class="service-aqar real-state-box real-height text-center wow animated zoomIn bottomRightShadow aqar-content"
                                     data-wow-duration="1s" data-wow-delay="0.3s">

                                    <div class="box-img img-bg box-realStateImg box-real-estates">
                                        <a href="#">
                                            <img  src="/Fronted/images/content-img/Featured_RealEstate.png"  alt="Featured Realstate"/>
                                        </a>
                                        <h6>
                                            <input type="button" class="form-control code-realstate-box2"
                                                   value="كود 501" style="float:left;margin-top: -11px;">
                                        </h6>
                                    </div><!-- .box-img end -->
                                    <div class="box-content-service-aqar box-content-realState realstate-pd">
                                        <p>شقة للبيع </p>

                                        <p><img src="/Fronted/images/content-img/Mask.png"
                                                alt="location"/>الرياض-ابها</p>

                                        <div class="realState-type">
                                            <span><img src="/Fronted/images/content-img/area.png" alt="location"/>مساحة&nbsp 120م2</span>
                                            <span><img src="/Fronted/images/content-img/bead.png" alt="location"/>نوم&nbsp 2</span>
                                            <span><img src="/Fronted/images/content-img/bath.png" alt="location"/>حمام&nbsp 1</span>
                                            <span><img src="/Fronted/images/content-img/floor.png" alt="location"/>طابق&nbsp 3</span>
                                        </div>

                                        <h6><span
                                                    class="price_span">200 ريال</span><input
                                                    type="button" class="form-control" value="التفاصيل"
                                                    onclick="window.location.href = 'property-Details.html';"
                                                    style="float:left;margin-top: -6px;margin-left: 10px;height: 35px;padding: 0px 23px;">

                                            <button title="remove from wishlist" type="button" class="form-control btn_liked btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>


                                            <button title="add to wishlist" type="button" class="form-control btn_like btn_icon"
                                                    value="">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </button>

                                        </h6>


                                    </div><!-- .box-content end -->

                                </div>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                        <nav aria-label="Page navigation example">
                            <ul class="pagination col-md-5 col-lg-5 col-md-offset-7 col-xs-7 col-lg-offset-7 col-xs-offset-3">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>

        </div>


    </section><!-- #content end -->

@endsection