<div class="card-group">
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-danger">
                                        <i class="ti-clipboard text-white"></i>
                                    </span>
                </div>
                <div>
                    عدد الطلبات
                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">{{\App\Models\Order::count()}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg btn-info">
                                        <i class="ti-wallet text-white"></i>
                                    </span>
                </div>
                <div>
                    السعر الكلي للطلبات

                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">{{\App\Models\Order::sum('total_price')}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-success">
                                        <i class="ti-shopping-cart text-white"></i>
                                    </span>
                </div>
                <div>
                    عدد المنتجات

                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">{{\App\Models\Product::count()}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-warning">
                                        <i class="fa fa-user text-white"></i>
                                    </span>
                </div>
                <div>
                    عدد الاعضاء

                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">{{\App\Models\User::count()}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Column -->


</div>
