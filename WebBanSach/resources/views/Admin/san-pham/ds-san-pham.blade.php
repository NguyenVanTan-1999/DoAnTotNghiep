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
        <h2><span style="font-size: 35px;">Danh Sách Sản Phẩm</span></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <a href="{{ route('san-pham.them-moi') }}"><button type="button" class="btn btn-round btn-primary">Thêm Mới</button></a>

        <a href="{{ route('san-pham.thung-rac') }}"><button type="button" class="btn btn-round btn-primary">Khôi Phục</button></a><br /><br />

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
              <th>Ảnh Minh Họa SP</th>
              <th>NXB</th>
              <th>Loại SP</th>
              <th>Hình Thức SP</th>
              <th>Thao Tác</th>
            </tr>
          </thead>

          <tbody>

          	@foreach($dsSanPham as $sanpham)
            <?php 
              $nhaxuatBan = DB::table('nha_xuat_ban')->where('ma_nha_xuat_ban', $sanpham->nha_xuat_ban_id)->get();
              $loaisanPham = DB::table('loai_san_pham')->where('ma_loai_san_pham', $sanpham->loai_san_pham_id)->get();
              $hinhthucsanPham = DB::table('hinh_thuc_san_pham')->where('loai_hinh_thuc_san_pham', $sanpham->hinh_thuc_san_pham_id)->get();
            ?>
	            <tr>
	              <td>{{ $sanpham->id }}</td>
	              <td>{{ $sanpham->ma_san_pham }}</td>
	              <td>{{ $sanpham->ten_san_pham }}</td>
                <td>{{ $sanpham->thong_tin_san_pham }}</td>
                <td>{{ $sanpham->ngay_xuat_ban_san_pham }}</td>
                <td>{{ $sanpham->gia_tien_san_pham }}</td>
                <td><img src="{{ asset('images/product/'.$sanpham->anh_minh_hoa_san_pham) }}" width="120px" height="120px"></td>
                <td>{{ $nhaxuatBan[0]->ten_nha_xuat_ban }}</td>
                <td>{{ $loaisanPham[0]->ten_loai_san_pham }}</td>
                <td>{{ $hinhthucsanPham[0]->ten_hinh_thuc_san_pham }}</td>
	              <td>

                  <a href="{{ route('san-pham.cap-nhat', $sanpham->id) }}"><button type="button" class="btn btn-round btn-success">Sửa</button></a>

                  <a href="{{ route('san-pham.xoa', $sanpham->id) }}" onclick="return confirm('Bạn Có Muốn Xóa Sản Phẩm Này ?')"><button type="button" class="btn btn-round btn-danger">Xóa</button></a>

                </td>
	            </tr>
        	  @endforeach

          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
