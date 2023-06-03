@foreach($post as $item)
<title>{{ $item->title}}</title>
@endforeach
<meta name="Keywords" content="phu kien cua cuon|phụ kiện cửa cuốn|luu dien cua cuon|lưu điện cửa cuốn|Cửa cuốn Hùng Thịnh" />
<meta name="Description" content="Công ty tnhh Đầu tư tm - dv- xnk Hùng thịnh chuyên phân phối sỉ lẻ phụ kiện cửa cuốn,lưu điện cửa cuốn...hàng chính hãng giá rẻ..liên hệ 0909 021 158 - (028).62674 478 - Fax: (028) 39745 593" />
@extends('layout')
@section('content')

<div class="container-fluid">



    <div class="list">



        <div class="row">

            <div class="col-md-11 margin_conent" style="margin-left:80px">
                <div class="category">
                    <a title="Cổng trượt tự động"
                        href="">BẢO HÀNH </a>


                </div>




                <div class="container-fluid">

                    @foreach($post as $item)
                    <div class="detail" style="">
                        <div style="font-size:20px">
                           
                            {!! $item->noidung!!}
                        </div>


                        <!-- <strong>CHẾ ĐỘ BẢO HÀNH</strong><br>
                    Khi khách hàng sử dụng sản phẩm dịch vụ của HÙNG THỊNH, khách hàng sẽ thực sự yên tâm với
                    chính sách bảo hành của chúng công ty chúng tôi. <strong><em>Tốt nhất, nhanh nhất và hiệu
                            quả nhất</em></strong>.<br>
                    <strong><em>Dưới đây là chi tiết về chính sách bảo hành của chúng tôi:</em></strong><br>
                    <img alt="*" height="13"
                        src="file:///C:/Users/welcome/AppData/Local/Temp/msohtmlclip1/01/clip_image001.gif"
                        width="13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tất cả các
                    sản phẩm như &nbsp;thiết bị cửa cuốn, thiết bị cửa cổng và cửa tự động &nbsp;do Công Ty HÙNG
                    THỊNH phân phối đều được đăng ký bảo hành &nbsp;từ nhà sản xuất, quý khách hàng sẽ được nhận
                    phiếu&nbsp;bảo hành từ Công ty HÙNG THỊNH để hưởng dịch vụ bảo hành tốt nhất (sửa chữa hay
                    thay thế miễn phí các phụ kiện bị hư hỏng trong thời gian bảo hành mà do lỗi của nhà sản
                    xuất).<br>
                    <img alt="*" height="13"
                        src="file:///C:/Users/welcome/AppData/Local/Temp/msohtmlclip1/01/clip_image001.gif"
                        width="13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thời gian
                    bảo hành được ghi chi tiết trên tem bao hành cho tường sản phẩm cụ thể.<br>
                    <img alt="*" height="13"
                        src="file:///C:/Users/welcome/AppData/Local/Temp/msohtmlclip1/01/clip_image001.gif"
                        width="13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đối
                    với&nbsp;khách hàng lắp trọn bộ Thiết bị &nbsp;do nhân viên Công ty HÙNG THỊNH lắp đặt ,
                    Nhân viên Công ty HÙNG THỊNH sẽ bảo hành nơi (công trình).<br>
                    <img alt="*" height="13"
                        src="file:///C:/Users/welcome/AppData/Local/Temp/msohtmlclip1/01/clip_image001.gif"
                        width="13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đối với
                    các sản phẩm mua từ công ty HÙNG THỊNH ( không lắp đặt ), chúng tôi bảo hành tại văn phòng
                    Công ty HÙNG THỊNH. Mọi chi phí phát sinh để vận chuyển sản phẩm do bên khách hàng tự chi
                    trả.<br>
                    <img alt="*" height="13"
                        src="file:///C:/Users/welcome/AppData/Local/Temp/msohtmlclip1/01/clip_image001.gif"
                        width="13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trong thời
                    gian bảo hành, Công ty HÙNG THỊNH sẽ thực hiện bảo hành sản phẩm trong các trường hợp sau
                    :<br>
                    ü&nbsp; Khách hàng xuất trình phiếu bảo hành hoặc biên bản nghiệm thu từ <strong>Công ty
                        HÙNG THỊNH</strong><br>
                    ü&nbsp; Tem bảo bảo hành dán trên sản phẩm của nhà sản xuất&nbsp;phải còn nguyên vẹn không
                    &nbsp;bị rách nát<br>
                    ü&nbsp; Phần động cơ và mạch điều khiển chính không có dấu hiệu cậy, phá, tự sửa
                    chữa&nbsp;<br>
                    <strong><em>Công ty HÙNG THỊNH sẽ bảo trì cho các trường hợp sau :</em></strong><br>
                    ü&nbsp; Khách hàng tự sửa chữa hoặc làm thay đổi cấu tạo cửa mà không được ủy quyền của Công
                    ty.<br>
                    ü&nbsp; Vận hành không đúng hướng dẫn sử dụng như : Dùng sai điện áp, phần thân cửa bị hư
                    hỏng do sử dụng vô tình hay cố ý gây ra.<br>
                    ü&nbsp; Phần động cơ, hộp điều khiển không còn nguyên vẹn tem nhãn hoặc đã hết hạn bảo
                    hành.<br>
                    ü&nbsp; Các trường hợp bất khả kháng khác như : Thiên tai, hỏa hoạn, động đất, lũ lụt, môi
                    trường có chất ăn mòn hóa học…<br>
                    ü&nbsp; Phiếu bảo hành không còn giá trị hoặc tẩy xóa, rách nát không đọc được nội dung. -->
                    </div>
                    @endforeach
                </div>






























            </div>
        </div>
    </div>


</div>

@endsection