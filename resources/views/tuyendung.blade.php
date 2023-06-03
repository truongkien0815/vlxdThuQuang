<title>Tuyển dụng</title>
@extends('layout')
@section('content')

<div class="container-fluid">
    <div class="list">
        <div class="row p-3">
         
            <div class="col-md-3 danhmuc_lon">

                <div class="danhmuc">



                    <div class="list-type">
                        <ul style="margin-top: 15px;">
                            <li id="ul_menu"><b>DANH MỤC SẢN PHẨM</b></li>
                            @foreach($types as $item)
                            <li><a href="{{url('type/'.$item->slug)}}">{{ $item->type_name}}</a></li>
                            <ul>
                                @if($item->slug == 'Lap-cay')
                                @foreach($manu as $tem)
                                <li><a href="{{url('type_item/'.$tem->item_id)}}">{{$tem->name }}</a></li>
                                @endforeach
                                @endif
                            </ul>


                            @endforeach
                        </ul>
                    </div>

                    <ul>
                        <li id="ul_menu"><b>SẢN PHẨM MỚI </b></li>
                        <div class="post-list">
                            @foreach($product_new as $item)
                            <li>
                                <div class="post-new">
                                    <ul>
                                        <li><a href="{{ url('product/'.$item->slug)}}"><img
                                                    src="{{ asset('fe/img/'.$item->product_image)}}" width="80px"
                                                    height="80px" alt=""></a></li>
                                        <li style="display:contents "><a
                                                href="{{ url('product/'.$item->slug)}}">{{ $item->product_name}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @endforeach

                        </div>


                    </ul>

                    <ul>
                        <li id="ul_menu"><b>BÀI VIẾT MỚI</b></li>
                        <div class="post-list">
                            @foreach($post_tintuc as $item)
                            <li>
                                <div class="post-new">
                                    <ul>
                                        <li> <a href="{{url('post/'.$item->slug)}}"><img
                                        class="lazy" data-src="{{ asset('fe/img/'.$item->hinhanh)}}" width="80px"
                                                    height="auto" alt=""></a></li>
                                        <li style="display:contents "> <a
                                                href="{{url('post/'.$item->slug)}}">{{$item->tieude}}</a></li>
                                    </ul>
                                </div>
                            </li>
                            @endforeach

                        </div>
                    </ul>


                </div>
            </div>
            <div class="col-md-9">
                <div class="category">
                    <a title=" Tuyển dụng" href="">
                        Tuyển dụng </a>


                </div>
                <div class="noidung-new" style="margin-top:15px">
                    @foreach($post as $new)
                    <h1>{{$new->tieude}}</h1>

                    {!!$new->noidung!!}
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>


@endsection