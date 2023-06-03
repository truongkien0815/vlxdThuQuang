@extends('layout')
@section('content')
<title>kiem dinh xay dung, may nen be tong, may keo thep, may nen xi mang, khuan duc mau be tong</title>

<div class="container-fluid">
    <div class="list-sp row p-3">
        <div class="col-md-3">
            <div class="left-titl"><img src="{{asset('fe/img/left_titl.png')}}" alt=""></div>
            <div class="thongtin p-2" style="width: 300px;border: 1px solid #bebebe; height: 300px;">
                <div class="image-nhan">
                    <img src="{{asset('fe/img/supp.png')}}" alt="">
                    <img src="{{asset('fe/img/hotline.png')}}" alt="">
                </div>
                <br>
                <br><br><br>
                @foreach($phone as $p)
                {!!$p->sdt!!}
                @endforeach
                <!-- <div class="thongtin-detail p-2">
                    <div><img src="{{asset('public/img/skype.png')}}" alt=""> <img src="{{asset('public/img/yah.png')}}" alt=""> Mr Nam</div>
                    <div style="font-size: 15px;"><img src="{{asset('public/img/mai.png')}}" alt=""> thietbikiemdinhvietnam@gmail.com
                    </div>
                    <div><img src="{{asset('public/img/tel.png')}}" alt=""> 0917738499</div>

                    <div><img src="{{asset('public/img/skype.png')}}" alt=""> Mr Toan</div>
                    <div><img src="{{asset('public/img/tel.png')}}" alt=""> 0983807130</div>
                    <div><img src="{{asset('public/img/mai.png')}}" alt=""> thietbiphonglas@gmail.com</div>
                </div> -->


            </div>

            <div class="left-titl2"><img src="{{asset('fe/img/left_titl.png')}}" alt=""></div>
            <div class="thongtin p-2" style="width: 300px;border: 1px solid #bebebe; height: 300px;">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner gg" style="position: relative;top: -100px;">
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
                        <!-- <div class="carousel-item">
                            <img height="280px" width="100%" src="{{asset('public/img/may-nen-uon-xi-mang-300kn-9781.png')}}"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img height="280px" width="100%" src="{{asset('public/img/may-nen-uon-xi-mang-300kn-9781.png')}}"
                                class="d-block w-100" alt="...">
                        </div> -->
                    </div>

                </div>

                <div class="image-nhan">

                </div>


            </div>

            <div class="left-titl3 p-1"><img src="{{asset('fe/img/left_titl.png')}}" alt=""></div>
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

            <div class="tailieu-tit">
            </div>

           <div class="container-fluid">
           <div class="thongtin-detailw row p-2">
                <div class="col-2"><img width="120px" height="120px" src="{{asset('fe/img/'.$document->image)}}"
                        alt=""></div>
                <div class="col-10">
                    <div> <a href="#">{{$document->tieude}}</a></div>

                    {{$document->noidung}}
                    <iframe src="{{asset('fe/img/'.$document->filetailieu)}}"
                        width="100%" height="500px">
                    </iframe>
                   



                </div>
            </div>
           </div>

            <!-- <div class="thongtin-detailw row p-2">
        <div class="col-2"><img src="public/img/tl-2.jpg" alt=""></div>
        <div class="col-10">
          <div> <a href="">Catalog Thiết bị Phát thanh truyền hình:</a></div>
            Catalog Thiết bị Phát thanh truyền hình:


        </div>
      </div>
      <div class="thongtin-detailw row p-2">
        <div class="col-2"><img src="public/img/tl-2.jpg" alt=""></div>
        <div class="col-10">
          <div> <a href="" style="text-decoration: none;"> Catalog thông tin sản phẩm Lò đốt rác thải sinh hoạt:</a> </div>
        
               Catalog thông tin sản phẩm Lò đốt rác thải sinh hoạt:


        </div>
      </div>
      <div class="thongtin-detailw row p-2">
        <div class="col-2"><img src="public/img/tl-3.jpg" alt=""></div>
        <div class="col-10">
          <div>
            <style>
              a{
                text-decoration: none;
                
              }
            </style>
            <a href=""> Catalog Thiết bị thí nghiệm xây dựng T-TECH:</a>
            Catalog Thiết bị thí nghiệm xây dựng T-TECH:</div>


        </div>
      </div> -->
        </div>



    </div>

    @endsection