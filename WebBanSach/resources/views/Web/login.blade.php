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
						<li><a class="active">Đăng Nhập</a></li>
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
					<h2>ĐĂNG NHẬP</h2>
				</div>
			</div>

			<div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">

				@include('Web.blocks.error')

				@include('Web.blocks.alert')

				<div class="login-form">

					<form action="{{ route('website-ban-sach.xu-ly-dang-nhap') }}" method="POST">

						@csrf

						<div class="single-login">
							<label for="ten_tai_khoan">Tên Tài Khoản <span>*</span></label>
							<input type="text" id="ten_tai_khoan" name="ten_tai_khoan" title="tên tài khoản dài 6-24 ký tự, bao gồm chữ thường và số, không chứa ký tự đặt biệt" minlength="6" maxlength="24" pattern="^[a-z][a-z0-9]{5,}$" required />
						</div>

						<div class="single-login" style="position: relative;">
							<label for="mat_khau">Mật Khẩu <span>*</span></label>
							<input type="password" id="mat_khau" name="mat_khau" title="mật khẩu dài 6-32 ký tự, bao gồm chữ hoa, chữ thường, số, dấu cách và ký tự đặt biệt" minlength="6" maxlength="32" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,32}" required />
							<span style="display: block; position: absolute; top: 55%; right: 25px; cursor: pointer;"><i class="fa fa-eye" onclick="showHidden1()"></i></span>
						</div>

						<div class="single-login single-login-2">
							<button type="submit" style="width: 170px; height: 45px; background-color: #F07C29; color: #fff; border: 1px solid #F07C29; font-size: 14px; margin-top: 6px; padding: 10px 43px; font-weight: 400; font-family: 'Rufina', serif; display: inline-block; text-transform: capitalize; float: left;">Đăng Nhập</button>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- user-login-area-end -->
@endsection
