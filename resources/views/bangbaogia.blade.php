<title>Bảng báo giá</title>

<meta name="Keywords" content="Bảng báo giá" />
<meta name="Description" content="Bảng báo giá" />


@extends('layout')
@section('content')

<style>
    .img-all-sp>.row>.col-md-9{
    border-left: none;
    border-top: none;
}
    .sanpham{
    border-bottom: none;
    border-right: none;
}
</style>
<style>
     @media only screen and (max-width:800px) 
             {
                .sanpham{
        text-align: left !important;
    }
                .sanpham{
                    width: 100%;
                }
                .sanpham>.ct8bd>.image>a>img{
                    width: 100%;
    
   
                    object-fit: cover;
                }
                #conaine_created{
                    padding-right:15px !important;
                }
             }
</style>
<!--  -->

<div class="container-fluid" id="conaine_created" style="padding: 0 100 0 100;">


    <div class="row">
        <div class="large-12 text-center col">
            <h1 class="page-title is-large uppercase"
                style=" font-weight: 700;   font-size: 1.45rem;font-family: ui-serif;    padding-top: 30px;">
                <span style="color:#1a7ed3;">Bảng Báo Giá VLXD</span>
            </h1>
        </div>
    </div>





    <div class="img-all-sp">
        <div class="row" style="padding-top: 30px;">

            <div class="col-md-9">
                @foreach($post as $new)
                <div class="sanpham">
                    <div class="ct8bd">
                        <div class="image">
                            <a style="	font-size: 0px;" title="  {{ $new->tieude }}"
                                href="{{url('post/'.$new->slug)}}"><img title="  {{ $new->tieude }}"
                                    style="width: 100%;height: 250px; display: inline;"
                                    data-original="https://hethongcongtudong.com/image/cache/data/V2/v2 aros/IMG_3805-200x200.jpg"
                                    alt="  {{ $new->tieude }}"
                                    src="{{asset('fe/img/'.$new->hinhanh)}}"></a>
                        </div>
                        <div class="tensp" style="    text-align: left;font-weight:600;"><a title="  {{ $new->tieude }}" href="{{url('post/'.$new->slug)}}">


                                {{ $new->tieude }}</a>

                        </div>
                        <style>
                        .noidung {
                            display: contents
                        }
                        </style>
                        <div class="noidung" style="text-align: left;">


                            <?php
                                                                       $txt2 =  $new->noidung;
                                                                  echo  substr($txt2, 0, 100) . '...'; ?>  </div>





                        </div>
                    </div>


                </div>
                @endforeach
                {{ $post->onEachSide(1)->links()   }}
                <style>
                .pagination {
                    padding-top: 150px;
                 
                }

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