@extends('admin.layout')
@section('admin-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
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
            <form method="post" name="frm" action="title" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                                    <!-- <label for="inputName">Tiêu đề</label> -->
                                  
                                    <input required name="title" type="text" id="ten_lienhe" class="form-control"
                                    placeholder="Title...">
                                </div>


                                <div class="form-group">
                <label for="inputStatus">protype_id</label>
                <select id="inputStatus" name="tranghienthi" class="form-control custom-select">
                 
             
                  <option selected value="0">Trang chủ</option>
                  <option selected value="1">Trang tin tuc</option>
                  <option selected value="2">Trang chủ</option>
                  <option selected value="3">Trang chủ</option>
                  <option selected value="4">Trang chủ</option>

          
                </select>
              </div>

                          

                           

                            <div class="card-body item_lienhe">
                                <p>&nbsp;</p>
                                
                                <input type="submit" id="button1" value="Gửi" onclick="js_submit();">
                                <input type="button" id="button2" value="Nhập lại" onclick="document.frm.reset();">
                            </div>
                            <style>
                            #button1 {
                                padding: 7px px 25px;
                                background: #ee0303;
                                border: none;
                                color: #fff;
                                border-radius: 3px;
                                margin: 10px 0px;
                                cursor: pointer;
                            }

                            #button2 {
                                padding: 7px px 25px;
                                background: #ee0303;
                                border: none;
                                color: #fff;
                                border-radius: 3px;
                                margin: 10px 0px;
                                cursor: pointer;
                            }
                            </style>
                        </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection