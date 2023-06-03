@extends('layout')
@section('content')
<div class="breadcrumbs d-flex flex-row align-items-center">
    <!-- <ul>
        <li><a href="index.html" style="color:black">Home</a></li>
        <li class="active"><a style="color:black" href="index.html">Men's <i class="fa fa-angle-right"
                    aria-hidden="true"></i></a></li>
    </ul> -->
</div>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <!-- <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Checkout</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Checkout</li>
                </ul>
            </div>
        </div> -->
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-7">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Đặt hàng</h3>
                    </div>
                    <form action="{{ url('/createpayment') }}" method="get">



                        <div class="form-group">
                            <label for="#">
                                <h5>Họ tên</h5>
                            </label>
                            <input class="form-control" type="text" required="required" name="name"
                                placeholder="Họ tên">

                        </div>

                        <div class="form-group">
                            <label for="#">
                                <h5>Địa chỉ</h5>
                            </label>

                            <input class="form-control" type="text" required="required" name="address"
                                placeholder="Địa chỉ">
                        </div>
                        <div class="form-group">
                            <label for="#">
                                <h5>Điện thoại</h5>
                            </label>
                            <input class="form-control" type="tel" required="required" pattern="^[0-9]{10,11}$"
                                name="telephone" placeholder="Số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="#">
                                <h5>Email</h5>
                            </label>
                            <input class="form-control" type="email" required="required" name="email"
                                placeholder="email">

                        </div>



                </div>
                <!-- /Billing Details -->

                <!-- Shiping Details -->
                <!-- <div class="shiping-details">
                    <div class="section-title">
                        <h3 class="title">Shiping address</h3>
                    </div>

                </div> -->
                <!-- /Shiping Details -->


            </div>









            <!-- Order Details -->
            <div class="col-md-5 order-details">

                <div class="onecheckout">
                    <div id="confirm">
                        <div class="onecheckout-heading">Xác nhận đơn hàng</div>
                        <div class="onecheckout-content" style="display: block;">
                            <div class="onecheckout-product">
                                <table>
                                    <thead>
                                        <tr>
                                            <td class="name">Sản phẩm</td>
                                            <td class="quantity">Số lượng</td>
                                            <td class="price">Giá</td>
                                            <td class="total">Tổng</td>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
						$total = 0;
						foreach ($allproducts as $value) {
							if (session()->has('carts' . $value->id)) { ?>



                                        <?php 
										
										
										?>


                                        <tr>
                                            <td class="name"><a
                                                    href="{{asset('product/'. $value->slug)}}">{{ $value->product_name}}
                                                </a>
                                            </td>
                                            <td class="quantity"> {{session()->get('carts' . $value->id)."x "}}</td>
                                            <td class="price">{{ $value->price}} VNĐ</td>
                                            <td class="total">0 VNĐ</td>
                                        </tr>
                                    </tbody>
                                    <?php }} ?>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" class="price"><b>Tổng phụ:</b></td>
                                            <td colspan="2" class="total">0 VNĐ</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="price"><b>Tổng:</b></td>
                                            <td colspan="2" class="total">0 VNĐ</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- <div class="cart-module">
  <div class="cart-heading"><span style="color: #ff6c00">Mã giảm giá</span></div>
  <div class="cart-content" id="coupon">Điền mã giảm giá:&nbsp;<br>
    <input type="text" name="coupon" value="">
    &nbsp;<a id="button-coupon" class="button"><span>Cập nhật</span></a></div>
</div> -->
                            <!-- <div class="buttons">
                                <div style="text-align:right;"><a id="button-confirmorder" class="button"><span>Xác
                                            nhận</span></a></div>
                            </div> -->
                        </div>
                    </div>
                </div>




                <button class="button" type="submit">

                    <div style="text-align:right;"><a id="button-confirmorder" class="button">
                            <span style="text-align:center;">Xác nhận</span></a></div>
                </button>
























            </div>
            </form>
            <!-- /Order Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
@endsection