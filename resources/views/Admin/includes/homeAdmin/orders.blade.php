@php
$orders=\App\Models\Order::orderBy('id','desc')->take(7)->get();
@endphp
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <div class="d-md-flex align-items-center">
                    <div>
                        <h4 class="card-title">اخر الطلبات</h4>
                        <h5 class="card-subtitle">اخر الطلبات للمتجر</h5>
                    </div>

                </div>
                <!-- title -->
            </div>
            <div class="table-responsive">
                <table class="table v-middle">
                    <thead>
                    <tr class="bg-light">
                        <th class="border-top-0">العميل</th>
                        <th class="border-top-0">عدد المنتجات</th>
                        <th class="border-top-0">السعر الكلي</th>
                        <th class="border-top-0">سعر التوصيل</th>
                        <th class="border-top-0">الخصم</th>
                        <th class="border-top-0">تاريخ الطلب</th>
                        <th class="border-top-0">حالة الطلب</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $row)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="m-r-10">
                                    <a class="btn btn-circle btn-{{getOrderStatus($row->status)[1]}} text-white">{{$row->id}}</a>
                                </div>
                                <div class="">
                                    <h4 class="m-b-0 font-16">{{$row->user->firstName . ' ' . $row->user->lastName}}</h4>
                                </div>
                            </div>
                        </td>
                        <td>{{$row->products->count()}}</td>
                        <td>{{$row->total_price}}</td>

                        <td>{{$row->shipping_price}}</td>
                        <td>{{$row->discount_price}}</td>
                        <td>
                            <h5 class="m-b-0">{{$row->created_at}}</h5>
                        </td>
                        <td>
                            <label class="label label-{{getOrderStatus($row->status)[1]}} ">{{getOrderStatus($row->status)[0]}} </label>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
