@extends('admin.layout')
@section('admin-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Edit</h1>
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
        <div class="col-md-12">
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
            <form action="{{url('admin/product/'.$item->id)}}" method="post" enctype="multipart/form-data">
              <!-- <div class="form-group" form action="{{url('admin/product/'.$item->id)}}" method="post"> -->
              @method('PUT')
                  @csrf
              <!-- <div class="form-group"> -->
                <label for="inputName">Tên sp</label>
                <input type="text" required id="inputName" class="form-control" name="product_name" value="{{ $item->product_name}}">
              </div>
              <!-- <div class="form-group">
                <label for="inputDescription">Đặc tả</label>
                <textarea id="inputDescription" required class="form-control" name="descrip" rows="4">{!! $item->description!!}</textarea>
              </div> -->
              <div class="form-group">
                <label for="inputStatus">id loại sp</label>
                <select name="type_id" id="inputStatus" required class="form-control custom-select">
                  <option selected>{{ $item->type_id}}</option>
                  @foreach($type as $itam)
                  <!-- <option value="{{ $itam->type_id}}">{{ $itam->type_name}}</option> -->
            
                  <option  value="{{ $itam->type_id}}" >{{ $itam->type_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Menu con</label>
                <select name="item_id" id="inputStatus" required class="form-control custom-select">
                  <option selected>{{ $item->item_id}}</option>
                  <option>0</option>

                  @foreach($items as $itam)
                  <!-- <option value="{{ $itam->type_id}}">{{ $itam->type_name}}</option> -->
            
                  <option  value="{{ $itam->item_id}}" >{{ $itam->name}}</option>
                  @endforeach
                </select>
              </div>
          

              <div class="form-group">
                <label for="inputClientCompany">Giá</label>
                <input type="text" required id="inputClientCompany" class="form-control" name="price" value="{{ $item->price}}">
              </div>
              <!-- <div class="form-group">
                <label for="inputClientCompany">Giá</label>
                <input type="text" required id="inputClientCompany" class="form-control" name="price" value="{{ $item->product_price}}">
              </div> -->
             <div class="row">
              <div class="col-md-8"> <div class="form-group">
                <label for="inputProjectLeader">Hình ảnh</label>
                <input type="file" name="image" id="fileToUpload" class="form-control"> 
              </div>
            </div>
            <div class="col-md-4">
              Ảnh hiện tại
              <img width="200px" height="180px" src="{{ asset('fe/img/'.$item->product_image)}}" alt=""></div>
             </div>
             <div class="row">
              <div class="col-md-8"> 
              <div class="form-group">
                <label for="inputProjectLeader">Hình ảnh 2</label>
                <input type="file" name="image1" id="fileToUpload" class="form-control"> 
              </div>
            </div>
            <div class="col-md-4">
              Ảnh hiện tại
              <img width="200px" height="180px" src="{{ asset('fe/img/'.$item->product_image1)}}" alt=""></div>
             </div>
             
             <div class="row">
              <div class="col-md-8"> 
              <div class="form-group">
                <label for="inputProjectLeader">Hình ảnh 3</label>
                <input type="file" name="image2" id="fileToUpload" class="form-control"> 
              </div>
            </div>
            <div class="col-md-4">
              Ảnh hiện tại
              <img width="200px" height="180px" src="{{ asset('fe/img/'.$item->product_image2)}}" alt=""></div>
             </div>
             
            
              <div class="form-group">
                <label for="inputEstimatedBudget">Nội dung chi tiết</label>
                <textarea id="summernote"  required name="thongso">
              {!! $item->thongso!!}        
                                     </textarea>

           
              </div>
              <div class="form-group">
                <label for="inputEstimatedBudget">Description</label>
                <input type="text" required id="inputEstimatedBudget" class="form-control" name="description" value="{{ $item->description}}" step="1">
              </div>
              <div class="form-group">
                <label for="inputEstimatedBudget">Title</label>
                <input type="text" required id="inputEstimatedBudget" class="form-control" name="title" value="{{$item->title}}" step="1">
              </div>
              <!-- <div class="form-group">
                <label for="inputEstimatedBudget">Tên không dấu</label>
                <input type="text" required id="inputEstimatedBudget" class="form-control" name="slug" value="{{ $item->slug}}" step="1">
              </div> -->
              <div class="form-group">
                <label for="inputName">keyword</label>
                <input type="text" required name="keyword" id="inputName" class="form-control" value="{{$item->keyword}}">
              </div>
              <label for="inputName">Số thứ tự</label>
                <input type="number" required id="inputName" class="form-control" name="stt" value="{{ $item->stt}}">
             
             @if($item->home == 1)
                            <input type="checkbox" name="home" id="home" checked="on"> Hiển thị thanh menu  | {{$item->home}}
                            @else
                            <input type="checkbox" name="home" id="home"> Hiển thị thanh menu  | {{$item->home}}
                            @endif
                            <br>
                            <input type="checkbox" name="noibat" id="noibat"> Hiển thị sản phẩm khác  | {{$item->noibat}}    
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
           
        
            <!-- /.card-body -->
          </div>
        
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