<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kiem dinh xay dung, may nen be tong, may keo thep, may nen xi mang, khuan duc mau be tong</title>
  <link rel="stylesheet" href="public/css/style.css">

<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
 
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="styles.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" > -->
 
</head>

<body>
 
 
  <header>


    <div class="banner"><img src="public/img/banner-4739.png" width="100%" alt=""></div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="border: 1px gray solid;padding: 0; ">
      <div class="container-fluid" style="padding: 4px; background: url(public/img/menu.png);">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" style="margin-left: 100px;">
            <li class="nav-item">
              <a class="nav-link active text-white  rounded-pill" aria-current="page" href="index.html"><b>TRANG CHỦ</b></a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link text-white rounded-pill" href="gioithieu.html"><b>GIỚI THIỆU</b></a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link text-white rounded-pill dropdown-toggle " href="product.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <a class="nav-link text-white rounded-pill" href="document.html"><b>TÀI LIỆU</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded-pill" href="dichvu.html"><b>DỊCH VỤ</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded-pill" href="tuyendung.html"><b>TUYỂN DỤNG</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded-pill" href="lienhe.html"><b>LIÊN HỆ</b></a>
            </li>
            <!-- <li class="search">
              <div id="search">
                <input type="text" name="keyword" id="keyword"
                  onblur="textboxChange(this,false,'Nhập từ khóa tìm kiếm...')"
                  onfocus="textboxChange(this,true,'Tìm kiếm...')" onkeypress="doEnter(event,'keyword');"
                  value="Tìm kiếm...">
                <i class="bi bi-search"></i>
              </div>

            </li> -->
            <style>
              .search {
                position: relative;
                left: 1080px;
                top: -40px;
             /* padding: 10px; */
          
            
              }
            </style>
          </ul>
        </div>
      </div>

      
    </nav>
    <div class="search">
      <div id="search">
        <input type="text" name="keyword" id="keyword"
          onblur="textboxChange(this,false,'Nhập từ khóa tìm kiếm...')"
          onfocus="textboxChange(this,true,'Tìm kiếm...')" onkeypress="doEnter(event,'keyword');"
          value="Tìm kiếm...">
        <i class="bi bi-search"></i>
      </div>
    </div>
    <div class="chungnhan row" style="border: 1px gray solid; margin-right: 0;">
      <div class="col-md-2" style="padding-left: 50px; padding-top: 15px;">
        <div class="chungnhan1"><img src="public/img/111-9659.JPG" alt=""></div>
        <div class="chungnhan2"><img src="public/img/111-9659.JPG" alt=""></div>


      </div>
      <div class="col-md-7">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" style="position: relative;top: -30px;">
            <div class="carousel-item active">
              <img height="500px" width="600px" src="public/img/165khanh-thanh-nha-may-7843.jpg" class="d-block w-100"
                alt="...">

            </div>
            <div class="carousel-item">
              <img height="500px" width="600px" src="public/img/166tong-ket-2014-8523.jpg" class="d-block w-100"
                alt="...">
            </div>
            <div class="carousel-item">
              <img height="500px" width="600px" src="public/img/168nguyen-thien-nhan-3115.png" class="d-block w-100"
                alt="...">
            </div>
          </div>

        </div>
      </div>
      <div class="col-md-3 anh3" style="border: 1px gray solid; margin-top: 20px;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" style="position: relative;top: -30px;">
            <div class="carousel-item active">
              <img height="500px" width="100%" src="public/img/may-nen-bt-xiyi-7950.jpg" class="d-block w-100"
                alt="...">

            </div>
            <div class="carousel-item">
              <img height="500px" width="600px" src="public/img/may-nen-uon-xi-mang-300kn-9781.png" class="d-block w-100"
                alt="...">
            </div>
            <div class="carousel-item">
              <img height="500px" width="600px" src="public/img/may-nen-uon-xi-mang-300kn-9781.png" class="d-block w-100"
                alt="...">
            </div>
          </div>

        </div>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="list-sp row p-3">
    <div class="col-md-3  type">
      <div class="left-titl"><img src="public/img/left_titl.png" alt=""></div>
      <div class="thongtin p-2" style="width: 280px;border: 1px solid #bebebe; height: 300px;">
        <div class="image-nhan">
          <img src="public/img/supp.png" alt="">
          <img src="public/img/hotline.png" alt="">
        </div>
        <br>
        <br><br><br>
        <div class="thongtin-detail p-2">
          <div><img src="public/img/skype.png" alt=""> <img src="public/img/yah.png" alt=""> Mr Nam</div>
          <div style="font-size: 15px;"><img src="public/img/mai.png" alt=""> thietbikiemdinhvietnam@gmail.com</div>
          <div><img src="public/img/tel.png" alt=""> 0917738499</div>

          <div><img src="public/img/skype.png" alt=""> Mr Toan</div>
          <div><img src="public/img/tel.png" alt=""> 0983807130</div>
          <div><img src="public/img/mai.png" alt=""> thietbiphonglas@gmail.com</div>
        </div>


      </div>
      
      <div class="left-titl2"><img src="public/img/left_titl.png" alt=""></div>
      <div class="thongtin p-2" style="width: 280px;border: 1px solid #bebebe; height: 300px;">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner gg" style="position: relative;top: -100px;">
            <div class="carousel-item active gg">
              <img height="280px" width="100%" src="public/img/may-nen-bt-xiyi-7950.jpg" class="d-block w-100"
                alt="...">

            </div>
            <div class="carousel-item">
              <img height="280px" width="100%" src="public/img/may-nen-uon-xi-mang-300kn-9781.png" class="d-block w-100"
                alt="...">
            </div>
            <div class="carousel-item">
              <img height="280px" width="100%" src="public/img/may-nen-uon-xi-mang-300kn-9781.png" class="d-block w-100"
                alt="...">
            </div>
          </div>

        </div>
        <div class="image-nhan">

        </div>


      </div>

      <div class="left-titl3 p-1"><img src="public/img/left_titl.png" alt=""></div>
      <select id="chucnang" name="chucnangc" style="width: 290px; height: 40px; border: 1px solid #bebebe;">
        <option value="link">Liên kết website</option>
        <option value="kiemdinh">Kiểm định xây dựng</option>
        <option value="gtvt">Bộ GTVT</option>
        <option value="xd">Bộ Xây dựng</option>

      </select>
      <div class="thongtin p-1" style="width: 280px;border: 1px solid #bebebe; height: 300px;">


      </div>
 

    </div>
    <div class="col-md-3 type1">

      <div class="titlt">
           @foreach($protypes as $item)
           <!-- @if($item->protype_id ==1) -->
      <div class="titlttype btn btn-primary" id="type" data-type="{{$item->id}}">
                        {{ $item->name}}</div>
                        <!-- @endif -->
                        @endforeach

      </div>
      <div class="thongtin-detailw p-2">
        <div class="card" style="width: 18rem; margin-right: 10px;; margin-top: 10px;">
          <img  style="max-height: 215px; max-width: 95%;" src="public/img/may-nen-bt-xiyi-7950.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">sp 1</p>
          </div>
        </div>
     
        <!-- <img src="public/img/tn-nhua-9445.png" height="300px" width="300px"
          style="width: 280px;border: 1px solid #bebebe; height: 300px;" alt=""> -->
      </div>
    </div>

    <div class="col-md-3 type2">
      <div class="titlte"></div>
     
      <div class="thongtin-detailw p-2">
        <!-- <img src="public/img/tn-nhua-9445.png" height="300px" width="300px"
          style="width: 280px;border: 1px solid #bebebe; height: 300px;" alt=""> -->
          <div class="card" style="width: 18rem; margin-right: 10px;; margin-top: 10px;">
            <img  style="max-height: 215px; max-width: 95%;" src="public/img/may-nen-bt-xiyi-7950.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">sp 2</p>
            </div>
          </div>
       
      </div>
    </div>
    <div class="col-md-3 type3">
          <div class="titlta"><img src="" alt=""></div>
      <div class="thongtin-detailw p-2">
        <div class="card" style="width: 18rem; margin-right: 10px;; margin-top: 10px;">
          <img  style="max-height: 215px; max-width: 95%;" src="public/img/may-nen-bt-xiyi-7950.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">sp 3</p>
       </div>
        </div>
      
        
 
     
  
        </div>
    </div>

  </div>

  <div class="list-sp row p-3 ">
   
   
   

  </div>
 
  <div class="spmain">
    <div class="sp-main" style="text-align: center; width: 100%;">
      <img style="width: 100%; height: 100%;" src="public/img/bg_dm.png" alt="">

    </div>
    <div class="image-sp-chinh row">
      <div id="formList">
        <div id="list">
            <div class="item">
                <img src="public/img/thiet-bi-do-7800.png" class="avatar">
               
            </div>
            <div class="item">
              <img src="public/img/thiet-bi-do-7800.png" class="avatar">
                
            </div>
            <div class="item">
              <img src="public/img/thiet-bi-do-7800.png" class="avatar">
                
            </div>
            <div class="item">
              <img src="public/img/thiet-bi-do-7800.png" class="avatar">
                
            </div>
            <div class="item">
              <img src="public/img/thiet-bi-do-7800.png" class="avatar">
                
            </div>
            <div class="item">
              <img src="public/img/thiet-bi-do-7800.png" class="avatar">
                
            </div>
        </div>
    </div>
    <div class="direction">
      <button id="prev"> < </button>
      <button id="next"> > </button>
  </div>
  
     
    </div>
  </div>
   <div class="menu row p-5">
    <div class="col-md-3">
      <div
        style=" padding:  10px 0px 15px; color: #0043bd ;    font-size: 20px;font-family: 'myFont1';    line-height: 30px; background: url('public/img/dot2.png') repeat-x center">
        Giới thiệu</div>
      <div><img src="public/img/111-6221.png" alt=""></div>
    </div>
    <div class="col-md-3" style="font-size: 15px;
    text-align: justify;">
      T-TECH Việt Nam là doanh nghiệp đi đầu trong lĩnh vực phát triển công nghệ tại Việt Nam. Được thành lập ngày
      06/11/2002, với nhiều năm kinh nghiệm T-TECH đã và đang đưa ra thị trường được rất nhiều sản phẩm có tính công
      nghệ cao, chất lượng tốt,đảm bảo uy tín trên thị trường, góp phần vào việc giảm thiểu nhập siêu, thâm hụt ngoại tệ
      theo chủ trương chung của Nhà Nước. Hiện nay, ngoài...
      <a style="text-decoration: none;color: red;" href="">Xem thêm </a>

    </div>
    <div class="col-md-3">
      <div style=" padding:  10px 0px 15px; color: #0043bd ;    font-size: 20px;font-family: 'myFont1';    line-height: 30px; background: url('public/img/dot2.png') repeat-x center">Video clip</div>

      <iframe width="280" height="197" src="https://www.youtube.com/embed/fGQnLf9GrrA"
        title="Thiết bị kiểm tra ống cống bê tông VIFERA KRT-150" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
    </div>
    <div class="col-md-3">
      <div style=" padding:  10px 0px 15px; color: #0043bd ;    font-size: 20px;font-family: 'myFont1';    line-height: 30px; background: url('public/img/dot2.png') repeat-x center">Thư viện ảnh</div>
      <div><img src="public/img/11610-4298.jpg" width="100%" alt=""></div>
    </div>
  </div>
    <style>
      /* body{
background:#5C717F;
} */
.direction{
text-align: center;
}
.direction button{
font-family: cursive;
font-weight: bold;
background-color: #ffffff44;
border:none;
width:50px;
height:50px;
border-radius: 50%;
transition: 0.5s;
margin:0 10px;
}
.direction button:hover{
background-color: #ffffff;
}
.item{
border-radius: 15px;
width:250px;
height:200px;
background-image: linear-gradient(to top, #AEC0CE, #ECECF2);
overflow: hidden;
transition: 0.5s;
margin:10px;
scroll-snap-align: start;
}
.item .avatar{
display: block;
/* margin:50px auto 10px; */
width:250px;
height:200px;
object-fit: cover;
border-radius: 20px;
/* box-shadow: 0 10px 15px #7e878d; */
}

.item .content{
padding:30px;
font-family: monospace;
}
.item .content table td{
padding:10px 0;
border-bottom: 1px solid #AEC0CE;
}
.item .content table td:nth-child(2){
text-align: right;
}
.item .nameGroup{
text-align: center;
border-bottom:none!important;
}
#list{
display: flex;
width:max-content;
}
#formList{
width:1000px;
max-width: 100%;
overflow: auto;
/* margin:100px auto 50px; */
scroll-behavior: smooth;
scroll-snap-type: both;
}
#formList::-webkit-scrollbar{
display: none;
}
@media screen and (max-width: 1024px){
.item{
    width: calc(33.3vw - 20px);
}
.direction{
    display: none;
}
}
@media screen and (max-width: 768px){
.item{
    width: calc(50vw - 20px);
}
.direction{
    display: none;
}
}

</style>

<script>
  document.getElementById('next').onclick = function(){
const widthItem = document.querySelector('.item').offsetWidth;
document.getElementById('formList').scrollLeft += widthItem;
}
document.getElementById('prev').onclick = function(){
const widthItem = document.querySelector('.item').offsetWidth;
document.getElementById('formList').scrollLeft -= widthItem;
}

</script>
  </div>
 

 
  
 
    
<div class="container">
  

 <div class="f"> <section class="customer-logos slider">
  <div class="slide"><img src="public/img/netflix_web_logo-6895.png" alt="logo"></div>
  <div class="slide"><img src="public/img/images-1779.png" alt="logo"></div>
  <div class="slide"><img src="public/img/dt1-1277.png" alt="logo"></div>
  <div class="slide"><img src="public/img/tai-xuong-6761.jpg" alt="logo"></div>
  <div class="slide"><img src="public/img/netflix_web_logo-6895.png" alt="logo"></div>
  <div class="slide"><img src="public/img/images-1779.png" alt="logo"></div>
  <div class="slide"><img src="public/img/dt1-1277.png" alt="logo"></div>
  <div class="slide"><img src="public/img/tai-xuong-6761.jpg" alt="logo"></div>
 
</section></div>
</div>

<script>
    
  $(document).ready(function(){
      $('.customer-logos').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1500,
          arrows: false,
          dots: false,
          pauseOnHover:false,
          responsive: [{
              breakpoint: 768,
              setting: {
                  slidesToShow:4
              }
          }, {
              breakpoint: 520,
              setting: {
                  slidesToShow: 3
              }
          }]
      });
  });

  </script>

  <nav class="navbar navbar-expand-lg bg-body-tertiary" style=" border: 1px white solid;padding: 0; ">
    <div class="container-fluid menufooter1" style="padding: 4px; background: #0096c8;">

      <button class="navbar-toggler menufooter" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" style="margin-left: 200px;">
          <li class="nav-item">
            <a class="nav-link active" style="color: white;" aria-current="page" href="#">TRANG CHỦ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white;" href="#">GIỚI THIỆU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white;" href="#">SẢN PHẨM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white;" href="#">TÀI LIỆU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white;" href="#">DỊCH VỤ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white;" href="#">TUYỂN DỤNG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white;" href="#">LIÊN HỆ</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>

<div class="container-fluid" style="background: #0096c8;">
  <footer style="background: #0096c8; padding: 5px;">
    <div class="foote row">
      <div class="col-md-3">
        <div> TRỤ SỞ CHÍNH</div>

        <div>ĐC: Tầng 24, Tòa nhà Vinaconex 9,
          Phạm Hùng, Nam Từ Liêm, Hà Nội</div>

        <div>Tel: 0917738499 - 0983807130</div>

        <div style="color: white;">Email: thietbikiemdinhvietnam@gmail.com - thietbiphonglas@gmail.com</div>

        <div>Website: kiemdinhxaydungvietnam.com</div>
      </div>
      <div class="col-md-3">
        <div>NHÀ MÁY CHẾ TẠO THIẾT BỊ T-TECH
        </div>
        <div> ĐC: Lô CN4-6, KCN Thạch Thất,
          H.Quốc Oai, TP. Hà Nội</div>

        <div> Tel: 0917738499 - 0983807130</div>

        <div style="color: white;">Email: thietbikiemdinhvietnam@gmail.com - thietbiphonglas@gmail.com</div>


        <div> Website: kiemdinhxaydungvietnam.com</div>
      </div>
      <div class="col-md-3">
        <div>CHI NHÁNH ĐÀ NẴNG</div>

        <div> ĐC: Số 161 Nguyễn Chánh
          P. Hòa khánh Bắc, Q. Liên Chiểu, TP. Đà Nẵng</div>

        <div> Tel: 0917738499 - 0983807130</div>

        <div style="color: white;">Email: thietbikiemdinhvietnam@gmail.com - thietbiphonglas@gmail.com</div>


        <div> Website: kiemdinhxaydungvietnam.com</div>
      </div>
      <div class="col-md-3">
        <div>CHI NHÁNH HỒ CHÍ MINH</div>

        <div> ĐC: Số 722 Lê Văn Khương
          khu phố 7, P.Thới An, Q.12, TP. HCM</div>

        <div> Tel: 0917738499 - 0983807130</div>

        <div style="color: white;">Email: thietbikiemdinhvietnam@gmail.com - thietbiphonglas@gmail.com</div>


        <div> Website: kiemdinhxaydungvietnam.com</div>
      </div>
    </div>
    <div class="nguon" style=" border: 1px white solid;color: white; ">Đang online: 7 | Truy cập tuần: 162 | Truy cập
      tháng: 162 | Tổng truy cập: 332035</div>
  </footer>
</div>
  <script src="d.js"></script>
  <script src="public/js/ajax.js"></script>

  <script src="public/js/script.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
 
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</body>

</html>