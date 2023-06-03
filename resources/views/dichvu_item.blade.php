

<title> {{$type->name}}</title>
@extends('layout')
@section('content')




<div class="container-fluid" style="padding: 0 100px 0 100px;">


    <div class="img-all-sp">
        
        <div class="row" style="padding-top: 30px;">
   
         

            <div class="col-md-9">
                <div class="category">
                    <a title="  {{$type->name}}" >
                   {{$type->name}}
                    </a>


                </div>
                <div class="categorywallandfile8_meta">
                    <!-- Hùng Thịnh cung cấp nhiều mẫu mô tơ có động cơ theo yêu cầu
                    khách hàng.
                    Báo giá mô tơ cổng lùa tự động Ý, Đức, Malaysia, Đài Loan chính hãng. -->
                </div>

                @foreach($product as $item)
              
                <div class="sanpham">
                    <div class="ct8bd">
                        <div class="image">
                            <a style="	font-size: 0px;" title="báo chống trộm"
                                href="{{asset('product/'. $item->slug)}}"><img title=" {{ $item->product_name }}"
                                    style="width: 100%;height: 240px; display: inline;" class="lazy"
                                    data-original="https://hethongcongtudong.com/image/cache/data/V2/v2 aros/IMG_3805-200x200.jpg"
                                    alt="báo chống trộm" data-src="{{asset('fe/img/'. $item->product_image)}}"></a>
                        </div>
                        <div class="tensp"><a title=" {{ $item->product_name }}" href="{{asset('product/'. $item->slug)}}">


                                {{ $item->product_name }}</a>

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
                            <li> <a href="{{url('type/'.$item->slug)}}"><i style="font-size:1rem"
                                        class="fa-solid fa-angle-right"></i>
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