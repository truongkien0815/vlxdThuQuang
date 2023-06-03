@extends('layout')
@section('content')
<title>san pham</title>
<div class="container-fluid">
    <div class="list">
        <div class="row p-3">
            <div class="col-md-3">

                <div class="danhmuc">
                    <div class="dm"><b>DANH MỤC SẢN PHẨM</b></div>
                    <ul>
                        @foreach($types as$item)
                        <li>{{ $item->type_name}}
                            <ul>
                                <li>r</li>
                                <li>r</li>
                            </ul>
                        </li>
                        @endforeach
                      

                    </ul>
                    <div class="new-sp">SẢN PHẨM MỚI</div>
                    <div class="item">
                        <img src="http://hungthinhco.net/uploads/products/0" alt="">
                        <a title="" href="http://hungthinhco.net/motor-cua-cong-tu-dong/ghost-100.html">GHOST
                            100</a><br>
                        <b>&nbsp;đ</b>
                        <div class="clearfix"></div>
                    </div>

                    <div class="item">
                        <img src="http://hungthinhco.net/uploads/products/2071307190_b103e582369dd0c3898c.jpg"
                            alt="Cửa cổng mở âm sàn DEA  GOT100 - Made in ITALY">
                        <a title="Cửa cổng mở âm sàn DEA  GOT100 - Made in ITALY"
                            href="http://hungthinhco.net/cua-cong-mo-am-san-made-in-italy/cua-cong-mo-am-san-dea-got100-made-in-italy.html">Cửa
                            cổng mở âm sàn DEA GOT100 - Made in ITALY</a><br>
                        <b>&nbsp;đ</b>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>

            <div class="col-md-9">
                <div class="category">
                    <a title="Cổng trượt tự động"
                        href="https://hethongcongtudong.com/cong-tu-dong/cong-truot-tu-dong">Cổng trượt tự
                        động</a>


                </div>
                <div class="categorywallandfile8_meta">Đồng Tâm cung cấp nhiều mẫu cổng trượt có động cơ theo yêu cầu
                    khách hàng.
                    Báo giá mô tơ cổng lùa tự động Ý, Đức, Malaysia, Đài Loan chính hãng.</div>

                @foreach($product as $item)
                <div class="sanpham">
                    <div class="ct8bd">
                        <div class="image">
                            <a style="	font-size: 0px;" title="Cổng trượt V2 - Ayros 600D -24V"
                                href="{{asset('product/'. $item->slug)}}"><img title="Cổng trượt V2 - Ayros 600D -24V"
                                    style="width: 100%;height: 200px; display: inline;" class="lazy"
                                    data-original="https://hethongcongtudong.com/image/cache/data/V2/v2 aros/IMG_3805-200x200.jpg"
                                    alt="Cổng trượt V2 - Ayros 600D -24V"
                                    src="{{asset('fe/img/'.$item->product_image)}}"></a>
                        </div>
                        <div class="tensp"><a title="Cổng trượt V2 - Ayros 600D -24V"
                                href="https://hethongcongtudong.com/cong-truot-v2-ayros-600d-24v">{{$item->product_name}}</a>

                        </div>

                        <div class="widget-sub-banners"></div>
                        <div class="model">Ayros600d</div>

                        <div class="gia">
                            <div class="giamoi">Liên hệ</div>

                        </div>




                    </div>
                    <div class="chitietvsmua">
                        <div class="chitiet"><a title="Cổng trượt V2 - Ayros 600D -24V"
                                href="https://hethongcongtudong.com/cong-truot-v2-ayros-600d-24v">Chi tiết</a></div>
                        <div class="mua"><a
                                href="https://hethongcongtudong.com/index.php?route=checkout/cart&amp;product_id=593"
                                title="Mua hàng">Đặt hàng</a></div>
                    </div>
                </div>
                @endforeach
            







            </div>
        </div>
    </div>

    <div class="new-feed">
        <div class="new-name">
            TIN MỚI NHẤT
        </div>
        <div class="row p-5">
            <div class="col-md-3">
                <div class="new-post">

                    <div class="name-post">
                        <a href="https://hethongcongtudong.com/mau-cong-sat-dep"><img
                                src="https://hethongcongtudong.com/image/cache/data/SEO/mau-cong-sat-dep-13-480x240.jpg"
                                width="300px" height="300px">10+ Mẫu cổng sắt đẹp và sang trọng cho ngôi nhà</a>
                    </div>
                    <div class="metatin"> Các mẫu cổng sắt đẹp, sang trọng bạn có thể tham khảo cho ngôi nhà trong
                        bài viết dưới đây. </div>
                    <div class="doctiep-a">
                        <a title="10+ Mẫu cổng sắt đẹp và sang trọng cho ngôi nhà"
                            href="https://hethongcongtudong.com/mau-cong-sat-dep">Đọc thêm</a>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="new-post">

                    <div class="name-post">
                        <a href="https://hethongcongtudong.com/mau-cong-sat-dep"><img
                                src="https://hethongcongtudong.com/image/cache/data/SEO/mau-cong-sat-dep-13-480x240.jpg"
                                width="300px" height="300px">
                            10+ Mẫu cổng sắt đẹp và sang trọng cho ngôi nhà</a>
                    </div>
                    <div class="metatin"> Các mẫu cổng sắt đẹp, sang trọng bạn có thể tham khảo cho ngôi nhà trong
                        bài viết dưới đây. </div>
                    <div class="doctiep-a">
                        <a title="10+ Mẫu cổng sắt đẹp và sang trọng cho ngôi nhà"
                            href="https://hethongcongtudong.com/mau-cong-sat-dep">Đọc thêm</a>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="new-post">

                    <div class="name-post">
                        <a href="https://hethongcongtudong.com/mau-cong-sat-dep"><img
                                src="https://hethongcongtudong.com/image/cache/data/SEO/mau-cong-sat-dep-13-480x240.jpg"
                                width="300px" height="300px">10+ Mẫu cổng sắt đẹp và sang trọng cho ngôi nhà</a>
                    </div>
                    <div class="metatin"> Các mẫu cổng sắt đẹp, sang trọng bạn có thể tham khảo cho ngôi nhà trong
                        bài viết dưới đây. </div>
                    <div class="doctiep-a">
                        <a title="10+ Mẫu cổng sắt đẹp và sang trọng cho ngôi nhà"
                            href="https://hethongcongtudong.com/mau-cong-sat-dep">Đọc thêm</a>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="new-post">

                    <div class="name-post">
                        <a href="https://hethongcongtudong.com/mau-cong-sat-dep"><img
                                src="https://hethongcongtudong.com/image/cache/data/SEO/mau-cong-sat-dep-13-480x240.jpg"
                                width="300px" height="300px">10+ Mẫu cổng sắt đẹp và sang trọng cho ngôi nhà</a>
                    </div>
                    <div class="metatin"> Các mẫu cổng sắt đẹp, sang trọng bạn có thể tham khảo cho ngôi nhà trong
                        bài viết dưới đây. </div>
                    <div class="doctiep-a">
                        <a title="10+ Mẫu cổng sắt đẹp và sang trọng cho ngôi nhà"
                            href="https://hethongcongtudong.com/mau-cong-sat-dep">Đọc thêm</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


@endsection