@extends('Admin/layout')

@section('css')
<!-- iCheck -->
<link href="{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
<!-- bootstrap-wysiwyg -->
<link href="{{ asset('assets/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
<!-- Select2 -->
<link href="{{ asset('assets/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
<!-- Switchery -->
<link href="{{ asset('assets/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
<!-- starrr -->
<link href="{{ asset('assets/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
<!-- bootstrap-daterangepicker -->
<link href="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">


<!-- bootstrap-progressbar -->
<link href="{{ asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
<!-- PNotify
<link href="{{ asset('assets/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet"> -->
@endsection

@section('js')
<!-- bootstrap-progressbar -->
<script src="{{ asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('assets/vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{ asset('assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
<script src="{{ asset('assets/vendors/google-code-prettify/src/prettify.js') }}"></script>
<!-- jQuery Tags Input -->
<script src="{{ asset('assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
<!-- Switchery -->
<script src="{{ asset('assets/vendors/switchery/dist/switchery.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/vendors/select2/dist/js/select2.full.min.js') }}"></script>
<!-- Parsley -->
<script src="{{ asset('assets/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
<!-- Autosize -->
<script src="{{ asset('assets/vendors/autosize/dist/autosize.min.js') }}"></script>
<!-- jQuery autocomplete -->
<script src="{{ asset('assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
<!-- starrr -->
<script src="{{ asset('assets/vendors/starrr/dist/starrr.js') }}"></script>


<!-- PNotify
<script src="{{ asset('assets/vendors/pnotify/dist/pnotify.js') }}"></script>
<script src="{{ asset('assets/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
<script src="{{ asset('assets/vendors/pnotify/dist/pnotify.nonblock.js') }}"></script> -->
@endsection

@section('main-content')
<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><span style="font-size: 35px;">Cập Nhật Quản Trị Viên <small>({{ $quantriViens->ten_tai_khoan_admin }})</small></span></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <a href="{{ route('trang-chu-admin') }}"><button type="button" class="btn btn-round btn-primary">Quay Lại</button></a><br /><br />

        @include('Admin.blocks.error')

        @include('Admin.blocks.alert')

        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">

          <li class="nav-item">
            <a class="nav-link active" id="thong-tin-quan-tri-vien-tab" data-toggle="tab" href="#thong-tin-quan-tri-vien" role="tab" aria-controls="thong-tin-quan-tri-vien" aria-selected="true">Thông Tin Quản Trị Viên</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="anh-dai-dien-admin-quan-tri-vien-tab" data-toggle="tab" href="#anh-dai-dien-admin-quan-tri-vien" role="tab" aria-controls="anh-dai-dien-admin-quan-tri-vien" aria-selected="false">Ảnh Đại Diện Admin Quản Trị Viên</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="mat-khau-admin-quan-tri-vien-tab" data-toggle="tab" href="#mat-khau-admin-quan-tri-vien" role="tab" aria-controls="mat-khau-admin-quan-tri-vien" aria-selected="false">Mật Khẩu Admin Quản Trị Viên</a>
          </li>

        </ul>

        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active" id="thong-tin-quan-tri-vien" role="tabpanel" aria-labelledby="thong-tin-quan-tri-vien-tab">

            <form action="{{ route('xu-ly-cap-nhat-admin', $quantriViens->id) }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              @csrf

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ten_tai_khoan_admin">Tên Tài Khoản Admin <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="text" id="ten_tai_khoan_admin" name="ten_tai_khoan_admin" class="form-control" value="{{ $quantriViens->ten_tai_khoan_admin }}" readonly="readonly">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ho_ten_admin">Họ Tên Admin <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="text" id="ho_ten_admin" name="ho_ten_admin" class="form-control" title="họ tên admin không vượt quá 40 ký tự" maxlength="40" value="{{ $quantriViens->ho_ten_admin }}" required>
                </div>
              </div>

              <div class="ln_solid"></div>

              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button type="submit" class="btn btn-app"><i class="fa fa-edit"></i>Sửa</button>
                </div>
              </div>

            </form>

          </div>

          <div class="tab-pane fade" id="anh-dai-dien-admin-quan-tri-vien" role="tabpanel" aria-labelledby="anh-dai-dien-admin-quan-tri-vien-tab">

            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="anh_dai_dien_admin_hien_tai">Ảnh Đại Diện Admin Hiện Tại <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6">
                <img src="{{ asset('images/admin/'.$quantriViens->anh_dai_dien_admin) }}" width="200px" height="200px">
              </div>
            </div>

            <br />

            <form action="{{ route('cap-nhat-hinh-anh-admin', $quantriViens->id) }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

              @csrf

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="anh_dai_dien_admin">Ảnh Đại Diện Admin Mới <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="file" id="anh_dai_dien_admin" name="anh_dai_dien_admin" title="ảnh đại diện admin mới với tên không vượt quá 255 ký tự, bao gồm đuôi mở rộng là jpeg, png, jpg" required>
                </div>
              </div>

              <div class="ln_solid"></div>

              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button type="submit" class="btn btn-app"><i class="fa fa-edit"></i>Sửa</button>
                </div>
              </div>

            </form>

          </div>

          <div class="tab-pane fade" id="mat-khau-admin-quan-tri-vien" role="tabpanel" aria-labelledby="mat-khau-admin-quan-tri-vien-tab">

            <form action="{{ route('thay-doi-mat-khau-admin', $quantriViens->id) }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              @csrf

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="mat_khau_admin_cu">Mật Khẩu Admin Cũ <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6" style="position: relative;">
                  <input type="password" id="mat_khau_admin_cu" name="mat_khau_admin_cu" class="form-control" title="mật khẩu admin cũ phải trùng khớp với mật khẩu admin hiện tại" minlength="6" maxlength="32" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,32}" required>
                  <a style="display: block; position: absolute; top: 25%; right: 25px; cursor: pointer;"><i class="fa fa-eye" onclick="showHidden5()"></i></a>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="mat_khau_admin">Mật Khẩu Admin Mới <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6" style="position: relative;">
                  <input type="password" id="mat_khau_admin" name="mat_khau_admin" class="form-control" title="mật khẩu admin mới dài 6-32 ký tự, bao gồm chữ hoa, chữ thường, số, dấu cách và ký tự đặt biệt" minlength="6" maxlength="32" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,32}" required>
                  <a style="display: block; position: absolute; top: 25%; right: 25px; cursor: pointer;"><i class="fa fa-eye" onclick="showHidden6()"></i></a>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="nhap_lai_mat_khau_admin_moi">Nhập Lại Mật Khẩu Admin Mới <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6" style="position: relative;">
                  <input type="password" id="nhap_lai_mat_khau_admin_moi" name="nhap_lai_mat_khau_admin_moi" class="form-control" title="nhập lại mật khẩu admin mới phải trùng khớp với mật khẩu admin mới" minlength="6" maxlength="32" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,32}" required>
                  <a style="display: block; position: absolute; top: 25%; right: 25px; cursor: pointer;"><i class="fa fa-eye" onclick="showHidden7()"></i></a>
                </div>
              </div>

              <div class="ln_solid"></div>

              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button type="submit" class="btn btn-app"><i class="fa fa-edit"></i>Sửa</button>
                </div>
              </div>

            </form>

          </div>

        </div>

      </div>
    </div>
  </div>
</div>
@endsection
