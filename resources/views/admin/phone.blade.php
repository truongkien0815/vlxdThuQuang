@extends('admin.layout')
@section('admin-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thông tin hỗ trợ trực tuyến</h1>
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
          <h3 class="card-title">Thông tin hỗ trợ trực tuyến</h3>

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
                          Nội dung
                      </th>
                      <!-- <th style="width: 10%">
                          image
                      </th>
                      <th style="width: 10%">
                        Type_id
                      </th> -->
                     
                    
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              @foreach($phone as $item)
              <tbody>
                  <tr>
                      <td>
               {{$item->id}}
             
                      </td>
                      <td>
                          <a>
                          {!!$item->sdt!!}
                          </a>
                          <br/>
                          <small>
                              Created   {{$item->created_at}}
                          </small>
                      </td>
                     
                    
                      <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                          <a class="btn btn-info btn-sm" href="{{url('phone/'.$item->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                            <a href="{{url('phone/'.$item->id)}}"></a>
                          
                          </a>







                        
                            
                  @endforeach
                     
<!--  -->

                         <!--  -->
                          
                      </td>
                  </tr>
                  <tr>
              
                    
             
                     
                 
             
              </tbody>
           
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