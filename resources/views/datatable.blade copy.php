@extends('admin.layout')
@section('admin-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>QUẢN LÝ BÀI VIẾT</h1>
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
    <style>
    .table td,
    .table tr {
        padding: 0 !important;
    }
    </style>
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
                <table id="xample_nguoimuau" class="display" style="width:100%">
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

                            <th style="width: 10%">
                                Loại bài viết
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

                                {{$item->tieude}}

                                <br />
                                <small>
                                    Created {{$item->created_at}}
                                </small>
                            </td>

                            <td>
                                <img src="{{asset('fe/img/'.$item->hinhanh)}}" width="100px" height="100px" alt="">

                            </td>

                            <td>
                                @if($item->loaibaiviet == 0)

                                0

                                @elseif($item->loaibaiviet == 1)

                                Gioi thieu
                                @elseif($item->loaibaiviet == 2)

                                bao hanh
                                @elseif($item->loaibaiviet == 3)

                                Giao hang
                                @elseif($item->loaibaiviet == 4)

                                Tic tuc
                                @endif

                            </td>

                            <td class="project-actions text-right">

                                <a class="btn btn-info btn-sm" href="{{url('post/'.$item->id.'/edit')}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>


                                </a>


                                <a class="btn btn-danger btn-sm" href="{{url('protype/'.$item->protype_id.'/edit')}}">
                                    <form action="{{ url('post/'.$item->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf


                                        <input class="fas fa-trash bg-danger" style="border:none" type="submit"
                                            value="Delete">
                                    </form>

                                </a>


                            </td>

                        </tr>
                        @endforeach







                    </tbody>
                    <tfoot>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                Tiêu đề
                            </th>
                            <th>
                                Hình ảnh
                            </th>
                            <!-- <th style="width: 20%">
                        Nội dung
                      </th> -->
                            <th>
                                Loại bài viết
                            </th>
                            <!-- <th style="width: 10%">
                     Title
                      </th> -->

                            <th>
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