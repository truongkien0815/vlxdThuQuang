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
            <table id="example_contact" class="display" style="width:100%">
        <thead>
            <tr>
            <th>
                                Id</th>
                            <th>
                                Tiêu đề</th>
                            <th>
                                Tên liên hệ </th>
                            <!-- <th>
                                Nội dung</th> -->
                            <th>
                                Sdt</th>
                            <th>
                                Địa chỉ</th>
                            <!-- <th>
                                Email
                            </th> -->
                            <th>
                                Thao tác
                            </th>

            </tr>
        </thead>
        <tbody>
            @foreach($contact as $item)

            <tr>
                <td> {{$item->id}}</td>
                <td>        {{$item->subject}}
                <br/>
                          <small>
                              Created   {{$item->created_at}}
                          </small>

                </td>
                <td>
                                {{$item->fullname}}

                            </td>
                            <!-- <td>
                                {{$item->content}}

                            </td> -->
                            <td>
                                {{$item->mobile}}


                            </td>
                            <td>
                                {{$item->address}}


                            </td>
                            <!-- <td>
                                {{$item->email}}


                            </td> -->
                            <td class="project-actions text-right">
                            <button title="Chi tiết" class="product_image btn bi bi-pencil-fill"
                                        data-idp="{{ $item->id}}" style="margin-bottom: 10px !important;"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">




                                    </button>
                                <a class="btn btn-info btn-sm" href="{{url('contact/'.$item->id.'/edit')}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    <a href="{{url('contact/'.$item->id.'/edit')}}"></a>

                                </a>
                                <a class="btn btn-danger btn-sm" href="{{url('contact/'.$item->id)}}">
                                    <form action="{{ url('contact/'.$item->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        
                                        <input class="fas fa-trash bg-danger" style="border:none" type="submit"
                                            value="Delete">
                                    </form>

                                </a>

                            </td>
                        </tr>
                        <!-- <tr> -->

                            @endforeach




                    </tbody>
                    <tfoot>
                        <tr>
                        <th>
                                Id</th>
                            <th>
                                Tiêu đề</th>
                            <th>
                                Tên liên hệ </th>
                            <!-- <th>
                                Nội dung</th> -->
                            <th>
                                Sdt</th>
                            <th>
                                Địa chỉ</th>
                            <!-- <th>
                                Email
                            </th> -->
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