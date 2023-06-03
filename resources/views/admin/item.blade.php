@extends('admin.layout')
@section('admin-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Item</h1>
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
          <h3 class="card-title">Item</h3>

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
                          Tên item
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
               {{$item->item_id}}
             
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
                 
                   
                      <td class="project-actions text-right">
                        
                          <a class="btn btn-info btn-sm" href="{{url('item/'.$item->item_id.'/edit')}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                            <a href="{{url('item/'.$item->item_id.'/edit')}}"></a>
                          
                          </a>



   <?php
                $temp = 0;
                foreach ($type as $prod) {
                  if ($prod['item_id'] == $item['item_id']) {
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
                           
                           <form action="{{ url('item/'.$item->item_id)}}" method="post">
                           @method('DELETE')
               @csrf
               <input class="fas fa-trash bg-danger" style="border:none;" type="submit" value="Delete">
                            
                           </form>
                           </a>
                <?php } 
                ?>
<!--  -->




                        
                            
               
                      
                          
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
                        tên Item
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