@extends('admin.layout')
@section('admin-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Item Edit</h1>
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
                <form action="{{url('item/'.$protype->item_id)}}" method="post"  enctype="multipart/form-data">
            
            
              @method('PUT')
                  @csrf
              <div class="form-group">
                <label for="inputName">Tên Item</label>
                <input required type="text" id="inputName" class="form-control" name="protype_name" value="{{$protype->name}}">
              </div>
              <div class="form-group">
                <label for="inputStatus">Menu con của thư mục</label>
                <select name="type_id" id="inputStatus" required class="form-control custom-select">
                  <option selected>{{ $protype->type_id}}</option>
                  @foreach($type as $itam)
                  <!-- <option value="{{ $itam->type_id}}">{{ $itam->type_name}}</option> -->
            
                  <option  value="{{ $itam->type_id}}" >{{ $itam->type_name}}</option>
                  @endforeach
                </select>
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