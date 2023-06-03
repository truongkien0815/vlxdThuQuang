<title>Sản phẩm</title>
@extends('layout')
@section('content')


@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
<div class="container-fluid" id="conaine_created" style="padding: 0 100 0 100;">


    <div class="img-all-sp">
        <div class="row" style="padding-top: 30px;">


            <div class="categorywallandfile8_meta">Sản Phẩm VLXD THU QUANG</div>
            <span style="margin-left:1%"><a href="{{url('/')}}">Trang Chủ</a> / <a href="{{url('sanpham')}}"
                    style="font-weight:700;">Sản Phẩm VLXD THU QUANG</a> </span>
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



            <div class="col-md-9" style="margin-top: 15px;">


                @foreach($product as $item)
                <div class="sanpham">
                    <div class="ct8bd">
                        <div class="image">
                            <a style="	font-size: 0px;" title="báo chống trộm"
                                href="{{url('product/'. $item->slug)}}"><img title="báo chống trộm"
                                    style="width: 100%;height: 250px; display: inline;"
                                    data-original="https://hethongcongtudong.com/image/cache/data/V2/v2 aros/IMG_3805-200x200.jpg"
                                    alt="báo chống trộm" src="{{asset('fe/img/'. $item->product_image)}}"></a>
                        </div>
                        <div class="tensp"><a title="báo chống trộm" href="{{url('product/'. $item->slug)}}">


                                {{ $item->product_name }}</a>
                                <p>  <strong class="price"><?php  echo number_format($item->price , 0, '', ','); ?> ₫</strong></p>
                        </div>
                    </div>


                </div>
                @endforeach
                {{ $product->onEachSide(1)->links()   }}
                <style>
                    
                .page-link {
                    font-size: 1.1em;
                    display: block;
                    height: 2.25em;
                    line-height: 2em;
                    text-align: center;
                    width: auto;
                    min-width: 2.25em;
                    padding: 0 7px;
                    font-weight: bolder;
                    border-radius: 99px;
                    border: 2px solid black;
                    -webkit-transition: all .3s;
                    -o-transition: all .3s;
                    transition: all .3s;
                    vertical-align: top;

                }
                </style>








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