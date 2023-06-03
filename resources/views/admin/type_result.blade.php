@extends('admin.layout')
@section('admin-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Loại sp</h1>
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
          <h3 class="card-title">Type</h3>
          <style>
  #productype{
   margin-left:100px;
  }
</style>
<div class="timkiem">
<form action="{{ url('sort_type/') }}" method="get">
                                        <input name="keyword" type="text" value="{{ old('keyword')}}"
                                            id="filter_keyword" required onclick="this.value = '';"
                                            onkeydown="this.style.color = '#000000'" style="color: #999;">

                                        <!-- <div class="searchicon"> -->


                                            <button style="" type="submit" value="fff">
                                            <b class="bi bi-search"
                                                    href="#"></b></button>
                                            <!-- <a class="bi bi-search" href="#"></a> -->
                                        <!-- </div> -->

                                    </form>
</div>
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
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          id
                      </th>
                      <th style="width: 10%">
                          Tên loại sp
                      </th>
                      <th style="width: 10%">
                          Hình ảnh
                      </th>
                      <th style="width: 10%">
                        Loại sp chính
                      </th>
                    
                    
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              @foreach($type as $item)
              <tbody>
                  <tr>
                      <td>
               {{$item->type_id}}
             
                      </td>
                      <td>
                          <a>
                          {{$item->type_name}}
                          </a>
                          <br/>
                          <small>
                              Created   {{$item->created_at}}
                          </small>
                      </td>
                      <td>
                          <!-- <ul class="list-inline">
                              <li class="list-inline-item"> -->
                                  <img alt="Avatar"  width="120px" height="120px" src="{{asset('products/'.$item->type_image)}}">
                              <!-- </li>
                             
                            
                          
                          </ul> -->
                      </td>
                      <td class="project_progress">
                         {{ $item->pid}}
                      </td>
                    
                    
                   
                      <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                          <a class="btn btn-info btn-sm" href="{{url('type/'.$item->type_id.'/edit')}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                             
                            <a href="{{url('type/'.$item->id.'/edit')}}"></a>
                          
                          </a>
                          <?php
                $temp = 0;
                foreach ($product as $prod) {
                  if ($prod['type_id'] == $item['type_id']) {
                    $temp++;
                  }
                }
                if ($temp != 0) { ?>
                  <a class="btn btn-danger btn-sm" onclick="alert('Sản phầm còn tồn tại! Không thể xóa!')">
                    <i class="fas fa-trash">
                    </i>
                    ko xóa
                  </a>
                <?php }
                 else 
                 { ?>

<a class="btn btn-danger btn-sm" href="#">
                            
                            
                            
                            <form action="{{ url('type/'.$item->type_id)}}" method="post">
                                @method('DELETE')
                    @csrf
                    <input class="fas fa-trash bg-danger" style="border:none;" type="submit" value="Delete">
                                 
                                </form>
  
                            
                           
                            </a>


                  
                <?php } 
                ?>


                         
                      </td>
                  </tr>
                  <tr>
              
                    
             
                      @endforeach
                 
             
              </tbody>
           
          </table>
          {{ $type->links()}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 @endsection