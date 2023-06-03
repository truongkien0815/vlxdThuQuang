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
                        <form action="{{ url('foot/'.$item->id)}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card card-outline card-info">




                                <div class="card-body">
                                    <label for="inputName">Nội dung</label>
                                    <textarea required id="summernote" name="content">
                                    {{$item->footer_content}}
                                
                                     </textarea>
                                  
                                </div>
                                <div class="card-body">
                                    <label for="inputName">STT</label>
                                    <input type="number" required value="{{$item->stt}}" name="stt" id="inputName"
                                        class="form-control">
                                </div>

                               

                             

                                <!-- /.card-header -->
                              
                              

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