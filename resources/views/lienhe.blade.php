<title>{{ $menu_title->solan_title}}</title>
<meta name="Keywords" content="{{ $menu_title->solan_title}}" />
<meta name="Description" content="{{ $menu_title->solan_title}}" />
@extends('layout')
@section('content')

<div class="bglienhe">
    <img width="100%" height="" class="lazy" data-src="{{asset('fe/img/gioi-thieu-vlxd-manh-tai.png')}}" alt="">

    <div class="textlienhe">
        <h1><span style="font-size: 100%;font-weight:700;color: #ffffff;">LIÊN HỆ</span></h1>
        <div class="is-divider divider clearfix"
            style="margin-top:15px;margin-bottom:15px;max-width:50px;height:4px;background-color:rgb(0, 205, 249);">
        </div>
        <span style="color:#00cdf9;"><a href="{{url('/')}}">Trang Chủ</a> / <a
                style="font-weight:700; color:#ffffff;">Liên hệ VLXD THU QUANG</a> </span>
    </div>
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
</div>
<div class="container-fluid" style="padding: 0 80 0 80;">
    <div class="list">





        <div class="row p-5">
            <div class="col-md-6">
                <div id="content-lh">
                    @foreach($post as $new)


                    {!!$new->noidung!!}
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <form name="frmContact" id="frmContact" method="post" action="contact" enctype="multipart/form-data">
                    <h3><span style="font-size: 120%;color: #1a7ed3;"><strong>Liên hệ tư vấn</strong></span></h3>

                    <p> Vui lòng hoàn tất biểu mẫu bên dưới để gửi thông tin liên hệ cho chúng tôi</p>
                    @csrf
                    <p>
                        <style>
                        .form-control {
                            font-weight: 700;
                            color: #333;
                        }
                        </style>
                    <div class="card-body">
                        <input class="form-control" required placeholder="Tên của bạn ..." type="text" name="fullname"
                            id="fullname" value="">
                    </div>
                    </p>
                    <p>
                    <div class="card-body">
                        <input class="form-control" required placeholder="Địa chỉ..." type="text" name="address"
                            id="address" value="">
                    </div>
                    </p>
                    <p>
                    <div class="card-body">
                        <input class="form-control" required placeholder="Số điện thoại..." type="tel" name="cell"
                            id="cell" value="">
                    </div>
                    </p>
                    <p>
                    <div class="card-body">
                        <input class="form-control" required placeholder="Email thường dùng..." type="text" name="email"
                            id="email" value="">
                    </div>
                    </p>
                    <p>
                    <div class="card-body">
                        <input class="form-control" required placeholder="Tiêu đề..." type="text" name="title"
                            id="title" value="">
                    </div>
                    </p>
                    <p>
                        <textarea class="form-control" required placeholder="Nội dung liên hệ" name="content"
                            id=""></textarea>
                    </p>
                    <p>
                        <input placeholder="Mã bảo vệ*" type="text" style="width:100px; margin-top:0;  "
                            name="security"><img src="http://hungthinhco.net/captcha.php" align="absbottom" alt=""
                            style="padding:0; margin-top:0px; ">
                    </p>
                    <input type="submit"
                        style="border-radius:0;background-color:#00aeef;font-weight:700;font-family: system-ui;    border-color: transparent;padding: 10px 20px 10px 20px;"
                        class="btn btn-primary" value="GỬI YÊU CẦU" name="send" title="GỬI ĐI" id="send">
                </form>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 margin_conent">
                <div class="map">

                    <iframe
                        src="https://maps.google.com/maps?q=40 Lương Định Của, Phường An Phú, Quận 2 cũ, Tp.Thủ Đức, Thành phố Hồ Chí Minh&t=&z=10&ie=UTF8&iwloc=&output=embed"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>
            </div>



        </div>

        <style>
        #frmContact {
            background-color: #f0f0f0;
            padding: 30px;
            border-radius: 10px;
        }
        </style>
    </div>
    </div>

    @endsection