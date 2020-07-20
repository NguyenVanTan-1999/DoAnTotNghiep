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
@endsection

@section('main-content')
<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><span style="font-size: 35px;">Cập Nhật Loại Sản Phẩm <small>({{ $loaisanPhams->ma_loai_san_pham }})</small></span></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <a href="{{ route('loai-san-pham.danh-sach') }}"><button type="button" class="btn btn-round btn-primary">Quay Lại</button></a><br /><br />

        <form action="{{ route('loai-san-pham.xu-ly-cap-nhat', $loaisanPhams->id) }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

          @csrf

          @include('Admin.blocks.error')

          @include('Admin.blocks.alert')

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="ma_loai_san_pham">Mã Loại Sản Phẩm <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="text" id="ma_loai_san_pham" name="ma_loai_san_pham" class="form-control" value="{{ $loaisanPhams->ma_loai_san_pham }}" readonly="readonly">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="ten_loai_san_pham">Tên Loại Sản Phẩm <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="text" id="ten_loai_san_pham" name="ten_loai_san_pham" class="form-control" value="{{ $loaisanPhams->ten_loai_san_pham }}" maxlength="100">
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
@endsection
