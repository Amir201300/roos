<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="card-body">
                        <h4 class="card-title">تعليقات الاعضاء</h4>
                        <h2 class="font-medium m-t-40 m-b-0">{{getRate(4)[0]}}</h2>
                        <span class="text-muted">{{getRate(5)[0]}} تعليق هذا الشهر</span>
                        <div class="image-box m-t-30 m-b-30">
                            @foreach(lastUserRate() as $row)
                            <a style=" cursor: pointer" onclick="UserInfo('{{$row->id}}')" class="m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{$row->name}}">
                                <img src="{{getImageUrl('Users',$row->image)}}" class="rounded-circle" width="45" alt="user">
                            </a>
                                @endforeach

                        </div>
                        <a href="{{route('User.index')}}" class="btn btn-lg btn-info waves-effect waves-light">رؤية جميع الاعضاء</a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6 border-left">
                    <div class="card-body">
                        <ul class="list-style-none">
                            <li class="m-t-30">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-emoticon-happy display-5 text-muted"></i>
                                    <div class="m-l-10">
                                        <h5 class="m-b-0">التعليقات الايجابية</h5>
                                        <span class="text-muted">{{getRate(1)[0]}} تعليق</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{getRate(1)[1]}}%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="m-t-40">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-emoticon-sad display-5 text-muted"></i>
                                    <div class="m-l-10">
                                        <h5 class="m-b-0">التعليقات السلبية</h5>
                                        <span class="text-muted">{{getRate(2)[0]}} تعليق </span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" role="progressbar" style="width: {{getRate(2)[1]}}%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="m-t-40 m-b-40">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-emoticon-neutral display-5 text-muted"></i>
                                    <div class="m-l-10">
                                        <h5 class="m-b-0">التعليقات العادية</h5>
                                        <span class="text-muted">{{getRate(3)[0]}} تعليق </span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: {{getRate(3)[1]}}%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card earning-widget">
            <div class="card-body">
                <h4 class="m-b-0">اكثر المنتجات طلبا</h4>
            </div>
            <div class="border-top scrollable" style="height:365px;">
                <table class="table v-middle no-border">
                    <tbody>
                    @php
                    $products=\App\Models\Product::withCount('orders')->orderBy('orders_count','desc')->take(5)->get();
                    @endphp
                    @foreach($products as $row)
                        @php
                        $array=['info','success','danger','megna'];
                        $k=array_rand($array,1);
                        @endphp
                    <tr>
                        <td>
                            <img src="{{getImageUrl('Products',$row->icon)}}" width="50" class="rounded-circle" alt="logo">
                        </td>
                        <td>{{$row->name_ar}}</td>
                        <td align="right">
                            <span class="label label-{{$array[$k]}}">{{$row->orders->count()}} طلب</span>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
