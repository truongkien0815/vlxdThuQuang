@extends('admin.layout')
@section('admin-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chỉnh sửa loại sp</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Project Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <form action="{{url('type/'.$type->type_id)}}" method="post" enctype="multipart/form-data">


                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="inputName">Tên loại sp</label>
                                    <input type="text" id="inputName" class="form-control" name="type_name"
                                        value="{{$type->type_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Type</label>
                                    <input type="text" required name="type" id="inputName" class="form-control"
                                        value="{{$type->type}}">
                                </div>
                                <!-- <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" class="form-control" name="descrip" rows="4"></textarea>
              </div> -->
                                <div class="form-group">
                                    <label for="inputStatus">id loại sp chính</label>
                                    <select name="protype_id" id="inputStatus" class="form-control custom-select">
                                        <option disabled>Select one</option>
                                        @foreach($protype as $item)

                                        <option value="{{ $item->protype_id}}">{{ $item->name}}</option>
                                        @endforeach
                                        <option selected value="{{ $type->protype_id}}">
                                            @if($type->protype_id != 0)
                                            {{ $type->protypes->name}}
                                            @else
                                            0
                                            @endif
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputProjectLeader">Hình ảnh sản phẩm</label>
                                    <input type="file" name="image" id="fileToUpload" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Hình ảnh công ty</label>
                                    <input type="file" name="img_congty" id="fileToUpload" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputName">ten khong dau</label>
                                    <input type="text" name="slug" id="inputName" class="form-control"
                                        value="{{$type->slug}}">
                                </div>
                                <!-- <div class="form-group">
                <label for="inputName">vn detailt</label>
                <input type="text" required name="vn_detail" id="inputName" class="form-control" value="{{$type->vn_detail}}">
              </div> -->
                                <!-- <div class="form-group">
                <label for="inputName">vn title site</label>
                <input type="text" required name="vn_title_site" id="inputName" class="form-control" value="{{$type->vn_title_site}}">
              </div> -->
                                <div class="form-group">
                                    <label for="inputName">Title</label>
                                    <input type="text" required name="title" id="inputName" class="form-control"
                                        value="{{$type->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Số thứ tự</label>
                                    <input type="number" required name="stt" id="inputName" class="form-control"
                                        value="{{$type->stt}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">keyword</label>
                                    <input type="text" required name="keywords" id="inputName" class="form-control"
                                        value="{{$type->keywords}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">description</label>
                                    <input type="text" required name="description" id="inputName" class="form-control"
                                        value="{{$type->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Đặc tả</label>
                                    <textarea id="summernote" required name="dacta" class="form-control"
                                        rows="4">{!!$type->dacta!!}  </textarea>
                                </div>
@if($type->home == 'on')
                                <input type="checkbox" name="home" checked="on" id="home"> Hiển thị thanh menu | {{$type->home}}
                              @else
                                <input type="checkbox" name="home"  id="home"> Hiển thị thanh menu | {{$type->home}}
                              @endif


                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">


            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>

                <input type="submit" value="Save Changes" class="btn btn-success float-right">
            </div>
        </div>
    </section>
    </form>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection