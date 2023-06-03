@extends('layout')
@section('content')



<div class="container-fluid"  style="padding: 0px 100px 0px 100px;">


    <div class="img-all-sp">
        
        <div class="row" style="padding-top: 30px;">
        <div class="category" style="padding-bottom: 30px;">
                    <a title=" Kết quả tìm kiếm" href="">
                        Kết quả tìm kiếm: "{{$key}}"</a>


                </div>
         
            <div class="col-md-9">
               
              

                @foreach($product as $item)
               
                <div class="sanpham">
                    <div class="ct8bd">
                        <div class="image">
                            <a style="	font-size: 0px;" title="báo chống trộm"
                                href="{{asset('product/'. $item->slug)}}"><img title="báo chống trộm"
                                    style="width: 100%;height: 250px; display: inline;" 
                                    data-original="https://hethongcongtudong.com/image/cache/data/V2/v2 aros/IMG_3805-200x200.jpg"
                                    alt="báo chống trộm" src="{{asset('fe/img/'. $item->product_image)}}"></a>
                        </div>
                        <div class="tensp"><a title="báo chống trộm" href="{{asset('product/'. $item->slug)}}">


                                {{ $item->product_name }}</a>
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
            <li> <a href="{{url('type/'.$item->slug)}}"><i class="fa-solid fa-angle-right"></i>
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