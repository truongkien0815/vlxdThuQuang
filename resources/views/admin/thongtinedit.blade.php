@extends('admin.layout')
@section('admin-content')

<head>

    <title>AdminLTE 3 | Editors</title>


</head>


<div class="hold-transition sidebar-mini">
    <div class="wrapper">



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Post edit</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Text Editors</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('post/'.$item->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                            <div class="card card-outline card-info">



                                
                                <div class="card-body">
                                    <label for="inputName">Tiêu đề</label>
                                    <input type="text" required value="{{$item->tieude}}" name="tieude" id="inputName" class="form-control">
                                </div>
                                <div class="card-body">
                                    <label for="inputName">Title</label>
                                    <input type="text" required value="{{$item->title}}" name="title" id="inputName" class="form-control">
                                </div>

                                <div class="card-body">
                                    <label for="inputName">Loại bài viết</label>
                                    <!--  -->
                                    <select id="inputStatus" name="loaibaiviet" class="form-control custom-select">
                  <!-- <option disabled>{{$item->loaibaiviet}}</option> -->
               
                  <option selected value ="0">Giới thiệu</option>
                  <option value ="1">Tin tức</option>
                  <option value ="2">Tuyển dụng</option>
                  <option value ="3">Dịch vụ</option>


          
                </select>
                                    <!--  -->
                                    <!-- <input type="text" name="loaibaiviet" id="inputName" class="form-control"> -->
                                </div>

                                <div class="card-header">
                                    <h3 class="card-title">
                                        Nội dung
                                    </h3>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <textarea required id="summernote" name="noidung">
                                    {{$item->noidung}}
                                       <!-- Place <em>some</em> <u>text</u> <strong>here</strong> -->
                                     </textarea>

                                </div>
                                <div class="form-group">
                                  <label for="inputEstimatedBudget">hinh anh</label>
                                     <input type="file" name="image" class="form-control" style="padding-bottom: 35px;" required>

                                     </div>

                            </div>
                            <input type="submit" value="Create new Project" class="btn btn-success float-right">
</form>
                  
                        </div>
                    <!-- /.col-->
                </div>
                <!-- ./row -->

                <!-- ./row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->




    @endsection