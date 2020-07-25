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
        <h2><span style="font-size: 35px;">Thêm Mới Sản Phẩm</span></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <a href="{{ route('san-pham.danh-sach') }}"><button type="button" class="btn btn-round btn-primary">Quay Lại</button></a><br /><br />

        <form action="{{ route('san-pham.xu-ly-them-moi') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

          @csrf

          @include('Admin.blocks.error')

          @include('Admin.blocks.alert')

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="ma_san_pham">Mã Sản Phẩm <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="text" id="ma_san_pham" name="ma_san_pham" class="form-control" placeholder="VD: SP000" title="mã sản phẩm dài 5-10 ký tự, bao gồm chữ hoa và số" minlength="5" maxlength="10" pattern="^[A-Z]{2}[0-9]{3,}$">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="ten_san_pham">Tên Sản Phẩm <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="text" id="ten_san_pham" name="ten_san_pham" class="form-control" title="tên sản phẩm không vượt quá 40 ký tự" maxlength="40">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="thong_tin_san_pham">Thông Tin Sản Phẩm <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="text" id="thong_tin_san_pham" name="thong_tin_san_pham" class="form-control" title="thông tin sản phẩm không vượt quá 1000 ký tự" maxlength="1000">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="ngay_xuat_ban_san_pham">Ngày Xuất Bản Sản Phẩm <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="date" id="ngay_xuat_ban_san_pham" name="ngay_xuat_ban_san_pham">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gia_tien_san_pham">Giá Tiền Sản Phẩm <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="number" id="gia_tien_san_pham" name="gia_tien_san_pham" class="form-control" title="giá tiền sản phẩm nằm trong khoảng 1.000 vnđ đến 999.999 vnđ" min="1000" max="999999">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="anh_minh_hoa_san_pham">Ảnh Minh Họa Sản Phẩm <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="file" id="anh_minh_hoa_san_pham" name="anh_minh_hoa_san_pham" title="ảnh minh họa sản phẩm với tên không vượt quá 255 ký tự, bao gồm đuôi mở rộng là jpeg, png, jpg">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nha_xuat_ban_id">Nhà Xuất Bản <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <select id="nha_xuat_ban_id" name="nha_xuat_ban_id" class="form-control">
                <option value="">Chọn...</option>

                @foreach($dsNhaXuatBan as $nhaxuatban)
                <option value="{{ $nhaxuatban->ma_nha_xuat_ban }}">{{ $nhaxuatban->ten_nha_xuat_ban }}</option>
                @endforeach

              </select>
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="loai_san_pham_id">Loại Sản Phẩm <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <select id="loai_san_pham_id" name="loai_san_pham_id" class="form-control">
                <option value="">Chọn...</option>

                @foreach($dsLoaiSanPham as $loaisanpham)
                <option value="{{ $loaisanpham->ma_loai_san_pham }}">{{ $loaisanpham->ten_loai_san_pham }}</option>
                @endforeach

              </select>
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="hinh_thuc_san_pham_id">Hình Thức Sản Phẩm <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <select id="hinh_thuc_san_pham_id" name="hinh_thuc_san_pham_id" class="form-control">
                <option value="">Chọn...</option>

                @foreach($dsHinhThucSanPham as $hinhthucsanpham)
                <option value="{{ $hinhthucsanpham->loai_hinh_thuc_san_pham }}">{{ $hinhthucsanpham->ten_hinh_thuc_san_pham }}</option>
                @endforeach

              </select>
            </div>
          </div>

          <div class="ln_solid"></div>

          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="reset" class="btn btn-app"><i class="fa fa-edit"></i>Hoàn Tác</button>
              <button type="submit" class="btn btn-app"><i class="fa fa-plus"></i>Thêm</button>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
@endsection
