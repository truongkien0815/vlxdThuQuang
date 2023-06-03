@extends('admin.layout')
@section('admin-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Document Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Project Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('document')}}" method="post" enctype="multipart/form-data">


                            @csrf
                            <div class="form-group">
                                <label for="inputName">Tiêu đề</label>
                                <input type="text" name="tieude" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Nội dung</label>
                                <input type="text" name="noidung" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">file tai lieu</label>
                                <input type="file" name="filetailieu" class="form-control" style="padding-bottom: 35px;" required>
                                <!-- <input type="text" name="filetailieu" id="inputName" class="form-control"> -->
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputEstimatedBudget">hinh anh</label>
                                    <input type="file" name="image" class="form-control" style="padding-bottom: 35px;"
                                        required>

                                </div>

                            </div>



                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new Project" class="btn btn-success float-right">
            </div>
        </div>
    </section>
    </form>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection