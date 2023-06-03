@extends('admin.layout')
@section('admin-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Loại sp chính Edit</h1>
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
                <form action="{{url('protype/'.$protype->protype_id)}}" method="post"  enctype="multipart/form-data">
            
            
              @method('PUT')
                  @csrf
              <div class="form-group">
                <label for="inputName">Tên loại sp chính</label>
                <input required type="text" id="inputName" class="form-control" name="protype_name" value="{{$protype->name}}">
              </div>
            
              <div class="form-group">
                <label for="inputName">Type</label>
                <input type="text" required name="type" id="inputName" value="{{$protype->type}}" class="form-control">
              </div>
           
              <!-- <div class="form-group">
                <label for="inputName">STT</label>
                <input type="number"  required name="stt" id="inputName" value="{{$protype->stt}}" class="form-control">

              </div> -->
              <div class="form-group">
                <label for="inputProjectLeader">Hình ảnh</label>
                <input type="file" name="image"  id="fileToUpload" class="form-control"> 
              </div>
              
              <div class="form-group">
                <label for="inputName">ten khong dau</label>
                <input type="text" required name="tenkhongdau" id="inputName" class="form-control" value="{{$protype->tenkhongdau}}">
              </div>
              <div class="form-group">
                <label for="inputName">keyword</label>
                <input type="text" required name="keywords" id="inputName" class="form-control" value="{{$protype->keywords}}">
              </div>
              <div class="form-group">
                <label for="inputName">description</label>
                <input type="text" required name="description" id="inputName" class="form-control" value="{{$protype->description}}">
              </div>
              <label for="inputName">Option</label>
                                    <textarea required id="summernote" name="content">
                                    {!!$protype->options!!}
                                
                                     </textarea>
              
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
          
          <input type="submit" value="Save Changes" class="btn btn-success ">
        
        </div>
      </div>
      <div class="row">
        <div class="col-12">
        
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection