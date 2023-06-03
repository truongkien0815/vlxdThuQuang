@extends('layout')
@section('content')
<meta name="keywords" content="{{$proty->keywords}}">
<meta name="description" content="{{$proty->description}}">
<title>
    {{$proty->title}}
</title>

<div class="container-fluid" style="position: relative; bottom: 10px;">
    <div class="list-sp row">
        <div class="col-md-3">
            <div class="left-titl"><img width="300px" src="{{asset('fe/img/left_titl.png')}}" alt=""></div>
            <div class="thongtin" style="width: 300px;border: 1px solid #bebebe; height: 300px;">
                <div class="image-nhan">
                    <img src="{{asset('fe/img/supp.png')}}" alt="">
                    <img src="{{asset('fe/img/hotline.png')}}" alt="">
                </div>
                <br>
                <br><br><br>
                @foreach($phone as $p)
                {!!$p->sdt!!}
                @endforeach



            </div>

            <div class="left-titl2"><img width="300px" src="{{asset('fe/img/left_titl.png')}}" alt=""></div>
            <div class="thongtin" style="width: 300px;border: 1px solid #bebebe; height: 300px;">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner gg" style="position: relative;">
                        <div class="carousel-item active">
                            <img height="280px" width="100%" src="{{asset('fe/img/may-nen-bt-xiyi-7950.jpg')}}"
                                class="d-block w-100" alt="...">

                        </div>
                        @foreach($product as $item)
                        <div class="carousel-item">
                            <a href="{{ url('product/'.$item->tenkhongdau)}}">
                                <img height="280px" width="100%" src="{{ asset('fe/img/'.$item->product_image)}}"
                                    class="d-block w-100" alt="...">
                            </a>
                        </div>
                        @endforeach

                    </div>

                </div>
                <div class="image-nhan">

                </div>


            </div>
            <div class="left-titl3"><img width="300px" src="{{asset('fe/img/left_titl.png')}}" alt=""></div>
            <form
                action="{{url('http://www.xaydung.gov.vn/vn/Pages/thongbaoloi.aspx?aspxerrorpath=/vn/pages/thongbaoloi.aspx')}}">
                <select onchange="this.form.submit()" id="chucnang" name="chucnangc"
                    style="width: 300px; height: 40px; border: 1px solid #bebebe;">

                    <!-- <option value="{{url('http://www.xaydung.gov.vn/vn/Pages/thongbaoloi.aspx?aspxerrorpath=/vn/pages/thongbaoloi.aspx')}}">Liên kết website</option> -->
                    <option
                        value="{{url('http://www.xaydung.gov.vn/vn/Pages/thongbaoloi.aspx?aspxerrorpath=/vn/pages/thongbaoloi.aspx')}}">
                        Bộ Xây dựng</option>


                    <option
                        value="{{url('http://www.xaydung.gov.vn/vn/Pages/thongbaoloi.aspx?aspxerrorpath=/vn/pages/thongbaoloi.aspx')}}">
                        Kiểm định xây dựng</option>
                    <!-- <option value="gtvt">Bộ GTVT</option>
              <option value="xd">Bộ Xây dựng</option> -->

                </select>
            </form>
            <!-- <div class="thongtin" style="width: 300px;border: 1px solid #bebebe; height: 300px;">


            </div> -->

            <div class="left-titl4"><img width="300px;" src="{{asset('fe/img/left_titl.png')}}" alt=""></div>
            <div class="sos" style=" width:300px; border: 1px #bebebe solid; ">
                <p>
                    <img src="{{asset('fe/logo/icon1.png')}}"> Truy cập hôm qua : 260
                </p>
                <p>
                    <img src="{{asset('fe/logo/icon2.png')}}"> Đang online : 7
                </p>
                <p>
                    <img src="{{asset('fe/logo/icon3.png')}}"> Tổng truy cập : 1209815
                </p>
            </div>
        </div>
        <div class="col-md-9">

            <div class="sanpham-max">
                <div class="sanpham-min">
                    <b>{{$proty->name}}</b>
                </div>
            </div>

            <div class="container-fluid">
            <div class="sp-cungloai-detail row">
                @foreach($type as $item)
                <div class="card" style="width: 18rem; margin-right: 10px;; margin-top: 10px;">
                    <a href="{{ url('type/'.$item->tenkhongdau)}}">
                        <div id="cards">
                            <img src="{{ asset('fe/img/'.$item->type_image)}}" class="card-img-top" alt="...">
                        </div>
                    </a>
                    <div class="card-body">

                        <a style="text-decoration: none; color:black;" href="{{ url('type/'.$item->tenkhongdau)}}">
                            <p class="card-text">
                                <b> {{ $item->type_name}} </b>
                            </p>
                        </a>


                    </div>
                </div>
                @endforeach


            </div>
            </div>


        </div>



    </div>
</div>


@endsection