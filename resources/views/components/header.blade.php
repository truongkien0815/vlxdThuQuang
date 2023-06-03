<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>kiem dinh xay dung, may nen be tong, may keo thep, may nen xi mang, khuan duc mau be tong</title>
  <link rel="stylesheet" href="{{ asset('public/css/style.css')}}">

 

<link rel="stylesheet" href="{{ asset('style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
 
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="{{ asset('styles.css')}}">
 
 

<!-- chi tiet tai lieu -->


<link rel="stylesheet" href="public/css/chittiet-tailieu.css">

<link rel="stylesheet" href="public/css/tuyendung.scss">
<!-- chi tiet sp -->


<link rel="stylesheet" href="public/css/chitiet-sp.css">

  <!-- chi tiet tin tuc -->
  <link rel="stylesheet" href="public/css/chitiet-tintuc.css">


<link rel="stylesheet" href="public/css/tuyendung.scss">

<!-- dichvu -->
<link rel="stylesheet" href="{{asset('public/css/dichvu-style.css')}}">
<link rel="stylesheet" href="{{asset('styles.css')}}">
<!-- document -->
<link rel="stylesheet" href="public/css/document.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <!-- product -->

  <link rel="stylesheet" href="public/css/dichvu-style.css">
</head>

<body>
 
 
  <header>


    <div class="banner"><img src="{{ asset('public/img/banner-4739.png')}}" width="100%" alt=""></div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="border: 1px gray solid;padding: 0; ">
      <div class="container-fluid" style="padding: 4px; background: url({{asset('public/img/menu.png')}});">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" style="margin-left: 100px;">
            <li class="nav-item">
              <a class="nav-link active text-white  rounded-pill" aria-current="page" href="{{asset('/')}}"><b>TRANG CHỦ</b></a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link text-white rounded-pill" href="{{asset('gioithieu')}}"><b>GIỚI THIỆU</b></a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link text-white rounded-pill dropdown-toggle " href="{{asset('product')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SẢN PHẨM
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded-pill" href="document"><b>TÀI LIỆU</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded-pill" href="dichvu"><b>DỊCH VỤ</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded-pill" href="tuyendung"><b>TUYỂN DỤNG</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded-pill" href="lienhe"><b>LIÊN HỆ</b></a>
            </li>
           
            <style>
              .search {
                position: relative;
                left: 1080px;
                top: -40px;
           
            
              }
            </style>
          </ul>
        </div>
      </div>

      
    </nav>
    <div class="search">
      <div id="search">
      <form action="{{ url('result') }}" method="get">
								<!-- @csrf -->
        <input type="text" name="keyword" id="keyword" value="{{ old('keyword')}}">
          <button type="submit"  class="bi bi-search"></button>
        </form>
        <!-- <i class="bi bi-search">

        </i> -->
      </div>
    </div>
    <div class="chungnhan row" style="border: 1px gray solid; margin-right: 0;">
      <div class="col-md-2" style="padding-left: 50px; padding-top: 15px;">
        <div class="chungnhan1"><img src="{{ asset('public/img/111-9659.JPG')}}" alt=""></div>
        <div class="chungnhan2"><img src="{{ asset('public/img/111-9659.JPG')}}" alt=""></div>


      </div>
      <div class="col-md-7">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" style="position: relative;top: -30px;">
            <div class="carousel-item active">
              <img height="500px" width="600px" src="{{asset('public/img/165khanh-thanh-nha-may-7843.jpg')}}" class="d-block w-100"
                alt="...">

            </div>
            <div class="carousel-item">
              <img height="500px" width="600px" src="{{asset('public/img/166tong-ket-2014-8523.jpg')}}" class="d-block w-100"
                alt="...">
            </div>
            <div class="carousel-item">
              <img height="500px" width="600px" src="{{asset('public/img/168nguyen-thien-nhan-3115.png')}}" class="d-block w-100"
                alt="...">
            </div>
          </div>

        </div>
      </div>
      <div class="col-md-3 anh3" style="border: 1px gray solid; margin-top: 20px;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" style="position: relative;top: -30px;">
            <div class="carousel-item active">
              <img height="500px" width="100%" src="{{asset('public/img/may-nen-bt-xiyi-7950.jpg')}}" class="d-block w-100"
                alt="...">

            </div>
            <div class="carousel-item">
              <img height="500px" width="600px" src="{{asset('public/img/may-nen-uon-xi-mang-300kn-9781.png')}}" class="d-block w-100"
                alt="...">
            </div>
            <div class="carousel-item">
              <img height="500px" width="600px" src="{{ asset('public/img/may-nen-uon-xi-mang-300kn-9781.png')}}" class="d-block w-100"
                alt="...">
            </div>
          </div>

        </div>
      </div>
    </div>
  </header>

  {{ $slot }}



  