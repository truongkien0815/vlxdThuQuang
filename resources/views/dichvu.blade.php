<meta name="keywords" content="{{$type->keywords}}">
<meta name="description" content="{{$type->description}}">
<title> {{$type->title}}</title>

@extends('layout')
@section('content')



<div class="container-fluid" style="padding: 0 100px 0 100px;">


    <div class="img-all-sp">
        
        <div class="row" style="padding-top: 30px;">
        <div class="category" style="margin-left: 1%;    padding-bottom: 15px;">
                    <span title="Cổng trượt tự động">
                        {{ $type->type_name}}
                    </span>


                </div>
                <span style="margin-left:1%; color: #00AEEF;"><a href="{{url('/')}}">Trang Chủ</a> / <a 
                    style="font-weight:700;"> {{ $type->type_name}}</a> </span>

            <div class="col-md-9">
              
            <style>
            .categorywallandfile8_meta {
                margin-left: 1%;
                color: #1a7ed3;
                font-weight: 700;
                font-size: 1.5em;
                margin-bottom: 10px;

            }

            /* span {
                color: #00AEEF;
            } */

            span>a {
                text-decoration: none;
                color: #00aeef;
            }
            </style>
                <div class="categorywallandfile8_meta">

                </div>

                @foreach($product as $item)

                <div class="sanpham">
                    <div class="ct8bd">
                        <div class="image">
                            <a style="	font-size: 0px;" title=" {{ $item->product_name }}"
                                href="{{asset('product/'. $item->slug)}}"><img title=" {{ $item->product_name }}"
                                    style="width: 100%;height: 250px; display: inline;" class="lazy"
                                    data-original="https://hethongcongtudong.com/image/cache/data/V2/v2 aros/IMG_3805-200x200.jpg"
                                    alt="báo chống trộm" data-src="{{asset('fe/img/'. $item->product_image)}}"></a>
                        </div>
                        <div class="tensp">
                            <a title=" {{ $item->product_name }}"
                                href="{{asset('product/'. $item->slug)}}">


                                {{ $item->product_name }}
                            </a>
                            
                <p>  <strong class="price"><?php  echo number_format($item->price , 0, '', ','); ?> ₫</strong></p>
                        </div>
                      
                    </div>


                </div>
                @endforeach









            </div>
            <div class="col-md-3 danhmuc_lon">

                <div class="danhmuc">



                    <div class="list-type">
                        <ul id="ul_meme" style="margin-top: 15px;">
                            <li style="float:none" id="ul_menu"><b>DANH MỤC SẢN PHẨM</b></li>
                            @foreach($types as $item)
                            <li> <a href="{{url('type/'.$item->slug)}}"><i style="font-size:1rem" class="fa-solid fa-angle-right"></i>
                                    {{$item->type_name}}</a>
                            </li>
                            @endforeach






                        </ul>
                    </div>





                </div>
            </div>
        </div>
    </div>


</div>


@endsection