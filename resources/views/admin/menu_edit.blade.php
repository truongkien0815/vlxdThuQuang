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
                <form action="{{url('menu/'.$protype->id)}}" method="post"  enctype="multipart/form-data">
            
            
              @method('PUT')
                  @csrf
              <div class="form-group">
                <label for="inputName"> menu name</label>
                <input required type="text" id="inputName" class="form-control" name="vn_name" value="{{$protype->vn_name}}">
              </div>
            
              <!-- <div class="form-group">
                <label for="inputName">url</label>
                <input type="text" required name="url" id="inputName" value="{{$protype->url}}" class="form-control">
              </div> -->
              <div class="form-group">
                                    <label for="inputName">URL</label>
                              
                                    <select id="inputStatus" name="url" class="form-control custom-select">
                
               
                  <option selected value ="{{$protype->url}}">{{$protype->url}}</option>
                 
             



          
                </select>
                              
                                </div>
         
              <div class="form-group">
                <label for="inputName">title</label>
                <input type="text"  required name="solan_title" id="inputName" value="{{$protype->solan_title}}" class="form-control">

              </div>
              
              
              <div class="form-group">
                <label for="inputName">Vị trí</label>
                <input type="text" required name="position" id="inputName" class="form-control" value="{{$protype->position}}">
              </div>
              <div class="form-group">
                <label for="inputName">status</label>
                <input type="text" required name="status" id="inputName" class="form-control" value="{{$protype->status}}">
              </div>
            

              
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