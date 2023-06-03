@foreach($post as $item)
<title>{{ $item->title}}</title>

<meta name="Keywords" content="{{ $item->title}}" />
<meta name="Description" content="{{ $item->title}}" />
@endforeach
@extends('layout')
@section('content')


<!--  -->

<div class="container-fluid" style="padding: 0 100px 0 100px;">

<style>
    .sanpham{
    border-bottom: none;
    border-right: none;
}
</style>
    <div class="gioithieu">
        @foreach($post as $new)
        <div class="row">

            <div class="col-md-6">
                <img width="100%" src="{{ asset('fe/img/'.$new->hinhanh)}}" alt="">
            </div>
            <div class="col-md-6">



                {!!$new->noidung!!}


            </div>
        </div>
        @endforeach
    </div>
    <div class="thongnhat row">
        <div class="danhmucsp" style="text-align: center;"><b>LÝ DO NÊN CHỌN CHÚNG TÔI</b></div>
        <div class="col-md-3">
            <div class="icon1" style="font-size: 50px;color: orangered;"><i class="fa-solid fa-truck-fast"></i>
            </div>
            Giao hàng đến địa chỉ theo yêu cầu
            Cam kết đúng chất lượng ,tiến độ.

        </div>
        <div class="col-md-3">
            <div class="icon2" style="text-align:center;  font-size: 50px;color: orangered;"><i
                    class="fa-solid fa-people-group"></i>
            </div>
            Tu vấn 24/7 về chất lượng kỹ thuật nhiệt tình, chu đáo
        </div>
        <div class="col-md-3">
            <div class="icon3" style="text-align:center;font-size: 50px;color: orangered;"><i
                    class="fa-solid fa-thumbs-up"></i></div>
            Ban đúng giá niêm yết của nhà máy sản xuất
        </div>
        <div class="col-md-3">
            <div class="icon4" style="text-align:right;font-size: 50px; color: orangered;"><i
                    class="fa-solid fa-handshake"></i>
            </div>
            Cam kết lấy lợi ích khách hàng làm trọng, chữ tín làm đầu
        </div>
    </div>


    <div class="danhmuc p-3">
        <div class="danhmucsp" style="text-align: center;"><b>DANH MỤC SẢN PHẨM</b></div>
        VLXD Thu Quang chuyên cung cấp các sản phẩm cát xây dựng( cát vàng, cát đen, cát san lấp, cát xây tô, cát bê
        tông ...), đá xây dựng ( đá chẻ, đá hộc, đá 1x2, đá 4x6, đá 5x7, đá 0x4, đá mi, ...) các loại gạch, xi măng,
        sắt thép, vật liệu xây dựng cho các công trình lớn nhỏ tại tphcm và các tỉnh. Ngoài ra vật liệu xây dựng Thu
        Quang còn cung cấp dịch vụ san lâp mặt bằng, dịch vụ chỏ xà bần, ...vv




    </div>

    <div class="img-all-sp">
        <div class="row">
           
            <div class="col-md-5 img_top">
                @foreach($product_gioithieu as $item)

                <a href=" {{url('type/'.$item->slug)}}"> <img src="{{asset('fe/img/'.$item->type_image)}}" alt="img"
                       height="80%"  width="100%"></a>

                <div class="tensp" style="    text-align: center;"><a title="" href="{{url('type/'.$item->slug)}}">
                        {{$item->type_name}}

                    </a>

                </div>
                {{-- <div class="dacta" style="    text-align: left;">
                    <?php
                                                                       $txt2 =  $item->dacta;
                                                                  $txt4=  substr($txt2, 0, 20) . '...'; ?>

                    {!! " $txt4 "!!}
                </div> --}}
                @endforeach
            </div>
            <div class="col-md-7">
                @foreach($types as $item)
                <div class="sanpham" style="width:48%">
                    <div class="ct8bd">
                        <div class="image">
                            <a style="	font-size: 0px;" title="name" href="{{url('type/'.$item->slug)}}"><img
                                    id="img-sp" title="" style="width: 100%;height: 240px; display: inline;"
                                    class="lazy"
                                    data-original="https://hethongcongtudong.com/image/cache/data/V2/v2 aros/IMG_3805-200x200.jpg"
                                    alt="" data-src="{{ asset('fe/img/'.$item->type_image)}}"></a>
                        </div>
                        <div class="tensp" style="    text-align: left;"><a title=""
                                href="{{url('type/'.$item->slug)}}">
                                {{$item->type_name}}

                            </a>

                        </div>
                        <div class="dacta" style="    text-align: left;">


                            <?php
                                                                       $txt2 =  $item->dacta;
                                                                  $txt4=  substr($txt2, 0, 25) . '...'; ?>

                            {!! " $txt4 "!!}
                        </div>
                    </div>


                </div>
                @endforeach

            </div>
        </div>
    </div>
    <style>
    #button_all {
        padding: 15px 5px 15px 5px !important;
    }

    @media only screen and (max-width: 800px) {.sanpham {
        width: 100% !important;
    }
    .sanpham>.ct8bd>.image>a>img {
        margin-top: 7px;
    height: 250px !important;
}
}
    </style>
    <div class="but">
        <a href="{{url('sanpham')}}" target="_self" id="button_all" class="button secondary is-outline" style="   text-decoration: none;
        border-radius: 99px;
        border: 2px solid red;
        padding: 15px 35px 15px 25px;
       font-weight: 700;">
            <span style=" font-size: 1.125em;">Xem tất cả sản phẩm</span>
        </a>

    </div>

    <div class="nhan-gioithieu">
        <div class="danhmucsp" style="text-align: center;"><b>HÌNH ẢNH HOẠT ĐỘNG </b></div>
        @foreach($hahoatdong as $item)
        <div class="sanpham" style="width:32%">
            <div class="ct8bd">
                <div class="image">
                    <a style="	font-size: 0px;" title="name"><img id="img-sp" title=""
                            style="width: 100%;height: 300px; display: inline;" class="lazy"
                            data-original="https://hethongcongtudong.com/image/cache/data/V2/v2 aros/IMG_3805-200x200.jpg"
                            alt="" data-src="{{asset('fe/img/'.$item->photo)}}"></a>
                </div>

            </div>


        </div>
        @endforeach


    </div>
    <div class="gioithieu-map">
        <div class="row">
            @foreach($post_mst as $item)
            <div class="col-md-6">
                {!! $item->noidung !!}

            </div>
            @endforeach
            <div class="col-md-6">
                <iframe
                    src="https://maps.google.com/maps?q=40 Lương Định Của, Phường An Phú, Quận 2 cũ, Tp.Thủ Đức, Thành phố Hồ Chí Minh&t=&z=10&ie=UTF8&iwloc=&output=embed"
                    width="100%" height="580" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" data-rocket-lazyload="fitvidscompatible"
                    class="lazyloaded" data-ll-status="loaded"></iframe>
            </div>
        </div>
    </div>

</div>

@endsection