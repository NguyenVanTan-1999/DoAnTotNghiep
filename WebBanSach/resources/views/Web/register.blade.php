@extends('Web/layout')

@section('main-content')
<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumbs-menu">
					<ul>
						<li><a href="{{ route('website-ban-sach.trang-chu') }}">Trang Chủ</a></li>
						<li><a href="{{ route('website-ban-sach.dang-ky') }}" class="active">Đăng Ký</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs-area-end -->

<!-- user-login-area-start -->
<div class="user-login-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="login-title text-center mb-30">
					<h2>ĐĂNG KÝ</h2>
				</div>
			</div>

			<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
				<div class="billing-fields">

					<div class="single-register">
						<form action="{{ route('website-ban-sach.xu-ly-dang-ky') }}" method="POST" enctype="multipart/form-data">

							@csrf

							@include('Web.blocks.error')

							@include('Web.blocks.alert')

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="single-register">
										<label for="ho">Họ <span>*</span></label>
										<input type="text" id="ho" name="ho" title="họ không vượt quá 10 ký tự" maxlength="10" required />
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="single-register">
										<label for="ten">Tên <span>*</span></label>
										<input type="text" id="ten" name="ten" title="tên không vượt quá 30 ký tự" maxlength="30" required />
									</div>
								</div>
							</div>

							<div class="single-register">
								<label for="ten_tai_khoan">Tên Tài Khoản <span>*</span></label>
								<input type="text" id="ten_tai_khoan" name="ten_tai_khoan" title="tên tài khoản dài 6-24 ký tự, bao gồm chữ thường và số, không chứa ký tự đặt biệt" minlength="6" maxlength="24" pattern="^[a-z][a-z0-9]{5,}$" required />
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="single-register">
										<label for="email">Email <span>*</span></label>
										<input type="email" id="email" name="email" title="email không vượt quá 40 ký tự" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="single-register">
										<label for="so_dien_thoai">Số Điện Thoại <span>*</span></label>
										<input type="tel" id="so_dien_thoai" name="so_dien_thoai" title="số điện thoại phải điền đúng 10 số" maxlength="10" pattern="[0-9]{10}" required />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="single-register">
										<label for="do_tuoi">Độ Tuổi <span>*</span></label>
										<input type="number" id="do_tuoi" name="do_tuoi" title="độ tuổi nằm trong khoảng 10 tuổi đến 100 tuổi" min="10" max="100" required />
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="single-register">
										<label for="gioi_tinh">Giới Tính <span>*</span></label>
										<select class="chosen-select" tabindex="1" style="width:100%;" data-placeholder="Default Sorting" id="gioi_tinh" name="gioi_tinh" required>
											<option value="">Chọn...</option>
							                <option value="Nam">Nam</option>
							                <option value="Nữ">Nữ</option>
										</select>
									</div>
								</div>
							</div>

							<div class="single-register">
								<label for="dia_chi">Địa Chỉ <span>*</span></label>
								<input type="text" id="dia_chi" name="dia_chi" title="địa chỉ không vượt quá 100 ký tự" maxlength="100" required />
							</div>

							<div class="single-register">
								<label for="quoc_gia">Quốc Gia <span>*</span></label>
								<select class="chosen-select" tabindex="1" style="width:100%;" data-placeholder="Default Sorting" id="quoc_gia" name="quoc_gia" required>
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

							<div class="single-register">
								<label for="anh_dai_dien">Ảnh Đại Diện <span>*</span></label>
								<input type="file" id="anh_dai_dien" name="anh_dai_dien" title="ảnh đại diện với tên không vượt quá 255 ký tự, bao gồm đuôi mở rộng là jpeg, png, jpg" required />
							</div>

							<div class="single-register" style="position: relative;">
								<label for="mat_khau">Mật Khẩu <span>*</span></label>
								<input type="password" id="mat_khau" name="mat_khau" title="mật khẩu dài 6-32 ký tự, bao gồm chữ hoa, chữ thường, số, dấu cách và ký tự đặt biệt" minlength="6" maxlength="32" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,32}" required />
								<span style="display: block; position: absolute; top: 60%; right: 25px; cursor: pointer;"><i class="fa fa-eye" onclick="showHidden1()"></i></span>
							</div>

							<div class="single-register" style="position: relative;">
								<label for="nhap_lai_mat_khau">Nhập Lại Mật Khẩu <span>*</span></label>
								<input type="password" id="nhap_lai_mat_khau" name="nhap_lai_mat_khau" title="nhập lại mật khẩu phải trùng khớp với mật khẩu" minlength="6" maxlength="32" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,32}" required />
								<span style="display: block; position: absolute; top: 60%; right: 25px; cursor: pointer;"><i class="fa fa-eye" onclick="showHidden2()"></i></span>
							</div>

							<div class="single-register">
								<button type="submit" style="width: 150px; height: 45px; background-color: #F07C29; color: #fff; border: 1px solid #F07C29; font-size: 14px; margin-top: 6px; padding: 12px 48px; font-weight: 400; font-family: 'Rufina', serif; display: inline-block;">Đăng Ký</button>
							</div>

						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- user-login-area-end -->
@endsection
