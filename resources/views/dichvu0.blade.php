@extends('layout')
@section('content')

<title>Dịch vụ</title>
<!-- <link rel="stylesheet" href="public/css/gioithieu-style.css"> -->

<div class="container-fluid">
    <div class="list-sp row p-3">
        <div class="col-md-3">
            <div class="left-titl"><img src="fe/img/left_titl.png" alt=""></div>
            <div class="thongtin p-2" style="width: 300px;border: 1px solid #bebebe; height: 300px;">
                <div class="image-nhan">
                    <img src="fe/img/supp.png" alt="">
                    <img src="fe/img/hotline.png" alt="">
                </div>
                <br>
                <br><br><br>
                @foreach($phone as $p)
                {!!$p->sdt!!}
                @endforeach
              


            </div>

            <div class="left-titl2"><img src="fe/img/left_titl.png" alt=""></div>
            <div class="thongtin p-2" style="width: 300px;border: 1px solid #bebebe; height: 300px;">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner gg" style="position: relative;top: -100px;">
                        <div class="carousel-item active">
                            <img height="280px" width="100%" src="fe/img/may-nen-bt-xiyi-7950.jpg"
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
                        <!-- <div class="carousel-item">
                            <img height="280px" width="100%" src="public/img/may-nen-uon-xi-mang-300kn-9781.png"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img height="280px" width="100%" src="public/img/may-nen-uon-xi-mang-300kn-9781.png"
                                class="d-block w-100" alt="...">
                        </div> -->
                        
                    </div>

                </div>

                <div class="image-nhan">

                </div>


            </div>

            <div class="left-titl3 p-1"><img src="fe/img/left_titl.png" alt=""></div>
            <form action="{{url('http://www.xaydung.gov.vn/vn/Pages/thongbaoloi.aspx?aspxerrorpath=/vn/pages/thongbaoloi.aspx')}}" >
            <select onchange="this.form.submit()" id="chucnang" name="chucnangc" style="width: 300px; height: 40px; border: 1px solid #bebebe;">
            
            <option value="{{url('http://www.xaydung.gov.vn/vn/Pages/thongbaoloi.aspx?aspxerrorpath=/vn/pages/thongbaoloi.aspx')}}">Liên kết website</option>
            <option value="{{url('http://www.xaydung.gov.vn/vn/Pages/thongbaoloi.aspx?aspxerrorpath=/vn/pages/thongbaoloi.aspx')}}"> Bộ Xây dựng</option>
           
           
              <option value="kiemdinh">Kiểm định xây dựng</option>
              <!-- <option value="gtvt">Bộ GTVT</option>
              <option value="xd">Bộ Xây dựng</option> -->

          </select>
            </form>
            <div class="thongtin p-1" style="width: 300px;border: 1px solid #bebebe; height: 300px;">


            </div>
        </div>
        <div class="col-md-9">

            <div class="gioithieus-tit">
            </div>

            <div class="container-fluid">
                <div class="thongtin-detailw row p-2">

                    <!-- <div class="row r"> -->
                        @foreach($post as $item)
                        <!-- <div class="row"> -->
                            <div class="col-md-2">
                                <a href="{{ url('post/'.$item->id)}}">
                                    <img style="height: 100px;width: 100px;"
                                        src="{{ asset('fe/img/'.$item->hinhanh)}}" alt="">
                                </a>
                            </div>

                            <div class="col-md-10">
                                <div> <a href="{{ url('post/'.$item->id)}}">{{ $item->tieude}}</a></div>
                                <div>


                                    <?php
                                                                       $txt2 =  $item->noidung;
                                                                  echo  substr($txt2, 0, 100) . '...'; ?>


                                </div>
                            </div>
                        <!-- </div> -->
                        @endforeach
                    <!-- </div> -->

                </div>
            </div>
        </div>

     

    </div>
</div>
@endsection