@extends('admin.layout')
@section('admin-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
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
          <h3 class="card-title">Post</h3>

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
                       Tiêu đề
                      </th>
                      <th style="width: 10%">
                          Hình ảnh
                      </th>
                      <th style="width: 20%">
                        Nội dung
                      </th>
                      <th style="width: 10%">
                      Loại bài viết
                      </th>
                      <th style="width: 10%">
                     Title
                      </th>
                    
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              @foreach($post as $item)
              <tbody>
                  <tr>
                      <td>
               {{$item->id}}
             
                      </td>
                      <td>
                          <a>
                          {{$item->tieude}}
                          </a>
                          <br/>
                          <small>
                              Created   {{$item->created_at}}
                          </small>
                      </td>
                     
                      <td>
             <img src="{{asset('fe/img/'.$item->hinhanh)}}" width="100px" height="100px" alt="">
             
                      </td>
                      <td>
          
               <div>  {!!  substr($item->noidung,0,3)!!}</div>
                      </td>
                      <td>
             @if($item->loaibaiviet  == 0)
             
giới thiệu
             
             @elseif($item->loaibaiviet  == 1)
             
             tin tức
             @elseif($item->loaibaiviet  == 2)
             
             tuyển dụng
             @elseif($item->loaibaiviet  == 3)
             
             dịch vụ
             @endif
             
                      </td>
                      <td>
                        {{$item->title }}
                      </td>
                      <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                          <a class="btn btn-info btn-sm" href="{{url('post/'.$item->id.'/edit')}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                            <!-- <a href="{{url('post/'.$item->id.'/edit')}}"></a> -->
                          
                          </a>


                          <a class="btn btn-danger btn-sm" href="{{url('protype/'.$item->protype_id.'/edit')}}">
                          <form action="{{ url('post/'.$item->id)}}" method="post">
                              @method('DELETE')
                  @csrf
               
                  
                                <input class="fas fa-trash bg-danger" style="border:none" type="submit" value="Delete">
                              </form>
                          
                          </a>

                         
@endforeach

<!--  -->





                        
                            
           
<!--  -->

                         <!--  -->
                          
                      </td>
                  </tr>
                  <tr>
              
                    
             
                     
                 
             
              </tbody>
           
          </table>
          {{ $post->links()}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 @endsection