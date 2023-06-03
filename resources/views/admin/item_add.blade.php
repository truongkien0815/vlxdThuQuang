@extends('admin.layout')
@section('admin-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Item Add</h1>
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
        <div class="col-md-10">
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
              <form action="item" method="post"  enctype="multipart/form-data">
           
                  @csrf
                  
              <div class="form-group">
                <label for="inputName">Tên Item</label>
                <input type="text" required name="protype_name" id="inputName" class="form-control">
              </div>
        
              <div class="form-group">
                <label for="inputStatus">Menu con của thư mục </label>
                <select id="inputStatus" name="type_id" class="form-control custom-select">
                    <option disabled>Select one</option>
                    @foreach($type as $itam)
                    <option selected value="{{ $itam->type_id}}">{{ $itam->type_name}}</option>
                    @endforeach
                </select>
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
          <input type="submit" value="Create new Project" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection