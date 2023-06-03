@extends('admin.layout')
@section('admin-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chỉnh sửa loại sp</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Edit</li>
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
                <div class="form-group">
                <form action="{{url('slider/'.$type->id)}}" method="post" enctype="multipart/form-data">
            
            
              @method('PUT')
                  @csrf
              <div class="form-group">
                <label for="inputName">Link</label>
                <input required name="linkne"  required type="text" id="ten_lienhe"  value="{{$type->link}}" class="form-control">
                
               
              </div>
           
            
              <div class="form-group">
                <label for="inputStatus">Vị trí</label>
                <select name="type" required id="inputStatus" class="form-control custom-select">
               
                <option  value ="{{$type->type}}">{{$type->type}}</option>

                <option  value ="hinhanhhoatdong">Hình ảnh hoạt động</option>
                <option  value ="doitac">doitac</option>
                <option  value ="slider">slider</option>
                 <option  value ="banner">banner</option>
                 <option  value ="logo">logo</option>

                 
                  <option selected value ="{{ $type->type}}">{{ $type->type}}</option>
                </select>
              </div>
           
              <div class="form-group">
                <label for="inputProjectLeader">Hình ảnh</label>
                <input type="file"  name="image"  id="fileToUpload" class="form-control"> 
              </div>
              
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          
        
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection