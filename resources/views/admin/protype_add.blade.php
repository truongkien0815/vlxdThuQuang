@extends('admin.layout')
@section('admin-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Loại sp chính Add</h1>
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
              <form action="protype" method="post"  enctype="multipart/form-data">
           
                  @csrf
                  
              <div class="form-group">
                <label for="inputName">Tên loại sản phẩm chính </label>
                <input type="text" required name="protype_name" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">type</label>
                <input type="text" required name="type" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">STT</label>
                <input type="number"  required name="stt" id="inputName"  class="form-control">

              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Hình ảnh</label>
                <input type="file" name="image" required  id="fileToUpload" class="form-control"> 
              </div>
              
              <!-- <div class="form-group">
                <label for="inputName">ten khong dau</label>
                <input type="text" required name="tenkhongdau" id="inputName" class="form-control" >
              </div> -->
              <div class="form-group">
                <label for="inputName">keyword</label>
                <input type="text" required name="keywords" id="inputName" class="form-control" >
              </div>
              <div class="form-group">
                <label for="inputName">description</label>
                <input type="text" required name="description" id="inputName" class="form-control" >
              </div>

              <label for="inputName">Option</label>
                                    <textarea required id="summernote" name="content">
                                    
                                
                                     </textarea>
           
              
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
          <input type="submit" value="Create new Project" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection