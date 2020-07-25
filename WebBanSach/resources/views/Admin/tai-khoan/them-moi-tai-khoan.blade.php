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
        <h2><span style="font-size: 35px;">Thêm Mới Tài Khoản</span></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <a href="{{ route('tai-khoan.danh-sach') }}"><button type="button" class="btn btn-round btn-primary">Quay Lại</button></a><br /><br />

        <form action="{{ route('tai-khoan.xu-ly-them-moi') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

          @csrf

          @include('Admin.blocks.error')

          @include('Admin.blocks.alert')

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="ten_tai_khoan">Tên Tài Khoản <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="text" id="ten_tai_khoan" name="ten_tai_khoan" class="form-control" title="tên tài khoản dài 6-24 ký tự, bao gồm chữ thường và số, không chứa ký tự đặt biệt" minlength="6" maxlength="24" pattern="^[a-z][a-z0-9]{5,}$">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="mat_khau">Mật Khẩu <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="password" id="mat_khau" name="mat_khau" class="form-control" title="mật khẩu dài 6-32 ký tự, bao gồm chữ hoa, chữ thường, số, dấu cách và ký tự đặt biệt" minlength="6" maxlength="32" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,32}">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nhap_lai_mat_khau">Nhập Lại Mật Khẩu <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="password" id="nhap_lai_mat_khau" name="nhap_lai_mat_khau" class="form-control" title="nhập lại mật khẩu phải trùng khớp với mật khẩu" minlength="6" maxlength="32" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,32}">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="ho_ten">Họ Tên <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="text" id="ho_ten" name="ho_ten" class="form-control" title="họ tên không vượt quá 40 ký tự" maxlength="40">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="do_tuoi">Độ Tuổi <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="number" id="do_tuoi" name="do_tuoi" class="form-control" title="độ tuổi nằm trong khoảng 10 tuổi đến 100 tuổi" min="10" max="100">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gioi_tinh">Giới Tính <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <select id="gioi_tinh" name="gioi_tinh" class="form-control">
                <option value="">Chọn...</option>
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
              </select>
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="dia_chi">Địa Chỉ <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="text" id="dia_chi" name="dia_chi" class="form-control" title="địa chỉ không vượt quá 100 ký tự" maxlength="100">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="quoc_gia">Quốc Gia <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <select id="quoc_gia" name="quoc_gia" class="form-control">
                <option value="">Chọn...</option>
                <option value="Argentina">Argentina</option>
                <option value="Australia">Australia</option>
                <option value="Belgium">Belgium</option>
                <option value="Brazil">Brazil</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="Colombia">Colombia</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Egypt">Egypt</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Greece">Greece</option>
                <option value="Hong Kong S.A.R.">Hong Kong S.A.R.</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Korea">Korea</option>
                <option value="Korea, North">Korea, North</option>
                <option value="Laos">Laos</option>
                <option value="Macau S.A.R.">Macau S.A.R.</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Mexico">Mexico</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Norway">Norway</option>
                <option value="Philippines">Philippines</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Qatar">Qatar</option>
                <option value="Russia">Russia</option>
                <option value="Thailand">Thailand</option>
                <option value="Việt Nam">Việt Nam</option>
              </select>
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="email" id="email" name="email" class="form-control" title="email không vượt quá 40 ký tự" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="so_dien_thoai">Số Điện Thoại <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="tel" id="so_dien_thoai" name="so_dien_thoai" class="form-control" title="số điện thoại phải điền đúng 10 số" maxlength="10" pattern="[0-9]{10}">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="anh_dai_dien">Ảnh Đại Diện <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input type="file" id="anh_dai_dien" name="anh_dai_dien" title="ảnh đại diện với tên không vượt quá 255 ký tự, bao gồm đuôi mở rộng là jpeg, png, jpg">
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
