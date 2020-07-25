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
        <h2><span style="font-size: 35px;">Danh Sách Tài Khoản</span></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <a href="{{ route('tai-khoan.them-moi') }}"><button type="button" class="btn btn-round btn-primary">Thêm Mới</button></a>

        <a href="{{ route('tai-khoan.thung-rac') }}"><button type="button" class="btn btn-round btn-primary">Khôi Phục</button></a><br /><br />

        @include('Admin.blocks.alert')

        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên Tài Khoản</th>
              <th>Họ Tên</th>
              <th>Độ Tuổi</th>
              <th>Giới Tính</th>
              <th>Địa Chỉ</th>
              <th>Quốc Gia</th>
              <th>Email</th>
              <th>Số Điện Thoại</th>
              <th>Ảnh Đại Diện</th>
              <th>Thao Tác</th>
            </tr>
          </thead>

          <tbody>

          	@foreach($dsTaiKhoan as $taikhoan)
	            <tr>
	              <td>{{ $taikhoan->id }}</td>
	              <td>{{ $taikhoan->ten_tai_khoan }}</td>
                <td>{{ $taikhoan->ho_ten }}</td>
                <td>{{ $taikhoan->do_tuoi }}</td>
                <td>{{ $taikhoan->gioi_tinh }}</td>
                <td>{{ $taikhoan->dia_chi }}</td>
                <td>{{ $taikhoan->quoc_gia }}</td>
                <td>{{ $taikhoan->email }}</td>
                <td>{{ $taikhoan->so_dien_thoai }}</td>
                <td><img src="{{ asset('images/user/'.$taikhoan->anh_dai_dien) }}" width="120px" height="120px"></td>
	              <td>

                  <a href="{{ route('tai-khoan.cap-nhat', $taikhoan->id) }}"><button type="button" class="btn btn-round btn-success">Sửa</button></a>

                  <a href="{{ route('tai-khoan.xoa', $taikhoan->id) }}" onclick="return confirm('Bạn Có Muốn Xóa Tài Khoản Này ?')"><button type="button" class="btn btn-round btn-danger">Xóa</button></a>

                </td>
	            </tr>
        	  @endforeach

          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
