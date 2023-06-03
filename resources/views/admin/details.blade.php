@extends('admin.layout')
@section('admin-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Đơn hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Đơn hàng</li>
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
                <form action="{{ url('/detail/create') }}" method="get">
                    <h3 class="card-title">Đơn hàng <button class="btn btn-info btn-sm">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Add
                        </button>
                    </h3>
                </form>
                <div class="row">
                    <div class="col">
                        <div class="btn btn-sm fa-regular fa-circle-dot text-danger"> </div>
                        <p> Chưa xử lý</p>
                    </div>
                    <div class="col">
                        <div class="btn btn-sm bi text-success bi-check-circle-fill"></div>
                        <p>Đã xử lý</p>
                    </div>
                    <div class="col"> <button class="btn btn-info btn-sm">
                            <i class="fas fa-pencil-alt">
                            </i>

                        </button>
                        <p>chỉnh sửa</p>
                    </div>
                    <div class="col">
                        <div class="product_image btn bi bi-pencil-fill">




                        </div>
                        <p> Chi tiết</p>

                    </div>
                    <div class="col"> <button title="Xóa" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash">
                            </i>

                        </button>
                        <p> Xóa</p>
                    </div>
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
                <table id="xample" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 10%" class="text-center">
                                Mã đơn hàng
                            </th>
                            <th style="width: 20%" class="text-center">
                                Tên sản phẩm
                            </th>
                            <th style="width: 5%" class="text-center">
                                Payment id
                            </th>
                            <th style="width: 5%" class="text-center">
                                Hình ảnh
                            </th>
                            <th style="width: 10%" class="text-center">
                                Số lượng
                            </th>
                         
                            <th style="width: 20%" class="text-center">
                                Trạng thái
                            </th>
                            <th style="width: 20%" class="text-center">
                                Thao tác
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alldetails as $value)
                        <tr>
                            <td class="project-state">
                                {{ $value->detail_id }}
                            </td>
                            <td class="project-state">
                                {{ $allproducts[$value->product_id - 1]->product_name }}
                            </td>
                            <td class="project-state">
                                {{ $value->payment_id }}
                            </td>
                            <td class="project-state">
                                <img src="{{asset('fe/img/'.$allproducts[$value->product_id - 1]->product_image) }}"
                                    width="150px" height="150px" alt="">

                            </td>
                            <td class="project-state">
                                {{ $value->quantity }}


                            </td>
                            <!-- <td class="project-state">
                              

                         
                            </td> -->
                            <!-- <td class="project-state">
                                {{ $value->address}}
                            </td> -->
                            <!-- <td class="project-state">
                                {{ $value->telephone}}
                            </td> -->
                            <td class="project-state">
                                @if($value->status == 0)

                                Chưa xử lý


                                @else
                                Đã xử lý
                                @endif
                            </td>
                            <style>
                            .product_image:hover {
                                color: yellow;
                            }

                            .flex-y {
                                display: flex;
                            }
                            </style>
                            <td class="project-actions text-center">
                                <div class="flex-y">
                                    <button title="Chi tiết" class="product_image btn bi bi-pencil-fill"
                                        data-idp="{{ $value->detail_id}}" style="margin-bottom: 10px !important;"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">




                                    </button>
                                    <form action="{{ url('/detail/'.$value->detail_id.'/edit') }}" method="get"
                                        style="padding-bottom: 5px;">
                                        <button title="Chỉnh sửa" class="btn btn-info btn-sm">
                                            <i class="fas fa-pencil-alt">
                                            </i>

                                        </button>
                                    </form>
                                    <form action="{{ url('/detail/'.$value->detail_id) }}" method="post"
                                        style="padding-bottom: 5px;">
                                        @csrf
                                        @method('DELETE')
                                        <button title="Xóa" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash">
                                            </i>

                                        </button>
                                    </form>

                                    <form action="{{ url('/xacnhan/'.$value->detail_id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <button title="đã xử lý" type="submit"
                                            class="btn btn-sm bi text-success bi-check-circle-fill">

                                        </button>
                                    </form>


                                    <form action="{{ url('/da_nhan/'.$value->detail_id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <button title="Chưa xử lý" type="submit"
                                            class="btn btn-sm fa-regular fa-circle-dot text-danger">

                                        </button>
                                    </form>
                                </div>

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
            <tr>
            <th style="width: 10%" class="text-center">
                                Mã đơn hàng
                            </th>
                            <th>
                                Tên sản phẩm
                            </th>
                            <th>
                                Payment id
                            </th>
                            <th>
                                Hình ảnh
                            </th>
                            <th>
                                Số lượng
                            </th>
                         
                            <th>
                                Trạng thái
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


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="" id="exampleModalLabel"></div>
            <div class="modal-header">

                <h1 class="modal-title fs-5 ff">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- <div class="modal-body">
        ...
      </div> -->

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection