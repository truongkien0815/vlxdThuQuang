@extends('admin.layout')
@section('admin-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Loại sp chính</h1>
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
          <h3 class="card-title">Protype</h3>

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
          <table id="example_na_protype" class="display" style="width:100%">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          Id
                      </th>
                    
                      <th style="width: 10%">
                          Tên loại sp chính
                      </th>
                     
                      <th style="width: 10%">
                   Image
                      </th>
                     
                    
                      <th style="width: 20%">
                      Thao tác
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach($protype as $item)
            
                  <tr>
                      <td>
               {{$item->protype_id}}
             
                      </td>
                    
                      <td>
                          <a>
                          {{$item->name}}
                          </a>
                          <br/>
                          <small>
                              Created   {{$item->created_at}}
                          </small>
                      </td>
                 
                    <td> <img width="120px" height="120px" src="{{asset('fe/img/'.$item->image)}}" alt=""> </td>
                      <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                          <a class="btn btn-info btn-sm" href="{{url('protype/'.$item->protype_id.'/edit')}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                            <a href="{{url('protype/'.$item->protype_id.'/edit')}}"></a>
                          
                          </a>


<!--  -->
   <?php
                $temp = 0;
                foreach ($type as $prod) {
                  if ($prod['protype_id'] == $item['protype_id']) {
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
                           
                           <form action="{{ url('protype/'.$item->protype_id)}}" method="post">
                           @method('DELETE')
               @csrf
               <input class="fas fa-trash bg-danger" style="border:none;" type="submit" value="Delete">
                            
                           </form>
                           </a>
                <?php } 
                ?>

                          
                      </td>
                  </tr>
                  <!-- <tr> -->
              
                    
             
                  @endforeach
                 
             
              </tbody>
              <tfoot>
            <tr>
            <th>
                          Id
                      </th>
                    
                      <th>
                          Tên loại sp chính
                      </th>
                   
                      <th>
                   Image
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