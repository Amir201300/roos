@php
    $orders=\App\Models\Order::take(7)->orderBy('id','desc')->get();
    $users=\App\Models\User::take(7)->orderBy('id','desc')->get();
@endphp
<div class="row">
    <!-- column -->
    <div class="col-sm-12 col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">اخر الطلبات</h4>
                <div class="feed-widget scrollable" style="height:450px;">
                    <ul class="list-style-none feed-body m-0 p-b-20">
                        @foreach($orders as $row)
                        <li class="feed-item">
                            <div class="feed-icon">
                                <img src="{{getImageUrl('Stores',$row->store ? $row->store->icon : null)}}" width="30" height="30">
                            </div>
                            <a title="تفاصيل الطلب" href="/manage/Order/orderInfo/{{$row->id}}" target="_blank">{{$row->client->name}}</a>
                            <span class="ml-auto font-12 text-muted">{{ $row->created_at->format('d M') }}</span>
                        </li>
                            @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
    <div class="col-sm-12 col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">اخر الاعضاء المسجلين</h4>
                <div class="feed-widget scrollable" style="height:450px;">
                    <ul class="list-style-none feed-body m-0 p-b-20">
                        @foreach($users as $row)
                            <li class="feed-item">
                                <div class="feed-icon">
                                    <img src="{{getImageUrl('users',$row->image)}}" width="30" height="30">
                                </div>
                                <a style=" cursor: pointer" onclick="UserInfo('{{$row->id}}')">{{$row->name}}.</a>
                                <span class="ml-auto font-12 text-muted">{{ $row->created_at->format('d M') }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
