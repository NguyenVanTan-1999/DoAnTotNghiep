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
        <h2><span style="font-size: 35px;">Chi Tiết Hóa Đơn <small>({{ $hoaDons->hoa_don_id }})</small></span></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <a href="{{ route('hoa-don.danh-sach') }}"><button type="button" class="btn btn-round btn-primary">Quay Lại</button></a>

        <a href="{{ route('hoa-don.xu-ly-cap-nhat', $xacNhans->id) }}" onclick="return confirm('Bạn Có Xác Nhận Hóa Đơn Này ?')"><button type="button" class="btn btn-round btn-primary">Xác Nhận</button></a><br /><br />

        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Hóa Đơn</th>
              <th>Tên Sản Phẩm</th>
              <th>Ảnh Minh Họa</th>
              <th>Số Lượng</th>
              <th>Đơn Giá</th>
            </tr>
          </thead>

          <tbody>

          	@foreach($dsChiTietHoaDon as $chitiethoadon)
	            <tr>
	              <td>{{ $chitiethoadon->id }}</td>
	              <td>{{ $chitiethoadon->hoa_don_id }}</td>
	              <td>{{ $chitiethoadon->sanPham->ten_san_pham }}</td>
                <td><img src="{{ asset('images/product/'.$chitiethoadon->sanPham->anh_minh_hoa_san_pham) }}" width="120px" height="120px"></td>
                <td>{{ $chitiethoadon->so_luong }}</td>
                <td>{{ $chitiethoadon->don_gia }}</td>
	            </tr>
        	  @endforeach

          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
