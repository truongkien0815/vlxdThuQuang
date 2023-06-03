@extends('admin.layout')
@section('admin-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý người mua</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý người mua</li>
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
                <form action="{{ url('/payment/create') }}" method="get">
                    <h3 class="card-title">Quản lý người mua <button class="btn btn-info btn-sm">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Add
                        </button>
                    </h3>
                </form>
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
                            <th style="width: 20%" class="text-center">
                                Payment id
                            </th>
                            <!-- <th style="width: 20%" class="text-center">
                              Tên  Ngẫu nhiên
                            </th>
                            <th style="width: 20%" class="text-center">
                                Ngẫu nhiên
                            </th> -->
                            <th style="width: 20%" class="text-center">
                                Ngày đặt hàng
                            </th>
                            <th style="width: 20%" class="text-center">
                                Thao tác
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allpayments as $value)
                        <tr>
                            <td class="project-state">
                                {{ $value->payment_id }}
                            </td>
                            <!-- <td class="project-state">
                            {{ $value->user_id }}
                               
                            </td>
                            <td class="project-state">
                                {{ $value->discount }}
                            </td> -->
                            <td class="project-state">
                                {{ date('d/m/Y', strtotime($value->created_at)) }}
                            </td>
                            <td class="project-actions text-center">
                                <form action="{{ url('/payment/'.$value->payment_id.'/edit') }}" method="get"
                                    style="padding-bottom: 20px;">
                                    <button class="btn btn-info btn-sm">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </button>
                                </form>




                            


                                <?php
                $temp = 0;
                foreach ($alldetails as $prod) {
                  if ($prod['payment_id'] == $value['payment_id']) {
                    $temp++;
                  }
                }
                if ($temp != 0) {
                   ?>
  <a class="btn btn-danger btn-sm" onclick="alert('Đơn hàng đang được mua! Không thể xóa!')">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                  </a>
                   <?php
                 }
                 else{
                    ?>
<form action="{{ url('/payment/'.$value->payment_id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </button>
                                </form>
                    <?php
                 }
                 ?>

                            </td>
                        </tr>
                        @endforeach



                    </tbody>
                    <tfoot>
            <tr>
            <th>
                                Payment id
                            </th>
                            <!-- <th>
                                User name
                            </th>
                            <th>
                                Discount
                            </th> -->
                            <th>
                                Created at
                            </th>
                            <th>
                                Action
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