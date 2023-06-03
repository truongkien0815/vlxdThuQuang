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
          <h3 class="card-title">Contact</h3>

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
                          Id
                      </th>
                      <th style="width: 10%">
                       Tiêu đề
                      </th>
                      <th style="width: 10%">
                          Tên liên hệ
                      </th>
                      <th style="width: 10%">
                        Nội dung
                      </th>
                      <th style="width: 10%">
                    Sdt
                      </th>
                      <th style="width: 10%">
                    Địa chỉ
                      </th>
                      <th style="width: 10%">
                  Email
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              @foreach($title as $item)
              <tbody>
                  <tr>
                      <td>
               {{$item->id}}
             
                      </td>
                      <td>
                          <a>
                          {{$item->title}}
                          </a>
                          <br/>
                          <small>
                              Created   {{$item->created_at}}
                          </small>
                      </td>
                     
                      <td>
                      {{$item->tranghienthi}}
             
                      </td>
                    
                     
                    
                    
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="addtitle">
                              <i class="fas fa-folder">
                              </i>
                              addtitle
                          </a>
                          <a class="btn btn-info btn-sm" href="{{url('contact/'.'/edit')}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                            
                          
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{url('protype/'.'/edit')}}">
                          <form action="{{ url('contact/')}}" method="post">
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
         
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 @endsection