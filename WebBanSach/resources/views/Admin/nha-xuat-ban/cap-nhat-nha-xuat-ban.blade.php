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
        <h2><span style="font-size: 35px;">Cập Nhật Nhà Xuất Bản <small>({{ $nhaxuatBans->ma_nha_xuat_ban }})</small></span></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <a href="{{ route('nha-xuat-ban.danh-sach') }}"><button type="button" class="btn btn-round btn-primary">Quay Lại</button></a><br /><br />

        <form action="{{ route('nha-xuat-ban.xu-ly-cap-nhat', $nhaxuatBans->id) }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

          @csrf

          @include('Admin.blocks.error')

          @include('Admin.blocks.alert')

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="ma_nha_xuat_ban">Mã Nhà Xuất Bản <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="text" id="ma_nha_xuat_ban" name="ma_nha_xuat_ban" class="form-control" value="{{ $nhaxuatBans->ma_nha_xuat_ban }}" readonly="readonly">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="ten_nha_xuat_ban">Tên Nhà Xuất Bản <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="text" id="ten_nha_xuat_ban" name="ten_nha_xuat_ban" class="form-control" title="tên nhà xuất bản không vượt quá 40 ký tự" maxlength="40" value="{{ $nhaxuatBans->ten_nha_xuat_ban }}" required>
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="dia_chi_nha_xuat_ban">Địa Chỉ Nhà Xuất Bản <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="text" id="dia_chi_nha_xuat_ban" name="dia_chi_nha_xuat_ban" class="form-control" title="địa chỉ nhà xuất bản không vượt quá 100 ký tự" maxlength="100" value="{{ $nhaxuatBans->dia_chi_nha_xuat_ban }}" required>
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="website_nha_xuat_ban">Website Nhà Xuất Bản <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="url" id="website_nha_xuat_ban" name="website_nha_xuat_ban" class="form-control" placeholder="http:// hoặc https://" title="website nhà xuất bản không vượt quá 40 ký tự" maxlength="40" pattern="https?://.+" value="{{ $nhaxuatBans->website_nha_xuat_ban }}" required>
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="email_nha_xuat_ban">Email Nhà Xuất Bản <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="email" id="email_nha_xuat_ban" name="email_nha_xuat_ban" class="form-control" title="email nhà xuất bản không vượt quá 40 ký tự" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="{{ $nhaxuatBans->email_nha_xuat_ban }}" required>
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="so_dien_thoai_nha_xuat_ban">Số Điện Thoại Nhà Xuất Bản <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="tel" id="so_dien_thoai_nha_xuat_ban" name="so_dien_thoai_nha_xuat_ban" class="form-control" title="số điện thoại nhà xuất bản khoảng 8-11 số" minlength="8" maxlength="11" pattern="[0-9]{8,11}" value="{{ $nhaxuatBans->so_dien_thoai_nha_xuat_ban }}" required>
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
