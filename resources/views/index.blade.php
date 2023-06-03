<title>{{ $menu_title->solan_title}}</title>
<meta name="Keywords" content="{{ $menu_title->solan_title}}" />
<meta name="Description" content="{{ $menu_title->solan_title}}" />


@extends('layout')
@section('content')
<div class="container-fluid" style="background-color: var(--card-background);padding: 0 100 0 100;">
<style>
   
</style>
    <div class="thongnhat row">
        <div class="col-md-3">
            <div class="icon1" ><i class="fa-solid fa-truck-fast"></i>
            </div>
  <div id="icon_content">
  Giao hàng đến địa chỉ theo yêu cầu.
            Cam kết đúng chất lượng ,tiến độ.
  </div>

        </div>
        <div class="col-md-3">
            <div class="icon2" style="text-align:center;"><i
                    class="fa-solid fa-people-group"></i>
            </div>
       <div id="icon_content">Tu vấn 24/7 về chất lượng kỹ thuật nhiệt tình, chu đáo</div>
        </div>
        <div class="col-md-3">
            <div class="icon3" style="text-align:center;"><i
                    class="fa-solid fa-thumbs-up"></i></div>
        <div id="icon_content">
           
        Ban đúng giá niêm yết của nhà máy sản xuất
        </div>
        </div>
        <div class="col-md-3">
            <div class="icon4" style="text-align:right;"><i
                    class="fa-solid fa-handshake"></i>
            </div>
         <div id="icon_content" >
         Cam kết lấy lợi ích khách hàng làm trọng, chữ tín làm đầu
         </div>
        </div>
    </div>

    <div class="danhmuc">
        <div class="danhmucsp" style="text-align: center;"><b>DANH MỤC SẢN PHẨM</b></div>
       <p>
       VLXD Thu Quang chuyên cung cấp các sản phẩm cát xây dựng( cát vàng, cát đen, cát san lấp, cát xây tô, cát bê
        tông ...), đá xây dựng ( đá chẻ, đá hộc, đá 1x2, đá 4x6, đá 5x7, đá 0x4, đá mi, ...) các loại gạch, xi măng,
        sắt thép, vật liệu xây dựng cho các công trình lớn nhỏ tại tphcm và các tỉnh. Ngoài ra vật liệu xây dựng Thu
        Quang còn cung cấp dịch vụ san lâp mặt bằng, dịch vụ chỏ xà bần, ...vv
       </p>




    </div>

    <style>
        .image-sp{
            margin-bottom: 45px;
        }
    </style>
    <div class="list-sp row">
        @foreach($types2 as $item)




        <div class="col-md-3 image-sp">
            <a href="{{url('type/'.$item->slug)}}">
                <img class="lazy" data-src="{{ asset('fe/img/'.$item->type_image)}}" height="" ; width="100%"
                    alt="">
            </a>


            <div class="name-sp" style=""><a href="{{url('type/'.$item->slug)}}">{{$item->type_name}}</a></div>
        </div>
        @endforeach
     
     
    </div>
   
    <div class="baogia">
        <img src="{{asset('fe/img/hang.png')}}" width="100%" height="auto" alt="">
    </div>
    <div class="tintuc">

        <div class="tieude h4"><h1> <b style="color: #f10b0c;">TIN TỨC</b></h1> </div>
        <div class="list-tintuc">

            <div class="row">
            @foreach($post_tintuc as $item)


        
                <div class="col-md-6" style="    margin-bottom: 20px;">
                    <div class="name-tintuc-1" style="    font-size: 1.2rem;color: #f10b0c;    margin-bottom: 20px;">
                    <a title="  {{ $item->tieude }}" href="{{url('post/'.$item->slug)}}">


                    <b>{{ $item->tieude }}    </b></a>
                 </div>


                    <div class="f row">
                        <div class="image-tintuc col-md">
                          <a href="{{url('post/'.$item->slug)}}">  <img width="100%" max-height="240px" src="{{asset('fe/img/'.$item->hinhanh)}}" alt=""></a>
                        </div>
                        <div class="tintuc-detail col-md">
                            <div>
                         <a style=" text-decoration: none;
  color:#000;" href="{{url('post/'.$item->slug)}}">   <?php
                                                                       $txt2 =  $item->noidung;
                                                            echo  substr($txt2, 0, 100) . '...'; ?></a>
                            
                         
                            </div>
                            <div class="detail-tin" style="text-align: right; ">
                                <h6><a style=" text-decoration: none;color: black;" href="{{url('post/'.$item->slug)}}">Chi tiết</a></h6>
                            </div>
                        </div>
                    </div>

                </div>
              
               
                @endforeach
             
          
            </div>
        
        </div>
    </div>
</div>

@endsection