
const ppp = document.querySelectorAll('.product_image');
// Hien thi chi tiet san pham
ppp.forEach(element => {
    element.addEventListener('click', (e) => {
        // alert("1");
        getProductDetail(element.dataset.idp);
      
    });
});



async function getProductDetail(idp)
{
    //hiển thị
    // const loader = document.querySelector(".loader");
    // loader.classList.remove('d-none');
    //bước 1 :url, data, fetch
    const url = '../api/product/showe';
 const data ={ idp: idp };
 const response = await fetch(url, {
     method: "POST",
     headers:{
         "Content-Type": "application/json; charset-utf-8",
         "Accept": "application/json; charset-utf-8"
     },
     body: JSON.stringify(data)
     
 });
// bước 2 :đọc dữ liệu trả về

 const result = await response.json();
 //ẩn loader
//  loader.classList.add('d-none');
// bước 3 : Hiển thị giao diện
//  const divResult = document.querySelector("#list");
 const divResult = document.querySelector("#exampleModalLabel");
 const titlechitiet = document.querySelector(".ff");

 divResult.innerHTML ='';
 titlechitiet.innerHTML ='';

// divResult.innerHTML= result.product_name;
titlechitiet.innerHTML = `
<div class="product-price">Tên người liên hệ: ${result.fullname}</div>
<div> Số điện thoại: ${result.mobile}</div>

<div class="product-description">Gmail: ${result.email}</div>
<div class="product-price">Tiêu để: ${result.subject}</div>
<div class="product-price">Địa chỉ : ${result.address}</div>
<div class="product-price">Nội dung : ${result.content}</div>
<div class="product-price">Trạng thái: ${result.status}</div>
<div class="product-price">Ngày: ${result.created_at}</div>




`;
divResult.innerHTML = `<div class="product-price">Thông tin chi tiết :</div>
`;




}