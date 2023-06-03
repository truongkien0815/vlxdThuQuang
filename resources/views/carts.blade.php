@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('fe/css/cart.css')}}">

<div class="container-fluid">
    <div class="list">
        <div class="row">
            <div class="col-md-3 danhmuc_lon">

                <div class="danhmuc">
                    <div class="dm"><b>DANH MỤC SẢN PHẨM</b></div>
                    <br>
                    <ul>
                        @foreach($types as$item)
                        <li>{{ $item->type_name}}
                            <ul>
                                @foreach($types2 as $icon)
                                @if($item->type_id == $icon->pid)
                                <li><a href="{{url('type/'.$icon->slug)}}">{{ $icon->type_name}}</a>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </li>
                        @endforeach


                    </ul>
                    <div class="new-sp">SẢN PHẨM MỚI</div>
                    <div class="item">
                        <img src="http://hungthinhco.net/uploads/products/0" alt="">
                        <a title="" href="">
                            GHOST
                            100</a><br>
                        <b>&nbsp;đ</b>
                        <div class="clearfix"></div>
                    </div>
                    @foreach($pro_new as $new_sp)
                    <div class="item">
                        <img src="{{ asset('fe/img/'.$new_sp->product_image)}}"
                            alt=" {{ $new_sp->product_name}}">

                        <a title=" {{ $new_sp->product_name}}"
                            href="{{asset('product/'. $new_sp->slug)}}">
                            {{ $new_sp->product_name}}</a><br>
                        <b>&nbsp;đ</b>
                        <div class="clearfix"></div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9 table_ne">
                <table class="table table-bordered" style="margin-top:20px">
                    <thead>
                        <tr>
                            <!-- <th style="text-align: center; vertical-align: middle">STT</th> -->
                            <th style="text-align: center; vertical-align: middle">Hình</th>
                            <th style="text-align: center; vertical-align: middle">Tên</th>
                            <th style="text-align: center; vertical-align: middle">Số lượng</th>
                            <th style="text-align: center; vertical-align: middle">Giá</th>
                            <th style="text-align: center; vertical-align: middle">Tổng</th>
                            <th style="text-align: center; vertical-align: middle">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$stt = 1;
						$total = 0;
						foreach ($allproducts as $value) {
							if (session()->has('carts' . $value->id)) { ?>
                        <tr>

                            <td style="text-align: center; padding-left: 25px">
                                <div class="product-widget">
                                    <div class="product-img cart_im">
                                        <a href="{{ url('/product/'.$value->slug) }}">
                                            <img src="{{ asset('fe/img/'.$value->product_image) }}" alt="">

                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td style="text-align: center; vertical-align: middle">{{ $value->product_name }}</td>
                            <td style="text-align: center; vertical-align: middle">
                                <div style="text-align: center; dips">


                                    <a class="btn " href="{{ url('/carts/+/'.$value->id) }}" class="plus">
                                        <img src="{{ asset('icon/plus.png')}}" alt="">
                                    </a>

                                    {{ session()->get('carts' . $value->id) }}
                                    <a class="btn " href="{{ url('/carts/-/'.$value->id) }}" class="plus">
                                        <img src="{{ asset('icon/subtract.png')}}" alt="">
                                    </a>
                                </div>
                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <!--  -->
                            </td>
                            <td style="text-align: center; vertical-align: middle">

                            </td>
                            <td style="text-align: center; vertical-align: middle">
                                <a href="{{ url('/carts/delete/'.$value->id) }}" data-sp-ma="2" class="btn  ">
                                    <i class="fa" aria-hidden="true"></i>
                                    <img src="{{ asset('icon/cancel.png')}}" alt="">
                                </a>
                            </td>
                        </tr>
                        <?php
							}
						}
						?>
                    </tbody>
                </table>
                <div class="row p-2">
                    <div class="buttons">
                        <div class="col-md-6 text-left">
                            <a href="{{ url('/') }}" class="button"><i class="fa fa-arrow-left"
                                    aria-hidden="true"></i>&nbsp;Tiếp tục mua
                                hàng</a>

                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ url('/checkout') }}" class="button"><i class="fa fa-shopping-cart"
                                    aria-hidden="true"></i>&nbsp;Thanh toán</a>
                            <!-- <h3>Total payment: <strong style="color: crimson">{{ number_format($total).' đ' }}</strong></3> -->
                        </div>
                    </div>
                </div>
        </div>
                    </div>
                    </div>
                    </div>





            @endsection
            <style>
            .button:hover {
                color:#fff;
            }
          
            </style>