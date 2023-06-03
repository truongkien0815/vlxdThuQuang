<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="{{asset('fe/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fe/css/gioithieu.css')}}">
    <link rel="stylesheet" href="{{asset('fe/css/danhmuc.css')}}">
    <link rel="stylesheet" href="{{asset('fe/css/tintuc.css')}}">
    <link rel="stylesheet" href="{{asset('fe/css/chitiet.css')}}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

</head>

<body>



    <div class="container-fluid" style="background-color: #b7b7b7;">

        <div class="top-logo">
            <style>
            #ul_phone>li {
                float: left;
            }
            </style>
            <div class="row">
                <div class="col-md-6">
                    <h3 id="cuahangf" style="margin-left: 50px;">Cửa Hàng VLXD <b style="color: red;">Thu Quang </b>
                    </h3>
                    <ul id="ul_phone">
                        <li>
                            <i class="bi bi-telephone-fill"
                                style="    background-color: #ffffff;      padding: 1px 3px 1px 3px; border: 1px solid black; border-radius: 50%;"></i>
                            <span style="margin-right:40px">
                                @foreach($sdt as $item)
                                {!! $item->sdt !!}
                             
                                @endforeach

                            </span></i>
                        </li>
                        <li>
                            <i class="bi bi-envelope-fill"
                                style="   background-color: #ffffff;     padding: 1px 3px 1px 3px; border: 1px solid black; border-radius: 50%;"></i>
                            vlxdthuquang@gmail.com
                        </li>
                    </ul>


                </div>


                <div class="col-md-6 vanchuyen">

                    <form action="{{ url('result')}}" method="get">
                        <style>
                        input:hover {
                            border-color: blue;
                        }
                        </style>
                        <div class="ten-congty">
                            <input type="text" required name="keyword" value="" id="search"
                                placeholder="Tìm kiếm sản phẩm ...">



                            <button type="submit" value="fff" id="button_search">
                                <b class="bi bi-search" style="color: #3c4197;font-size: 25px;" href="#"></b></button>
                        </div>

                    </form>








                </div>
            </div>
        </div>

    </div>



    <nav class="navbar bg-body-tertiary  p-0" id="bentop">
        <div class="container-fluid" style="background-color: #ec3203; ">


            <ul class="navbar_ul ">
                <li class="nav-item" style="margin-left:110px">
                    <span class="nav-link active  link-k" aria-current="page">Cửa Hàng VLXD <span
                            style="color: #ffffff;">Thu Quang </span></span>
                </li>
               
                <li class="nav-item" style="margin-left: 150px;"> <a class="nav-link active  link-k" aria-current="page"
                        href="{{ url('/')}}">Trang
                        chủ</a></li>
              

                <li class="nav-item subnet"><a class="nav-link link-k" href="{{url('sanpham')}}">Sản phẩm
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a>

                    <ul id="menu">
                        @foreach($types2 as $item)

                        @if( $item->home == 'on')
                        <li style="    position: relative;
                        width: auto;" class="drop_item"><a class="dropdown-item"
                                href="{{url('type/'.$item->slug)}}">{{$item->type_name}}</a>
                                @endif
                            <ul id="meni">
                                @foreach($items as $itam)
                               
                                @if($item->type_id == $itam->type_id)
                     
                      
                               <li id="item_menu"><a href="{{url('type_item/'. $itam->item_id)}}">{{$itam->name}}</a>
                              
<style>
    #item_menu:hover>#listul{
display: block;
    }
    #listul{
       /* height:100%; */
     
       padding-left: 0;
        position: absolute;
        display: none;
        top:0;
        border: 1px solid black;
        background-color: #ffffff;
                   width: max-content;          
                                left: 100%;    
    }
</style> 

                                <ul id="listul" >
                                @foreach($product as $list)
                                @if($itam->item_id ==$list->item_id && $list->home == 1)
                                    <li atyle="float:none !important;width:100%; display: block;"><a href="{{url('product/'.$list->slug)}}">{{$list->product_name}}</a></li>
                                   
                                    @endif
                                    @endforeach
                                </ul>
                               </li>
                            
                           
                             
                               
                                @endif
                            
                             
                                @endforeach
                              
                            </ul>
                            <style>
                            .drop_item:hover>#meni {
                                display: block !important;
                            }

                            #meni>li {
                                display: contents;
                            }

                            #meni {
                                padding-left: 0;
                                border: 1px solid black;
                                position: absolute;
                                width: max-content;
                                background: #ffffff;

                                left: 100%;
                                top: 0px;
                              height:auto;
                               
                                position: absolute;
                                display: none;
                                color: red;
                            }
                            </style>


                        </li>

                        @endforeach

                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link  link-k" href="{{url('gioithieu')}}">Giới thiệu</a></li>
                <li class="nav-item"> <a class="nav-link  link-k" href="{{url('bangbaogia')}}">Bảng báo giá</a></li>
                <li class="nav-item"> <a class="nav-link  link-k" href="{{url('tintuc')}}">Tin tức</a></li>
                <li class="nav-item"><a class="nav-link  link-k" href="{{url('lienhe')}}">Liên hệ</a></li>


            </ul>



            <button class="navbar-toggler   " style="background-color: #0693e3;" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                aria-label="Toggle navigation">

                <span class="fa-solid fa-bars" style="color: #ffffff;"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        <img src="{{asset('fe/img/z4126356633074_83b4b61ed1e49428fb5879abb4d72a8c.jpg')}}" height="100%"
                            width="100px" alt="">
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul id="ul_baner" class="navbar-nav justify-content-end flex-grow-1 pe-3">

                        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="{{url('/')}}">Trang
                                chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('gioithieu')}}">Giới thiệu</a></li>



                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{url('sanpham')}}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Sản phẩm vật liệu xây
                                dựng


                            </a>











                            <style>
                                #li_del:hover>.ul_phone{
                          
                           display: block;
                                }
                                .ul_phone{
                                    display: none;
                                }
                                .ul_phone>li{
                                    float: none;
                                    display: block;
                                }

.li_phone::after
{
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
   
    border-left: 0.3em solid transparent;

}
                            </style>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{url('sanpham')}}">Tất cả</a></li>
                                @foreach($types2 as $item)


                                <li id="li_del"><a class="dropdown-item li_phone"
                                        href="{{url('type/'.$item->slug)}}">{{$item->type_name}}</a>


                                     

<ul class="ul_phone">
    @foreach($items as $itam)
                               
                                @if($item->type_id == $itam->type_id)
                     
                      
                               <li><a style="    text-align: left;color:black;" href="{{url('type_item/'. $itam->item_id)}}">{{$itam->name}}</a>
                                
                               </li>
                               @endif
                               @endforeach
</ul>


                                </li>


                                @endforeach

                            </ul>

                        </li>

                        <li class="nav-item"> <a class="nav-link" href="{{url('bangbaogia')}}">Bảng báo giá</a>


                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{url('tintuc')}}">Tin tức</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('lienhe')}}">Liên hệ</a></li>
                    </ul>

                    </ul>


                </div>
            </div>
        </div>
    </nav>


    <!--  -->

    <header>




  <!-- Hero Section Begin -->
   
  <div class="slider" id="slider1">
    <!-- Slides -->
  
    {{--  --}}
    @foreach($logo as $baner)
    <div><img src="{{asset('fe/img/'.$baner->photo)}}" style="" height="100%" width="100%" alt=""></div>
  
   @endforeach
    <!-- The Arrows -->
    <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
        </svg></i>
    <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path>
        </svg></i>
    <!-- Title Bar -->
    <span class="titleBar">
        <h1>Cửa hàng vật liệu xây dựng Thu Quang</h1>
    </span>
</div>

<!-- Hero Section End -->


    
    </header>

    @yield('content')

    <!--  -->

    <!-- Footer -->

    
    <div class="container-fluid" id="container_end">
  
        <footer style="background-color: #bbb7b8;">


        <div class="tie">
                <ul id="ul_phu">
                    <li><a href="{{ url('/')}}">Trang chủ </a></li>
                    <li><a href="{{ url('gioithieu')}}">Giới thiệu </a></li>
                    <li><a href="{{ url('sanpham')}}">Sản phẩm VLXD </a></li>
                    <li><a href="{{ url('bangbaogia')}}">báo giá VLXD </a></li>
                    <li><a href="{{ url('tintuc')}}">Tin tức </a></li>
                    <li><a href="{{ url('lienhe')}}">Liên hệ </a></li>

                </ul>
            </div>
           
         
            <div class="foote row">
                @foreach($footer as $item)






                <div class="col-md-3">
                    {!!$item->footer_content!!}


                </div>
                @endforeach
                <style>
                a {

                    text-decoration: none;
                    color: #141313;
                }
                </style>
                <div class="col-md-3">
                    @foreach($types2 as $item)
                    <p><i class="bi bi-check2"></i><a href="{{url('type/'.$item->slug)}}">{{$item->type_name}}</a></p>
                    @endforeach

                </div>
                <div class="col-md-3">
                
                    <a href="https://www.facebook.com/"><img width="50px" height="30px"
                            src="data:image/jpeg;base64,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"
                            alt="">
                        facebook.com</a>
                    <br>

                    <a href="https://www.youtube.com/"><img style="margin-top:5px" width="50px" height="30px"
                            src=" https://logowik.com/content/uploads/images/188_youtube.jpg" alt="">
                        youtube.com</a>

                </div>
            </div>
            <div class="end text-white" style="    padding-bottom: 10px;
          padding-top: 10px;background-color:#504e4f; text-align: center;">copyright @ 2023 Design by : TriViet</div>

        </footer>
      
    </div>


    <div class="hotline-phone-ring-wrap">

<div class="hotline-phone-ring1">

    <div class="hotline-phone-ring-img-circle-mess">

        <a href="https://www.google.com/maps/place/40+L%C6%B0%C6%A1ng+%C4%90%E1%BB%8Bnh+C%E1%BB%A7a,+An+Ph%C3%BA,+Qu%E1%BA%ADn+2,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7909407,106.7390536,17z/data=!3m1!4b1!4m10!1m2!2m1!1zNDAgTMawxqFuZyDEkOG7i25oIEPhu6dhLCBQaMaw4budbmcgQW4gUGjDuiwgUXXhuq1uIDIgY8WpLCBUcC5UaOG7pyDEkOG7qWMsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaA!3m6!1s0x3175260b98e7c219:0x98267708aa0db106!8m2!3d10.7909355!4d106.743667!15sCmc0MCBMxrDGoW5nIMSQ4buLbmggQ-G7p2EsIFBoxrDhu51uZyBBbiBQaMO6LCBRdeG6rW4gMiBjxaksIFRwLlRo4bunIMSQ4bupYywgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5okgERY29tcG91bmRfYnVpbGRpbmfgAQA!16s%2Fg%2F11j8gzst47?authuser=0"
            class="pps-btn-img">
            <img style="display:block" title="Messenger" src="{{asset('fe/img/icon-map.png')}}"
                alt="Gọi điện thoại" width="50">
            <p style="font-size:11px;color:black;   
               padding: 3px;

                      display: contents;

                 font-size: 11px;
              line-height: 15px;
             color: #515151;
      font-weight: 700;



          "> Tìm đường</p>
        </a>
    </div>

</div>

<div class="hotline-phone-ring2">

    <div class="hotline-phone-ring-img-circle-mess nn">
        <a href="https://zalo.me/0918650782" class="pps-btn-img">
            <!-- <a class="pps-btn-img"> -->

            <img title="Zalo" src="{{asset('fe/img/icon-zalo.png')}}" alt="Gọi điện thoại" width="50">
            <p style="font-size:11px;color:black;   
          padding: 3px;

          display: contents;

           font-size: 11px;
              line-height: 15px;
               color: #515151;
                 font-weight: 700;



           "> Chat Zalo</p>
        </a>


    </div>



</div>

<div class="hotline-phone-ring3">

    <div class="hotline-phone-ring-img-circle-mess">
        <a href="https://www.facebook.com/" class="pps-btn-img">
            <img title="Facebook" src="{{asset('fe/img/icon-facebook.png')}}" alt="Gọi điện thoại"
                width="50">
            <p style="font-size:11px;color:black;   
         padding: 3px;

        display: contents;

                              font-size: 11px;
                              line-height: 15px;
                          color: #515151;
                                     font-weight: 700;



   "> Facebook</p>
        </a>

    </div>

</div>

<div class="hotline-phone-ring">

    <div class="hotline-phone-ring-img-circle mm">
        <a style="display: block;" href="tel:0918650782" class="pps-btn-img">


            <img style="display: block;" title="0918 650 782" src="  {{asset('fe/img/phone-flat.png')}}"
                alt="Gọi điện thoại" width="50">
            <p style="font-size:11px;color:black;   
                     padding: 3px;

                                    display: contents;

                              font-size: 11px;
                                  line-height: 15px;
                                 color: #515151;
                                  font-weight: 700;



                    "> Gọi điện</p>
        </a>


    </div>
</div>






</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>




    <script src="{{ asset('fe/js/scroll.js')}}"></script>
    <script src="{{ asset('fe/js/loadding.js')}}"></script>










    <!-- nd -->








    <img id="goTop" src="{{ asset('fe/baner/top.png')}}" alt="">















{{--  --}}

<style>
      @media only screen and (max-width: 800px) {
    .slider, 
.slider > div {
height: 200px !important;
}
      }
    .slider, 
.slider > div {
    /* Images default to Center Center. Maybe try 'center top'? */
    background-position: center center;
    display: block;
    width: 100%;
    height: 400px;
    /* height: 100vh; *//* If you want fullscreen */
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #000;
    overflow: hidden;
    -moz-transition: transform .4s;
    -o-transition: transform .4s;
    -webkit-transition: transform .4s;
    transition: transform .4s;
}

.slider > div {
    position: absolute;
}

.slider > i {
    color: #5bbd72;
    position: absolute;
    font-size: 60px;
    margin: 20px;
    top: 40%;
    text-shadow: 0 10px 2px #223422;
    transition: .3s;
    width: 30px;
    padding: 10px 13px;
    background: #fff;
    background: rgba(255, 255, 255, .3);
    cursor: pointer;
    line-height: 0;
    box-sizing: content-box;
    border-radius: 3px;
    z-index: 4;
}

.slider > i svg {
    margin-top: 3px;
}

.slider > .left {
    left: -100px;
}
.slider > .right {
    right: -100px;
}
.slider:hover > .left {
    left: 0;
}
.slider:hover > .right {
    right: 0;
}

.slider > i:hover {
    background:#fff;
    background: rgba(255, 255, 255, .8);
    transform: translateX(-2px);
}

.slider > i.right:hover {
    transform: translateX(2px);
}

.slider > i.right:active,
.slider > i.left:active {
    transform: translateY(1px);
}

.slider:hover > div {
    transform: scale(1.01);
}

.hoverZoomOff:hover > div {
    transform: scale(1);
}

.slider > ul {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 4;
    padding: 0;
    margin: 0;
    transform: translateX(-50%);
}

.slider > ul > li {
    padding: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    list-style: none;
    float: left;
    margin: 10px 10px 0;
    cursor: pointer;
    border: 1px solid #fff;
    -moz-transition: .3s;
    -o-transition: .3s;
    -webkit-transition: .3s;
    transition: .3s;
}

.slider > ul > .showli {
    background-color: #7EC03D;
    -moz-animation: boing .5s forwards;
    -o-animation: boing .5s forwards;
    -webkit-animation: boing .5s forwards;
    animation: boing .5s forwards;
}

.slider > ul > li:hover {
    background-color: #7EC03D;
}

.slider > .show {
    z-index: 1;
}

.hideDots > ul {
    display: none;
}

.showArrows > .left {
    left: 0;
}

.showArrows > .right {
    right: 0;
}

.titleBar {
    z-index: 2;
    display: none;
    background: rgba(0,0,0,.5);
    position: absolute;
    width: 100%;
    bottom: 0;
    transform: translateY(100%);
    padding: 20px 30px;
    transition: .3s;
    color: #fff;
}

.titleBar * {
    transform: translate(-20px, 30px);
    transition: all 700ms cubic-bezier(0.37, 0.31, 0.2, 0.85) 200ms;
    opacity: 0;
}

.titleBarTop .titleBar * {
    transform: translate(-20px, -30px);
}

.slider:hover .titleBar,
.slider:hover .titleBar * {
    transform: translate(0);
    opacity: 1;
}

.titleBarTop .titleBar {
    top: 0;
    bottom: initial;
    transform: translateY(-100%);
}

.slider > div span {
    display: block;
    background: rgba(0,0,0,.5);
    position: absolute;
    bottom: 0;
    color: #fff;
    text-align: center;
    padding: 0;
    width: 100%;
}


@keyframes boing {
    0% {
        transform: scale(1.2);
    }
    40% {
        transform: scale(.6);
    }
    60% {
        transform: scale(1.2);
    }
    80% {
        transform: scale(.8);
    }
    100% {
        transform: scale(1);
    }
}

/* -------------------------------------- */

#slider2 {
    max-width: 30%;
    margin-right: 20px;
}

.row2Wrap {
    display: flex;
}

.content {
    padding: 50px;
    margin-bottom: 100px;
}





.content {
    padding: 10px 15vw;
}

</style>


<script>
    
    (function($) {
      "use strict";
      $.fn.sliderResponsive = function(settings) {
        
        var set = $.extend( 
          {
            slidePause: 5000,
            fadeSpeed: 800,
            autoPlay: "on",
            showArrows: "off", 
            hideDots: "off", 
            hoverZoom: "on",
            titleBarTop: "off"
          },
          settings
        ); 
        
        var $slider = $(this);
        var size = $slider.find("> div").length; //number of slides
        var position = 0; // current position of carousal
        var sliderIntervalID; // used to clear autoplay
          
        // Add a Dot for each slide
        $slider.append("<ul></ul>");
        $slider.find("> div").each(function(){
          $slider.find("> ul").append('<li></li>');
        });
          
        // Put .show on the first Slide
        $slider.find("div:first-of-type").addClass("show");
          
        // Put .showLi on the first dot
        $slider.find("li:first-of-type").addClass("showli")
    
         //fadeout all items except .show
        $slider.find("> div").not(".show").fadeOut();
        
        // If Autoplay is set to 'on' than start it
        if (set.autoPlay === "on") {
            startSlider(); 
        } 
        
        // If showarrows is set to 'on' then don't hide them
        if (set.showArrows === "on") {
            $slider.addClass('showArrows'); 
        }
        
        // If hideDots is set to 'on' then hide them
        if (set.hideDots === "on") {
            $slider.addClass('hideDots'); 
        }
        
        // If hoverZoom is set to 'off' then stop it
        if (set.hoverZoom === "off") {
            $slider.addClass('hoverZoomOff'); 
        }
        
        // If titleBarTop is set to 'on' then move it up
        if (set.titleBarTop === "on") {
            $slider.addClass('titleBarTop'); 
        }
    
        // function to start auto play
        function startSlider() {
          sliderIntervalID = setInterval(function() {
            nextSlide();
          }, set.slidePause);
        }
        
        // on mouseover stop the autoplay
        $slider.mouseover(function() {
          if (set.autoPlay === "on") {
            clearInterval(sliderIntervalID);
          }
        });
          
        // on mouseout starts the autoplay
        $slider.mouseout(function() {
          if (set.autoPlay === "on") {
            startSlider();
          }
        });
    
        //on right arrow click
        $slider.find("> .right").click(nextSlide)
    
        //on left arrow click
        $slider.find("> .left").click(prevSlide);
          
        // Go to next slide
        function nextSlide() {
          position = $slider.find(".show").index() + 1;
          if (position > size - 1) position = 0;
          changeCarousel(position);
        }
        
        // Go to previous slide
        function prevSlide() {
          position = $slider.find(".show").index() - 1;
          if (position < 0) position = size - 1;
          changeCarousel(position);
        }
    
        //when user clicks slider button
        $slider.find(" > ul > li").click(function() {
          position = $(this).index();
          changeCarousel($(this).index());
        });
    
        //this changes the image and button selection
        function changeCarousel() {
          $slider.find(".show").removeClass("show").fadeOut();
          $slider
            .find("> div")
            .eq(position)
            .fadeIn(set.fadeSpeed)
            .addClass("show");
          // The Dots
          $slider.find("> ul").find(".showli").removeClass("showli");
          $slider.find("> ul > li").eq(position).addClass("showli");
        }
    
        return $slider;
      };
    })(jQuery);
    
    
     
    //////////////////////////////////////////////
    // Activate each slider - change options
    //////////////////////////////////////////////
    $(document).ready(function() {
      
      $("#slider1").sliderResponsive({
      // Using default everything
        // slidePause: 5000,
        // fadeSpeed: 800,
        // autoPlay: "on",
        // showArrows: "off", 
        // hideDots: "off", 
        // hoverZoom: "on", 
        // titleBarTop: "off"
      });
      
      $("#slider2").sliderResponsive({
        fadeSpeed: 300,
        autoPlay: "off",
        showArrows: "on",
        hideDots: "on"
      });
      
      $("#slider3").sliderResponsive({
        hoverZoom: "off",
        hideDots: "on"
      });
      
    }); 
    
    
    
    </script>

</body>

</html>