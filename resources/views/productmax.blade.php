@extends('layout')
@section('content')

<title>
{{$proty->title}}
</title>

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
             


            </div>

            <div class="left-titl2"><img src="{{asset('fe/img/left_titl.png')}}" alt=""></div>
            <div class="thongtin p-2" style="width: 280px;border: 1px solid #bebebe; height: 300px;">
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
            <div class="thongtin p-1" style="width: 280px;border: 1px solid #bebebe; height: 300px;">


            </div>
        </div>
        <div class="col-md-9">

            <div class="sanpham-max">
            <div class="sanpham-min">
         {{$proty->name}}
         </div>
            </div>

            <div class="sp-cungloai-detail row">
            @foreach($type as $item)
                <div class="card" style="width: 18rem; margin-right: 10px;; margin-top: 10px;">
                <a href="{{ url('type/'.$item->tenkhongdau)}}"> 
                    <img style="min-height: 300px; max-width: 95%;" src="{{ asset('fe/img/'.$item->type_image)}}"
                        class="card-img-top" alt="...">
                        </a>
                    <div class="card-body">
                      
                     <a href="{{ url('type/'.$item->tenkhongdau)}}">   <p class="card-text">{{ $item->type_name}} </p></a>
                      

                    </div>
                </div>
                @endforeach
           
              
            </div>
          

        </div>



    </div>


    @endsection