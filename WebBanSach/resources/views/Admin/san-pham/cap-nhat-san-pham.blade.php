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
        <h2><span style="font-size: 35px;">Cập Nhật Sản Phẩm <small>({{ $sanPhams->ma_san_pham }})</small></span></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <a href="{{ route('san-pham.danh-sach') }}"><button type="button" class="btn btn-round btn-primary">Quay Lại</button></a><br /><br />

        @include('Admin.blocks.error')

        @include('Admin.blocks.alert')

        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">

          <li class="nav-item">
            <a class="nav-link active" id="thong-tin-san-pham-tab" data-toggle="tab" href="#thong-tin-san-pham" role="tab" aria-controls="thong-tin-san-pham" aria-selected="true">Thông Tin Sản Phẩm</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="anh-minh-hoa-san-pham-tab" data-toggle="tab" href="#anh-minh-hoa-san-pham" role="tab" aria-controls="anh-minh-hoa-san-pham" aria-selected="false">Ảnh Minh Họa Sản Phẩm</a>
          </li>

        </ul>

        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active" id="thong-tin-san-pham" role="tabpanel" aria-labelledby="thong-tin-san-pham-tab">

            <form action="{{ route('san-pham.xu-ly-cap-nhat', $sanPhams->id) }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              @csrf

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ma_san_pham">Mã Sản Phẩm <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="text" id="ma_san_pham" name="ma_san_pham" class="form-control" value="{{ $sanPhams->ma_san_pham }}" readonly="readonly">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ten_san_pham">Tên Sản Phẩm <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="text" id="ten_san_pham" name="ten_san_pham" class="form-control" title="tên sản phẩm không vượt quá 60 ký tự" maxlength="60" value="{{ $sanPhams->ten_san_pham }}" required>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="thong_tin_san_pham">Thông Tin Sản Phẩm <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="text" id="thong_tin_san_pham" name="thong_tin_san_pham" class="form-control" title="thông tin sản phẩm không vượt quá 1000 ký tự" maxlength="1000" value="{{ $sanPhams->thong_tin_san_pham }}" required>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ngay_xuat_ban_san_pham">Ngày Xuất Bản Sản Phẩm <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="date" id="ngay_xuat_ban_san_pham" name="ngay_xuat_ban_san_pham" value="{{ $sanPhams->ngay_xuat_ban_san_pham }}" required>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="gia_tien_san_pham">Giá Tiền Sản Phẩm <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="number" id="gia_tien_san_pham" name="gia_tien_san_pham" class="form-control" title="giá tiền sản phẩm nằm trong khoảng 1.000 vnđ đến 999.999 vnđ" min="1000" max="999999" value="{{ $sanPhams->gia_tien_san_pham }}" required>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="gia_tien_giam_gia">Giá Tiền Giảm Giá <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="number" id="gia_tien_giam_gia" name="gia_tien_giam_gia" class="form-control" title="giá tiền giảm giá phải nhỏ hơn giá tiền sản phẩm, nằm trong khoảng 0 vnđ đến 999.999 vnđ" min="0" max="999999" value="{{ $sanPhams->gia_tien_giam_gia }}" required>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="phan_tram_giam_gia">Phần Trăm Giảm Giá <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="number" id="phan_tram_giam_gia" name="phan_tram_giam_gia" class="form-control" title="phần trăm giảm giá nằm trong khoảng 0 % đến 100 %" min="0" max="100" value="{{ $sanPhams->phan_tram_giam_gia }}" required>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="nha_xuat_ban_id">Nhà Xuất Bản <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select id="nha_xuat_ban_id" name="nha_xuat_ban_id" class="form-control" required>
                    <option value="{{ $sanPhams->nhaxuatBan->ma_nha_xuat_ban }}">{{ $sanPhams->nhaxuatBan->ten_nha_xuat_ban }}</option>
                    <option value="">---</option>

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
                  <select id="loai_san_pham_id" name="loai_san_pham_id" class="form-control" required>
                    <option value="{{ $sanPhams->loaisanPham->ma_loai_san_pham }}">{{ $sanPhams->loaisanPham->ten_loai_san_pham }}</option>
                    <option value="">---</option>

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
                  <select id="hinh_thuc_san_pham_id" name="hinh_thuc_san_pham_id" class="form-control" required>
                    <option value="{{ $sanPhams->hinhthucsanPham->loai_hinh_thuc_san_pham }}">{{ $sanPhams->hinhthucsanPham->ten_hinh_thuc_san_pham }}</option>
                    <option value="">---</option>

                    @foreach($dsHinhThucSanPham as $hinhthucsanpham)
                    <option value="{{ $hinhthucsanpham->loai_hinh_thuc_san_pham }}">{{ $hinhthucsanpham->ten_hinh_thuc_san_pham }}</option>
                    @endforeach

                  </select>
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

          <div class="tab-pane fade" id="anh-minh-hoa-san-pham" role="tabpanel" aria-labelledby="anh-minh-hoa-san-pham-tab">

            <form action="{{ route('san-pham.cap-nhat-hinh-anh', $sanPhams->id) }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

              @csrf

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="anh_minh_hoa_san_pham">Ảnh Minh Họa Sản Phẩm <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="file" id="anh_minh_hoa_san_pham" name="anh_minh_hoa_san_pham" title="ảnh minh họa sản phẩm với tên không vượt quá 255 ký tự, bao gồm đuôi mở rộng là jpeg, png, jpg" required>
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
