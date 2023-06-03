<meta name="keywords" content="{{$product_detailt->keyword}}">
<meta name="description" content="{{$product_detailt->description}}">
<title> {{$product_detailt->title}}</title>

@extends('layout')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>



<!-- new -->




<div class="container-fluid" style="padding: 0px 100px 0px 100px;">




<style>
    .img-all-sp>.row>.col-md-9 {
    border-left: none;
    border-top: none;
}
</style>



    <div class="img-all-sp">
        <div class="row" style="padding-top: 30px;">

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <!-- <img width="100%" src="https://vlxdmanhtai.com/wp-content/uploads/2023/03/gach-khong-nung.jpg"
                            alt=""> -->
                        <section class="product-page">
                            <div class="img-display">
                                <span class="zoom">

                                    <img src="{{ asset('fe/img/'.$product_detailt->product_image)}}" width="100%" alt="">
                                </span>
                            </div>
                            <div class="thumbnails">
                                <div class="thumb active">
                                    <a href="{{ asset('fe/img/'.$product_detailt->product_image)}}">
                                        <img id="img_thumb" src="{{ asset('fe/img/'.$product_detailt->product_image)}}"
                                            alt="Chưa có ảnh">
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="{{ asset('fe/img/'.$product_detailt->product_image1)}}">
                                        <img id="img_thumb" src="{{ asset('fe/img/'.$product_detailt->product_image1)}}"
                                            alt="Chưa có ảnh">
                                    </a>
                                </div>

                                <div class="thumb">
                                    <a href="{{ asset('fe/img/'.$product_detailt->product_image2)}}">
                                        <img id="img_thumb" src="{{ asset('fe/img/'.$product_detailt->product_image2)}}"
                                            alt="Chưa có ảnh">
                                    </a>
                                </div>
                            </div>

                        </section>
                    </div>
                    <div class="col-md-6">
                        <b style="text-transform: capitalize;
                                         font-size: 24px;
                                         color: #02185a;
                           font-weight: 700;"> {!! $product_detailt->product_name!!}</b>
                        <br>
                        {!!$product_detailt->description!!}

                        <!-- noi dung -->
                        <br>

                        <p> <strong class="price"><?php  echo number_format($product_detailt->price , 0, '', ','); ?> ₫</strong>
                        </p>
                        <style>
                        #lienhe_nhe li {
                            margin-right: 10px;
                            width: 180px;
                        }

                        #lienhe_nhe li a {
                            color: #fff;
                            font-size: .97em;
                            font-weight: 700;
                        }
                        </style>
                        <ul id="lienhe_nhe">
                            <li>
                                <div class="btn" style="    padding-top: 10px;font-size: 1rem;
                                padding-bottom: 10px;border-radius:10px; background:#ec1d27;   width: 100%;padding-left: 17px;
                                            padding-right: 20px;"><a href="tel: 0918650782">
                                        <i class="fa-solid fa-phone text-white"></i>
                                        0918 650 782
                                    </a>

                                </div>

                            </li>
                            <li>
                                <div class="btn btn-primary" style="    padding-top: 10px;font-size: 1rem;
                                    padding-bottom: 10px;border-radius:10px;    width: 100%;"><a
                                        href="https://zalo.me/0918650782">

                                        Chat Zalo
                                    </a>

                                </div>

                            </li>
                        </ul>
                        <div class="anco">
                            <ul>
                                <li><img style="background:#00cdf9;    margin: 10px;"
                                        src="https://vlxdmanhtai.com/wp-content/uploads/2022/06/icon-phone.png.webp"
                                        alt=""></li>
                                <li style="    display: contents;font-size: 1.3rem;">
                                    Hãy để lại SĐT, chuyên viên tư vấn của chúng tôi sẽ gọi ngay cho bạn miễn phí!</li>
                            </ul>
                            <form name="frmContact" id="frmContact" method="post" action="{{url('lienhe_sdt')}}"
                                enctype="multipart/form-data">
                                @csrf

                                <input id="input_mmail" required type="tel" name="sdt" id="" value="">
                                <button id="buttton_mail" type="submit">GỬI</button>

                            </form>
                        </div>
                        <!--  -->
                    </div>
                </div>
                <div class="w3-bar w3-black">
                    <button class="w3-bar-item w3-button" onclick="openCity('London')"><b>THÔNG TIN CHI
                            TIẾT</b></button>
                    <!-- <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Paris</button>
                       <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">Tokyo</button> -->
                </div>
                <div id="London" class="city" style="    padding: 35px;
                    border: 1px #e0e0e0 solid;
                     margin-bottom: 35px;">
                    {!!$product_detailt->thongso!!}
                </div>

                <div id="Paris" class="city" style="display:none">
                    <h2>Paris</h2>
                    <p>Paris is the capital of France.</p>
                </div>

                <div id="Tokyo" class="city" style="display:none">
                    <h2>Tokyo</h2>
                    <p>Tokyo is the capital of Japan.</p>
                </div>


                <div class="sp-cungloai p-2">
                    <h4> Sản phẩm cùng loại</h4>
                </div>
            
                <div class="d-cungloai" style="border-left: 1px solid #d0c5c5;
                         border-top: 1px solid #d0c5c5;">
                    @foreach($productcungloai as $item)
                    <div class="sanpham">
                        <div class="ct8bd">
                            <div class="image">
                                <a style="	font-size: 0px;" title="  {{ $item->product_name}}"
                                    href="{{asset('product/'. $item->slug)}}"><img title="  {{ $item->product_name}}"
                                        style="width: 100%;height: 250px; display: inline;" class="lazy"
                                        alt="  {{ $item->product_name}}"
                                        data-src="{{asset('fe/img/'.$item->product_image)}}"></a>
                            </div>
                            <div class="tensp"><a title="  {{ $item->product_name}}"
                                    href="{{asset('product/'. $item->slug)}}">


                                    {{ $item->product_name}}</a>

                            </div>
                        </div>


                    </div>
                    @endforeach
                </div>

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



            <style>
            img {
                display: block;
                height: auto;
                max-width: 100%;
            }

            .thumbnails {
                display: flex;
            }

            .product-page {
                /* display: flex; */

            }

            .img-display {
                flex-grow: 1;
                max-width: 100%;
            }

            .thumb {
                opacity: .7;
                margin: 0 .25rem .25rem 0;
                width: 120px;
                transition: opacity .25s ease-out;
            }

            .thumb:hover,
            .thumb.active {
                opacity: 1;
            }

            .zoom {
                display: inline-block;
            }
            </style>











        </div>
    </div>





</div>



<script>
$('#zoom_01').elevateZoom({
    zoomType: "inner",
    cursor: "crosshair",
    zoomWindowFadeIn: 500,
    zoomWindowFadeOut: 750
});

$("#zoom_02").elevateZoom({
    tint: true,
    tintColour: '#F90',
    tintOpacity: 0.5
});
$("#zoom_10").elevateZoom({
    easing: true
});
</script>
<script>
$(function() {
    $('.zoom').zoom();
    $('.thumb').on('click', 'a', function(e) {
        e.preventDefault();
        var thumb = $(e.delegateTarget);
        if (!thumb.hasClass('active')) {
            thumb.addClass('active').siblings().removeClass('active');
            $('.zoom')
                .zoom({
                    url: this.href
                })
                .find('img').attr('src', this.href);
        }
    });
});
</script>
</style>
<script>
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(cityName).style.display = "block";
}
</script>

<style>
.w3-button {
    border-color: transparent;
    width: auto;
    font-size: 110%;
    color: #fff !important;
    background-color: #00aeef;
    padding: 7px 15px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

#img_thumb {
    height: 150px;
}

.product-page {
    margin-bottom: 35px;
}
</style>
@endsection