@extends('layout')
@section('content')
<title>kiem dinh xay dung, may nen be tong, may keo thep, may nen xi mang, khuan duc mau be tong</title>

<div class="container-fluid">
  
  <div class="list-sp row p-3">
    <div class="col-md-3">
      <div class="left-titl"><img src="public/img/left_titl.png" alt=""></div>
      <div class="thongtin p-2" style="width: 300px;border: 1px solid #bebebe; height: 300px;">
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
            <div class="carousel-item active">
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
    <div class="col-md-9">

      <div class="gioithieu-tit">
      </div>
      <div class="thongtin-detailw row p-2">
    <div class="col-12">
      <div class="chiase" style="padding: 0; font-size: 11px;">
        <button class="button  text-white" title="Thích" style="width: 70px; height: 20px; border-radius: 3px;background: #1877f2; border: 1px solid #1877f2;">
            <i class="fa fa-heart"></i>
            <span>Like</span> <span>0</span>
          </button>
          <button class="button  text-white" style="width: 80px; height: 20px;border-radius: 3px;background: #1877f2; border: 1px solid #1877f2;">
            <i class="fa fa-heart"></i>
            <span>Chia sẻ</span> <span>0</span>
          </button>
          <button class="button  text-white" style="width: 80px; height: 20px;border-radius: 3px;background: #fe6d4c; border: 1px solid #fe6d4c;">
            
            <i class="bi bi-plus-square "></i>
            <span>Chia sẻ</span> <span>0</span>
          </button>
       </div>
           <div class="tieude_giua">FILE TÀI LIỆU</div>

           <style>
            .tieude_giua {
    border-bottom: 2px #0096C8 solid;
    color: #0096C8;
    font-family: 'myFont1';
    font-size: 18px;
    height: 35px;
    line-height: 35px;
}
           </style>
<style>table, th, td {
    border: 1px solid black;
  }</style>
           <table  cellpadding="0" cellspacing="0" style="text-align: center; width:50%;" margin-top:20px; border:1px #ccc solid; text-lign:center;">
			<tbody><tr>
				<th>Tên tài liệu</th>
				<th>Download</th>
			</tr>
						<tr>
				<td style="text-align: center;"></td>
				<td style="text-align: center;"><a href="download.php?file=tcxdvn-297-2003-4116.pdf">Download</a></td>
			</tr>
						<tr>
				<td style="text-align: center;"></td>
				<td style="text-align: center;"><a href="download.php?file=tcxdvn-297-2003-8466.pdf">Download</a></td>
			</tr>
					</tbody></table>

    </div>
    <div class="col-7">
       
        <div class="othernews">
            <div class="cactinkhac">Các bài khác</div>
            <ul>
                                   <li><a href="tai-lieu/catalog-thiet-bi-phat-thanh-truyen-hinh-13.html" title="Catalog Thiết bị Phát thanh truyền hình:">Catalog Thiết bị Phát thanh truyền hình:</a> (16.01.2016)</li>
                                   <li><a href="tai-lieu/catalog-thong-tin-san-pham-lo-dot-rac-thai-sinh-hoat-12.html" title="Catalog thông tin sản phẩm Lò đốt rác thải sinh hoạt: ">Catalog thông tin sản phẩm Lò đốt rác thải sinh hoạt: </a> (16.01.2016)</li>
                                   <li><a href="tai-lieu/catalog-thiet-bi-thi-nghiem-xay-dung-ttech-7.html" title="Catalog Thiết bị thí nghiệm xây dựng T-TECH: ">Catalog Thiết bị thí nghiệm xây dựng T-TECH: </a> (30.05.2015)</li>
                            </ul>
       </div>
       <style>.othernews .cactinkhac {
        font-size: 20px;
        color: #0066FF;
    }</style>
    </div>
     
    <div>
      
        
         
    </div>
   
      
      
      
    </div>
   
      </div>
     
    
    </div>

   

  

 
  <div class="spmain">
    <div class="sp-main" style="text-align: center;">
      <img src="public/img/bg_dm.png" alt="">

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
      <style>
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
  width:250px;
  height:200px;
  object-fit: cover;
  border-radius: 20px;
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

</div>
<script src="public/js/script-tuyendung.js"></script>
@endsection
  