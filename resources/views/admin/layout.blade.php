<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Projects</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Font: Source Sans Pro -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="{{asset('plugins/codemirror/codemirror.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/codemirror/theme/monokai.css')}}">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="{{asset('plugins/simplemde/simplemde.min.css')}}">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">









    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('lienhe')}}" class="nav-link">Contact</a>
                </li>
                <div class="modal-footer">

                    <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> -->
                    <form method="POST" action="{{ route('logout') }}" class="btn btn-secondary bi bi-box-arrow-left ">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();"
                            style="text-decoration: none; color: #fff !important">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--  -->


                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/')}}" class="brand-link">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <style>
                    .name-t {
                        color: white;
                    }
                    </style>
                    <div class="info">
                        @if(Auth::check())

                        <div class="name-t"> {{     Auth::user()->name    }}</div>
                        <!-- <a href="#" class="d-block">Alexander Pierce</a> -->
                        @else
                        {{      "chua dang nhap "  }}
                        @endif
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <!-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->




                        <!-- <li class="nav-header">EXAMPLES</li> -->




                        <!-- <li class="nav-item menu-open">

                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="#" class="nav-link">

                                      
                                        <p>
                                            <p>QUẢN LÝ đơn hàng</p>
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('payment')}}" class="nav-link">
                                              
                                                <i class="bi bi-plus-lg"></i>
                                                <p>Danh sách người mua</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('payment/create')}}" class="nav-link">

                                                <i class="bi bi-plus-lg"></i>
                                                <p>Thêm người mua</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->
                        <!--  -->
                        <!-- <li class="nav-item menu-open">

                                    <ul class="nav nav-treeview">

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">

                                             
                                                <p>
                                                    <p>QUẢN LÝ chi tiết đơn hàng</p>
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ url('detail')}}" class="nav-link">
                                                      
                                                        <i class="bi bi-plus-lg"></i>
                                                        <p>Chi tiết đơn hàng</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('detail/create')}}" class="nav-link">

                                                        <i class="bi bi-plus-lg"></i>
                                                        <p>Thêm đơn hàng</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li> -->




                        <li class="nav-item menu-open">

                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="#" class="nav-link">

                                        <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                        <p>
                                            <p>QUẢN LÝ SẢN PHẨM</p>
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('admin/products')}}" class="nav-link">
                                                <!-- <i class="far fa-circle nav-icon"></i> -->
                                                <i class="bi bi-plus-lg"></i>
                                                <p>Danh sách sách phẩm</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('addproduct')}}" class="nav-link">

                                                <i class="bi bi-plus-lg"></i>
                                                <p>Thêm sản phẩm</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <!--  -->
                                <li class="nav-item menu-open">

                                    <ul class="nav nav-treeview">

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">

                                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                                <p>
                                                    <p>QUẢN LÝ DANH MỤC SP</p>
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ url('type')}}" class="nav-link">
                                                        <!-- <i class="far fa-circle nav-icon"></i> -->
                                                        <i class="bi bi-plus-lg"></i>
                                                        <p>Danh mục sản phẩm</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('addtype')}}" class="nav-link">

                                                        <i class="bi bi-plus-lg"></i>
                                                        <p>Thêm danh mục sản phẩm</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--  -->
                                        <!--  -->

                                        <li class="nav-item menu-open">

                                            <ul class="nav nav-treeview">

                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">


                                                        <p>
                                                            <p>QUẢN LÝ DANH MỤC SP CHÍNH</p>
                                                            <i class="right fas fa-angle-left"></i>
                                                        </p>
                                                    </a>
                                                    <ul class="nav nav-treeview">
                                                        <li class="nav-item">
                                                            <a href="{{ url('protype')}}" class="nav-link">

                                                                <i class="bi bi-plus-lg"></i>
                                                                <p>Danh mục sản phẩm chính</p>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ url('addprotype')}}" class="nav-link">

                                                                <i class="bi bi-plus-lg"></i>
                                                                <p>Thêm danh mục sản phẩm chính</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <!--  -->
                                                <!--  -->

                                                <li class="nav-item menu-open">

                                                    <ul class="nav nav-treeview">

                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">


                                                                <p>
                                                                    <p>QUẢN LÝ Menu con</p>
                                                                    <i class="right fas fa-angle-left"></i>
                                                                </p>
                                                            </a>
                                                            <ul class="nav nav-treeview">
                                                                <li class="nav-item">
                                                                    <a href="{{ url('item')}}" class="nav-link">

                                                                        <i class="bi bi-plus-lg"></i>
                                                                        <p>Danh mục Menu con</p>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="{{ url('additem')}}" class="nav-link">

                                                                        <i class="bi bi-plus-lg"></i>
                                                                        <p>Thêm Menu con</p>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>

                                                        <!--  -->




                                                        <li class="nav-item menu-open">

                                                            <ul class="nav nav-treeview">

                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link">

                                                                        <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                                                        <p>
                                                                            <p>QUẢN LÝ BÀI VIẾT</p>
                                                                            <i class="right fas fa-angle-left"></i>
                                                                        </p>
                                                                    </a>
                                                                    <ul class="nav nav-treeview">
                                                                        <li class="nav-item">
                                                                            <a href="{{ url('post')}}" class="nav-link">

                                                                                <i class="bi bi-plus-lg"></i>
                                                                                <p>Danh sách bài viết</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a href="{{ url('addpost')}}"
                                                                                class="nav-link">

                                                                                <i class="bi bi-plus-lg"></i>
                                                                                <p>Thêm bài viết</p>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>

                                                                <!--  -->
                                                                <li class="nav-item menu-open">

                                                                    <ul class="nav nav-treeview">

                                                                        <li class="nav-item">
                                                                            <a href="#" class="nav-link">

                                                                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                                                                <p>
                                                                                    <p>QUẢN LÝ THÔNG TIN LIÊN HỆ
                                                                                    </p>
                                                                                    <i
                                                                                        class="right fas fa-angle-left"></i>
                                                                                </p>
                                                                            </a>
                                                                            <ul class="nav nav-treeview">
                                                                                <li class="nav-item">
                                                                                    <a href="{{ url('contact')}}"
                                                                                        class="nav-link">

                                                                                        <i class="bi bi-plus-lg"></i>
                                                                                        <p>Danh sách thông tin
                                                                                            liên hệ</p>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a href="{{ url('addcontact')}}"
                                                                                        class="nav-link">

                                                                                        <i class="bi bi-plus-lg"></i>
                                                                                        <p>Thêm thông tin liên
                                                                                            hệ</p>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>

                                                                        <!--  -->
                                                                        <!-- <li class="nav-item menu-open">

                                                                                    <ul class="nav nav-treeview">

                                                                                        <li class="nav-item">
                                                                                            <a href="#"
                                                                                                class="nav-link">

                                                                                             
                                                                                                <p>
                                                                                                    <p>QUẢN LÝ TÀI LIỆU
                                                                                                    </p>
                                                                                                    <i
                                                                                                        class="right fas fa-angle-left"></i>
                                                                                                </p>
                                                                                            </a>
                                                                                            <ul
                                                                                                class="nav nav-treeview">
                                                                                                <li class="nav-item">
                                                                                                    <a href="{{ url('page_document')}}"
                                                                                                        class="nav-link">
                                                                                                        <i
                                                                                                            class="bi bi-plus-lg"></i>

                                                                                                        <p>Danh sách tài
                                                                                                            liệu</p>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="nav-item">
                                                                                                    <a href="{{ url('adddocument')}}"
                                                                                                        class="nav-link">

                                                                                                        <i
                                                                                                            class="bi bi-plus-lg"></i>
                                                                                                        <p>Thêm tài liệu
                                                                                                        </p>
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li> -->
                                                                        <!--  -->

                                                                        <li class="nav-item menu-open">

                                                                            <ul class="nav nav-treeview">

                                                                                <li class="nav-item">
                                                                                    <a href="#" class="nav-link">

                                                                                        <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                                                                        <p>
                                                                                            <p>QUẢN LÝ
                                                                                                TÀI
                                                                                                KHOẢN
                                                                                            </p>
                                                                                            <i
                                                                                                class="right fas fa-angle-left"></i>
                                                                                        </p>
                                                                                    </a>
                                                                                    <ul class="nav nav-treeview">
                                                                                        <li class="nav-item">
                                                                                            <a href="{{ url('user')}}"
                                                                                                class="nav-link">
                                                                                                <i
                                                                                                    class="bi bi-plus-lg"></i>

                                                                                                <p>Danh
                                                                                                    sách
                                                                                                    tài
                                                                                                    khoản
                                                                                                </p>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="nav-item">
                                                                                            <a href="{{ url('adduser')}}"
                                                                                                class="nav-link">

                                                                                                <i
                                                                                                    class="bi bi-plus-lg"></i>
                                                                                                <p>Thêm
                                                                                                    tài
                                                                                                    khoản
                                                                                                </p>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>


                                                                                <!--  -->

                                                                                <li class="nav-item menu-open">

                                                                                    <ul class="nav nav-treeview">

                                                                                        <li class="nav-item">
                                                                                            <a href="#"
                                                                                                class="nav-link">

                                                                                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                                                                                <p>
                                                                                                    <p>QUẢN
                                                                                                        LÝ
                                                                                                        SĐT WEB
                                                                                                    </p>
                                                                                                    <i
                                                                                                        class="right fas fa-angle-left"></i>
                                                                                                </p>
                                                                                            </a>
                                                                                            <ul
                                                                                                class="nav nav-treeview">
                                                                                                <li class="nav-item">
                                                                                                    <a href="{{ url('phone')}}"
                                                                                                        class="nav-link">
                                                                                                        <i
                                                                                                            class="bi bi-plus-lg"></i>

                                                                                                        <p>
                                                                                                            SĐT
                                                                                                            WEB
                                                                                                        </p>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>


                                                                                        <!--  -->
                                                                                        <li class="nav-item menu-open">

                                                                                            <ul
                                                                                                class="nav nav-treeview">

                                                                                                <li class="nav-item">
                                                                                                    <a href="#"
                                                                                                        class="nav-link">

                                                                                                        <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                                                                                        <p>
                                                                                                            <p>QUẢN
                                                                                                                LÝ
                                                                                                                HÌNH
                                                                                                                ẢNH
                                                                                                            </p>
                                                                                                            <i
                                                                                                                class="right fas fa-angle-left"></i>
                                                                                                        </p>
                                                                                                    </a>
                                                                                                    <ul
                                                                                                        class="nav nav-treeview">
                                                                                                        <li
                                                                                                            class="nav-item">
                                                                                                            <a href="{{ url('slider')}}"
                                                                                                                class="nav-link">
                                                                                                                <i
                                                                                                                    class="bi bi-plus-lg"></i>

                                                                                                                <p>Danh
                                                                                                                    sách
                                                                                                                    Hình
                                                                                                                    ảnh
                                                                                                                    hiển
                                                                                                                    thị
                                                                                                                </p>
                                                                                                            </a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="nav-item">
                                                                                                            <a href="{{ url('addslider')}}"
                                                                                                                class="nav-link">

                                                                                                                <i
                                                                                                                    class="bi bi-plus-lg"></i>
                                                                                                                <p>Thêm
                                                                                                                    hình
                                                                                                                    ảnh
                                                                                                                    hiển
                                                                                                                    thị
                                                                                                                </p>
                                                                                                            </a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>

                                                                                                <!--  -->
                                                                                                <ul>
                                                                                                    <li
                                                                                                        style="list-style: none;">
                                                                                                        <a style="color:#fff;"
                                                                                                            href="{{ url('menu')}}">QUẢN
                                                                                                            LÝ
                                                                                                            MENU</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <li
                                                                                                    class="nav-item menu-open">

                                                                                                    <ul
                                                                                                        class="nav nav-treeview">

                                                                                                        <li
                                                                                                            class="nav-item">
                                                                                                            <a href="#"
                                                                                                                class="nav-link">

                                                                                                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                                                                                                <p>
                                                                                                                    <p>QUẢN
                                                                                                                        LÝ
                                                                                                                        FOOTER
                                                                                                                    </p>
                                                                                                                    <i
                                                                                                                        class="right fas fa-angle-left"></i>
                                                                                                                </p>
                                                                                                            </a>
                                                                                                            <ul
                                                                                                                class="nav nav-treeview">
                                                                                                                <li
                                                                                                                    class="nav-item">
                                                                                                                    <a href="{{ url('foot')}}"
                                                                                                                        class="nav-link">
                                                                                                                        <i
                                                                                                                            class="bi bi-plus-lg"></i>

                                                                                                                        <p>Danh
                                                                                                                            mục
                                                                                                                            Footer
                                                                                                                        </p>
                                                                                                                    </a>
                                                                                                                </li>
                                                                                                                <li
                                                                                                                    class="nav-item">
                                                                                                                    <a href="{{ url('addfooter')}}"
                                                                                                                        class="nav-link">
                                                                                                                        <!-- <i class="far fa-circle nav-icon"></i> -->
                                                                                                                        <i
                                                                                                                            class="bi bi-plus-lg"></i>
                                                                                                                        <p>Thêm
                                                                                                                            footer
                                                                                                                        </p>
                                                                                                                    </a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </li>


                                                                                                        <!-- <li
                                                                                                            class="nav-item menu-open">

                                                                                                            <ul
                                                                                                                class="nav nav-treeview">

                                                                                                                <li
                                                                                                                    class="nav-item menu-open">
                                                                                                                    <a href="#"
                                                                                                                        class="nav-link active">

                                                                                                                        <i
                                                                                                                            class="bi bi-plus-square-dotted"></i>
                                                                                                                        <p>
                                                                                                                            <p>Add
                                                                                                                            </p>
                                                                                                                            <i
                                                                                                                                class="right fas fa-angle-left"></i>
                                                                                                                        </p>
                                                                                                                    </a>
                                                                                                                    <ul
                                                                                                                        class="nav nav-treeview">



                                                                                                                    </ul>
                                                                                                                </li>




                                                                                                            </ul>
                                                                                                        </li> -->



                                                                                                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>



        @yield('admin-content')


        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <!-- <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script> -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js')}}"></script>

    <script src="{{ asset('fe/js/ajaxcc.js')}}"></script>

    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- CodeMirror -->
    <script src="{{ asset('plugins/codemirror/codemirror.js')}}"></script>
    <script src="{{ asset('plugins/codemirror/mode/css/css.js')}}"></script>
    <script src="{{ asset('plugins/codemirror/mode/xml/xml.js')}}"></script>
    <script src="{{ asset('plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
    <script src="{{ asset('fe/js/datatables.js')}}"></script>
    <script src="{{ asset('fe/js/datatable_detailt.js')}}"></script>
    <script src="{{ asset('fe/js/datatable_payment.js')}}"></script>
    <script src="{{ asset('fe/js/datatable_protype.js')}}"></script>
    <script src="{{ asset('fe/js/datatables_contact.js')}}"></script>

    <script src="{{ asset('fe/js/ajpost.js')}}"></script>


    <script src="{{ asset('fe/js/product.js')}}"></script>
    <script src="{{ asset('fe/js/lienhe.js')}}"></script>





    <script>
    $(function() {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
    </script>
    <style>
    .nav-item>.nav-link>p {
        color: #FFF;
    }

    .nav-item {
        display: block;


        line-height: 29px;
        padding-right: 10px;
        color: #FFF;
        font-size: 12px;
        font-family: Verdana, Geneva, sans-serif;
    }
    </style>


    <script>
    $(document).ready(function() {
        $(".nav-link").click(function() {

            // $(".nav-link").removeClass("active");




            // $(this).addClass("active");

        });

    });
    </script>

    <script src="{{asset('fe/js/ajax_admin.js')}}"></script>


</body>

</html>