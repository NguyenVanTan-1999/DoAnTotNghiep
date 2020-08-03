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
        <h2><span style="font-size: 35px;">Cập Nhật Tài Khoản <small>({{ $taiKhoans->ten_tai_khoan }})</small></span></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <a href="{{ route('tai-khoan.danh-sach') }}"><button type="button" class="btn btn-round btn-primary">Quay Lại</button></a><br /><br />

        @include('Admin.blocks.error')

        @include('Admin.blocks.alert')

        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">

          <li class="nav-item">
            <a class="nav-link active" id="thong-tin-tai-khoan-tab" data-toggle="tab" href="#thong-tin-tai-khoan" role="tab" aria-controls="thong-tin-tai-khoan" aria-selected="true">Thông Tin Tài Khoản</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="anh-dai-dien-tai-khoan-tab" data-toggle="tab" href="#anh-dai-dien-tai-khoan" role="tab" aria-controls="anh-dai-dien-tai-khoan" aria-selected="false">Ảnh Đại Diện Tài Khoản</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="mat-khau-tai-khoan-tab" data-toggle="tab" href="#mat-khau-tai-khoan" role="tab" aria-controls="mat-khau-tai-khoan" aria-selected="false">Mật Khẩu Tài Khoản</a>
          </li>

        </ul>

        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active" id="thong-tin-tai-khoan" role="tabpanel" aria-labelledby="thong-tin-tai-khoan-tab">

            <form action="{{ route('tai-khoan.xu-ly-cap-nhat', $taiKhoans->id) }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              @csrf

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ten_tai_khoan">Tên Tài Khoản <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="text" id="ten_tai_khoan" name="ten_tai_khoan" class="form-control" value="{{ $taiKhoans->ten_tai_khoan }}" readonly="readonly">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ho_ten">Họ Tên <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="text" id="ho_ten" name="ho_ten" class="form-control" title="họ tên không vượt quá 40 ký tự" maxlength="40" value="{{ $taiKhoans->ho_ten }}" required>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="do_tuoi">Độ Tuổi <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="number" id="do_tuoi" name="do_tuoi" class="form-control" title="độ tuổi nằm trong khoảng 10 tuổi đến 100 tuổi" min="10" max="100" value="{{ $taiKhoans->do_tuoi }}" required>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="gioi_tinh">Giới Tính <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select id="gioi_tinh" name="gioi_tinh" class="form-control" required>
                    <option value="{{ $taiKhoans->gioi_tinh }}">{{ $taiKhoans->gioi_tinh }}</option>
                    <option value="">---</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="dia_chi">Địa Chỉ <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="text" id="dia_chi" name="dia_chi" class="form-control" title="địa chỉ không vượt quá 100 ký tự" maxlength="100" value="{{ $taiKhoans->dia_chi }}" required>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="quoc_gia">Quốc Gia <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select id="quoc_gia" name="quoc_gia" class="form-control" required>
                    <option value="{{ $taiKhoans->quoc_gia }}">{{ $taiKhoans->quoc_gia }}</option>
                    <option value="">---</option>
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
                  <input type="email" id="email" name="email" class="form-control" title="email không vượt quá 40 ký tự" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="{{ $taiKhoans->email }}" required>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="so_dien_thoai">Số Điện Thoại <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="tel" id="so_dien_thoai" name="so_dien_thoai" class="form-control" title="số điện thoại phải điền đúng 10 số" maxlength="10" pattern="[0-9]{10}" value="{{ $taiKhoans->so_dien_thoai }}" required>
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

          <div class="tab-pane fade" id="anh-dai-dien-tai-khoan" role="tabpanel" aria-labelledby="anh-dai-dien-tai-khoan-tab">

            <form action="{{ route('tai-khoan.cap-nhat-hinh-anh', $taiKhoans->id) }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

              @csrf

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="anh_dai_dien">Ảnh Đại Diện <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="file" id="anh_dai_dien" name="anh_dai_dien" title="ảnh đại diện với tên không vượt quá 255 ký tự, bao gồm đuôi mở rộng là jpeg, png, jpg" required>
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

          <div class="tab-pane fade" id="mat-khau-tai-khoan" role="tabpanel" aria-labelledby="mat-khau-tai-khoan-tab">

            <form action="{{ route('tai-khoan.thay-doi-mat-khau', $taiKhoans->id) }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              @csrf

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="mat_khau_cu">Mật Khẩu Cũ <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6" style="position: relative;">
                  <input type="password" id="mat_khau_cu" name="mat_khau_cu" class="form-control" title="mật khẩu cũ phải trùng khớp với mật khẩu hiện tại" minlength="6" maxlength="32" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,32}" required>
                  <a style="display: block; position: absolute; top: 25%; right: 25px; cursor: pointer;"><i class="fa fa-eye" onclick="showHidden3()"></i></a>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="mat_khau">Mật Khẩu Mới <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6" style="position: relative;">
                  <input type="password" id="mat_khau" name="mat_khau" class="form-control" title="mật khẩu mới dài 6-32 ký tự, bao gồm chữ hoa, chữ thường, số, dấu cách và ký tự đặt biệt" minlength="6" maxlength="32" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,32}" required>
                  <a style="display: block; position: absolute; top: 25%; right: 25px; cursor: pointer;"><i class="fa fa-eye" onclick="showHidden1()"></i></a>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="nhap_lai_mat_khau_moi">Nhập Lại Mật Khẩu Mới <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6" style="position: relative;">
                  <input type="password" id="nhap_lai_mat_khau_moi" name="nhap_lai_mat_khau_moi" class="form-control" title="nhập lại mật khẩu mới phải trùng khớp với mật khẩu mới" minlength="6" maxlength="32" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,32}" required>
                  <a style="display: block; position: absolute; top: 25%; right: 25px; cursor: pointer;"><i class="fa fa-eye" onclick="showHidden4()"></i></a>
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
