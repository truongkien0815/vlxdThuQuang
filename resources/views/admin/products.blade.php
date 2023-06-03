@extends('admin.layout')
@section('admin-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>QUẢN LÝ SẢN PHẨM</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Product</h3>
<!-- <style>
  #productname{
   margin-left:100px;
  }
</style>
<div class="timkiem">
<input type="text" style="height:35px;" size="30" placeholder="Search" name="search"
                        id="productname">

                    <button style="padding:10px" class="fa fa-search" id="search" aria-hidden="true"></button>
</div> -->

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
        <table id="xample_nguoimua" class="display" style="width:100%">
        <thead>
            <tr>
                <th>
                    id
                </th>
                <th>
                Tên sp
                </th>
                <th>
                Hình ảnh
                </th>
                <th>
                Loại sp
                </th>
                <th>
                Loại item
                </th>
                <th>
               Thao tác

              
                </th>
            

            </tr>
        </thead>
        <tbody>
            @foreach($products as $item)

            <tr>
                <td> {{$item->id}}</td>
                <td>     {{$item->product_name}}</td>

             
                <td> <img src="{{asset('fe/img/'.$item->product_image)}}" width="150px"
                        height="150px" alt=""></td>
                <td class="project-state">
                {{ $item->types->type_name}}
              
                </td>

                <td class="project-state">
            
                @if($item->item_id != 0)
                {{ $item->manufactures->name }}
                @else
                0

                @endif

                </td>
             

                <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                          <a class="btn btn-info btn-sm" href="{{url('admin/product/'.$item->id.'/edit')}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                             
                            <a href="{{url('admin/product/'.$item->id.'/edit')}}"></a>
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <!-- <i class="fas fa-trash">
                              </i> -->
                              <form action="{{ url('admin/product/'.$item->id)}}" method="post">
                              @method('DELETE')
                  @csrf
                  <!-- <button type="submit" class="fas fa-trash">Delete</button> -->
                  
                                <input class="fas fa-trash bg-danger" style="border:none" type="submit" value="Delete">
                              </form>
                          </a>
                      </td>
                <!-- <td>$320,800</td> -->
            </tr>
            @endforeach


        </tbody>
        <tfoot>
            <tr>
            <th>
                    id
                </th>
                <th>
                Tên sp
                </th>
                <th>
                Hình ảnh
                </th>
                <th>
                Loại sp
                </th>
                <th>
                Loại item
                </th>
                <th>
                Thao tác

              
                </th>
            </tr>
        </tfoot>
    </table>
      
          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




 @endsection