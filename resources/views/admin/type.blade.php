@extends('admin.layout')
@section('admin-content')



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
                <!-- <style>
                #productype {
                    margin-left: 100px;
                }
                </style>
                <div class="timkiem">
                    <form action="{{ url('sort_type/') }}" method="get">
                        <input name="keyword" type="text" value="{{ old('keyword')}}" id="filter_keyword" required
                            onclick="this.value = '';" onkeydown="this.style.color = '#000000'" style="color: #999;">

                   


                        <button type="submit" value="fff">
                            <b class="bi bi-search" href="#"></b></button>
                   

                    </form>
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
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Tên loại sp</th>
                            <th> Hình ảnh</th>
                            <th> Loại sp chính</th>
                            <th>Thao tác</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($type as $item)

                        <tr>
                            <td>{{$item->type_id}}</td>
                            <td> {{$item->type_name}}</td>
                            <td> <img alt="No image" width="120px" height="120px"
                                    src="{{asset('fe/img/'.$item->type_image)}}"></td>

                                    @if($item->protype_id != 0)
                            <td> {{ $item->protypes->name}}</td>
                          @else
                            <td> {{ $item->protype_id}}</td>
                            @endif
                            <td class="project-actions text-right"> <a class="btn btn-info btn-sm"
                                    href="{{url('type/'.$item->type_id.'/edit')}}">
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
                                <a class="btn btn-danger btn-sm"
                                    onclick="alert('Sản phầm còn tồn tại! Không thể xóa!')">
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
                                        <input class="fas fa-trash bg-danger" style="border:none;" type="submit"
                                            value="Delete">

                                    </form>



                                </a>



                                <?php } 
                ?>



                            </td>
                            <!-- <td>$320,800</td> -->
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>Tên loại sp</th>
                            <th> Hình ảnh</th>
                            <th> Loại sp chính</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                </table>


           
                <script>
              
                </script>
           
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->





















@endsection