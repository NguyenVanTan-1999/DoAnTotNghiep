@extends('Admin/layout')

@section('css')
<!-- iCheck -->
<link href="{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
<!-- Datatables -->
<link href="{{ asset('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('js')
<!-- iCheck -->
<script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>
<!-- Datatables -->
<script src="{{ asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('assets/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
@endsection

@section('main-content')
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><span style="font-size: 35px;">Khôi Phục Sản Phẩm</span></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <a href="{{ route('san-pham.danh-sach') }}"><button type="button" class="btn btn-round btn-primary">Quay Lại</button></a><br /><br />

        @include('Admin.blocks.alert')

        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Mã SP</th>
              <th>Tên SP</th>
              <th>Thông Tin SP</th>
              <th>Ngày Xuất Bản SP</th>
              <th>Giá Tiền SP</th>
              <th>Giá Tiền GG</th>
              <th>Phần Trăm GG</th>
              <th>Ảnh Minh Họa SP</th>
              <th>NXB</th>
              <th>Loại SP</th>
              <th>Hình Thức SP</th>
              <th>Thao Tác</th>
            </tr>
          </thead>

          <tbody>

          	@foreach($dsSanPham ?? '' as $sanpham)
	            <tr>
	              <td>{{ $sanpham->id }}</td>
                <td>{{ $sanpham->ma_san_pham }}</td>
                <td>{{ $sanpham->ten_san_pham }}</td>
                <td>{{ $sanpham->thong_tin_san_pham }}</td>
                <td>{{ $sanpham->ngay_xuat_ban_san_pham }}</td>
                <td>{{ $sanpham->gia_tien_san_pham }}</td>
                <td>{{ $sanpham->gia_tien_giam_gia }}</td>
                <td>{{ $sanpham->phan_tram_giam_gia }}</td>
                <td><img src="{{ asset('images/product/'.$sanpham->anh_minh_hoa_san_pham) }}" width="120px" height="120px"></td>
                <td>{{ $sanpham->nhaxuatBan->ten_nha_xuat_ban }}</td>
                <td>{{ $sanpham->loaisanPham->ten_loai_san_pham }}</td>
                <td>{{ $sanpham->hinhthucsanPham->ten_hinh_thuc_san_pham }}</td>
	              <td>

                  <a href="{{ route('san-pham.khoi-phuc', $sanpham->id) }}" onclick="return confirm('Bạn Có Muốn Khôi Phục Sản Phẩm Này ?')"><button type="button" class="btn btn-round btn-info">Khôi Phục</button></a>

                </td>
	            </tr>
        	  @endforeach

          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
