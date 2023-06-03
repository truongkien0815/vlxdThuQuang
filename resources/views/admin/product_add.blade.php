@extends('admin.layout')
@section('admin-content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product Add</li>
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

                        <form action="{{ url('/admin/product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Tên sp</label>
                                <input type="text" required name="product_name" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Đặc tả</label>
                                <textarea id="inputDescription" required name="description" class="form-control"
                                    rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Loại sp</label>
                                <select id="inputStatus" name="type_id" class="form-control custom-select">
                                    <option disabled>Select one</option>
                                    @foreach($type as $itam)
                                    <option selected value="{{ $itam->type_id}}">{{ $itam->type_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Menu con</label>
                                <select id="inputStatus" name="item_id" class="form-control custom-select">
                                    <option selected >0</option>
                                    @foreach($items as $itam)
                                    <option value="{{ $itam->item_id}}">{{ $itam->name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="inputClientCompany">Type</label>
                                <input type="text" required name="type" id="inputClientCompany"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputClientCompany">Giá</label>
                                <input type="text" required name="price" id="inputClientCompany"
                                    class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="inputClientCompany">Giá khuyến mãi</label>
                                <input type="text" required name="giakm" id="inputClientCompany"
                                    class="form-control">
                            </div>
                            <div class="form-group">

                                <label for="inputProjectLeader">Nội dung chi tiết</label>

                                <textarea id="summernote" required name="thongso">
                                      
                                     </textarea>
                                  
                                <!-- <input type="text" required name="thongso" id="inputProjectLeader"  class="form-control"> -->
                            </div>
                          



                            <!-- <div class="form-group">
                                <label for="inputEstimatedBudget">Tên không dấu</label>
                                <input type="text" required id="inputEstimatedBudget" class="form-control" name="slug"
                                    step="1">
                            </div> -->



                            <div class="form-group">
                                <label for="inputName">keyword</label>
                                <input type="text" required name="keyword" id="inputName" class="form-control">
                            </div>
                            <!-- <div class="form-group">
                                <label for="inputName">vn_detail</label>
                                <input type="text" required name="vn_detail" id="inputName" class="form-control">
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="inputName">vn dac diem</label>
                                <input type="text" required name="vn_dacdiem" id="inputName" class="form-control">
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="inputName">vote</label>
                                <input type="number" required name="vote" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">properties</label>
                                <input type="text" required name="properties" id="inputName" class="form-control">
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="inputName">status</label>
                                <input type="number" required name="status" id="inputName" class="form-control">
                            </div>
                           -->
                          
                            <!-- <div class=" form-group">
                                <label for="inputStatus">Tai lieu</label>
                                <select id="inputStatus" name="document_id" class="form-control custom-select">
                                    <option disabled>Select one</option>
                                    <option value="0">Không có</option>
                                    @foreach($documents as $itam)

                                    <option selected value="{{ $itam->document_id}}">{{ $itam->tieude}}</option>
                                    @endforeach
                                </select>
                            </div> -->

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Budget</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputProjectLeader">Title</label>
                            <input type="text" required name="title" id="inputProjectLeader" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Hình ảnh</label>
                            <input type="file" name="image" class="form-control" style="padding-bottom: 35px;" required>

                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Hình ảnh</label>
                            <input type="file" name="image1" class="form-control" style="padding-bottom: 35px;" required>

                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Hình ảnh</label>
                            <input type="file" name="image2" class="form-control" style="padding-bottom: 35px;" required>

                        </div>

                        <!-- <div class="form-group">
                                <label for="inputName">is_sale</label>
                                <input type="number" required name="is_sale" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">	sale_price</label>
                                <input type="text" required name="sale_price" id="inputName" class="form-control">
                            </div> -->
                            <label for="inputName">Số thứ tự</label>
                <input type="number" required id="inputName" class="form-control" name="stt" >
                        <input type="checkbox" name="home" id="hom"> Hiển thị thanh menu
                        <br>
                        <input type="checkbox" name="noibat" id="noibat"> Hiển thị sản phẩm khác
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new Project" class="btn btn-success float-right">
            </div>
        </div>
    </section>
    </form>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection