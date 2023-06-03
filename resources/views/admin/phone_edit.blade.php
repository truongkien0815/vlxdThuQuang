@extends('admin.layout')
@section('admin-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Phone Edit</h1>
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
                <form action="{{url('phone/'.$phone->id)}}" method="post" enctype="multipart/form-data">
            
            
              @method('PUT')
                  @csrf
              <!-- <div class="form-group"> -->
                <label for="inputName">Phone</label>
                <textarea id="summernote" required name="phone" cols="30" rows="5">
                {{$phone->sdt}}
                                      </textarea>

              
                                     <!-- <input type="text" value=" {{$phone->sdt}}" name="phone" id=""> -->
                <!-- <input required type="text" id="inputName" class="form-control" name="phone" value="{{$phone->sdt}}"> -->
              </div>
            
            
           
              
              
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
        <a href="#" class="btn btn-secondary">Cancel</a>
          
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
        
        </div>
      </div>
  
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection