<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tony | Book Shop Online</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/Web/img/CKC-1.ico') }}">

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{ asset('assets/Web/css/bootstrap.min.css') }}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{ asset('assets/Web/css/animate.css') }}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('assets/Web/css/meanmenu.min.css') }}">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="{{ asset('assets/Web/css/owl.carousel.css') }}">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="{{ asset('assets/Web/css/font-awesome.min.css') }}">
		<!-- flexslider.css-->
        <link rel="stylesheet" href="{{ asset('assets/Web/css/flexslider.css') }}">
		<!-- chosen.min.css-->
        <link rel="stylesheet" href="{{ asset('assets/Web/css/chosen.min.css') }}">
		<!-- style css -->
		<link rel="stylesheet" href="{{ asset('assets/Web/style.css') }}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('assets/Web/css/responsive.css') }}">
		<!-- modernizr css -->
        <script src="{{ asset('assets/Web/js/vendor/modernizr-2.8.3.min.js') }}"></script>

        <script>
        	isBool = true;

        	function showHidden1(){
		        if(isBool){
		          document.getElementById("mat_khau").setAttribute("type", "text");
		          isBool = false;
		        }else{
		          document.getElementById("mat_khau").setAttribute("type", "password");
		          isBool = true;
		        }
	        }

	        function showHidden2(){
		        if(isBool){
		          document.getElementById("nhap_lai_mat_khau").setAttribute("type", "text");
		          isBool = false;
		        }else{
		          document.getElementById("nhap_lai_mat_khau").setAttribute("type", "password");
		          isBool = true;
		        }
	        }
        </script>
    </head>
    <body>
		<!-- header-area-start -->
        <header>

			<!-- header-top-area-start -->
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="account-area text-right">
								<ul>
									<li><a href="#">Thanh Toán</a></li>

									@if(Auth::guard('web')->check())
										<li><a href="{{ route('website-ban-sach.dang-xuat') }}">Đăng Xuất</a></li>
										<li><a style="cursor: pointer;">Chào: {{ Auth::guard('web')->user()->ho_ten }}</a></li>
									@else
										<li><a href="{{ route('website-ban-sach.dang-nhap') }}">Đăng Nhập</a></li>

										<li><a href="{{ route('website-ban-sach.dang-ky') }}">Đăng Ký</a></li>
									@endif

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-top-area-end -->

			<!-- header-mid-area-start -->
			<div class="header-mid-area ptb-40">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
							<div class="header-search">
								<form action="{{ route('website-ban-sach.tim-kiem') }}" method="GET">
									<input type="text" id="tu_khoa" name="tu_khoa" placeholder="Nhập Tên Sản Phẩm ..." title="tên sản phẩm không vượt quá 60 ký tự" maxlength="60" required />
									<button type="submit" class="fa fa-search" style="width: 42px; height: 42px; position: absolute; background: #f07c29; color: #fff; display: inline-block; font-size: 18px; right: 0; text-align: center; top: 0; border: 1px solid #f07c29; border-radius: 0 5px 5px 0px;"></button>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
							<div class="logo-area text-center logo-xs-mrg">
								<img src="{{ asset('assets/Web/img/logo/CKC-2.jpg') }}" alt="logo" width="196" />
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="my-cart">
								<ul>
									<li><a href="#"><i class="fa fa-shopping-cart"></i>Giỏ Hàng</a>
										<span>@if(Session::has('cart')){{ Session('cart')->totalQty }}@else 0 @endif</span>
										<div class="mini-cart-sub">
											@if(Session::has('cart'))
											<div class="cart-product">
												@foreach($product_cart as $product)
													<div class="single-cart">
														<div class="cart-img">
															<a href="{{ route('website-ban-sach.chi-tiet-san-pham', $product['item']['id']) }}"><img src="{{ asset('images/product/'.$product['item']['anh_minh_hoa_san_pham']) }}" alt="book" /></a>
														</div>
														<div class="cart-info">
															<h5><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $product['item']['id']) }}">{{ $product['item']['ten_san_pham'] }}</a></h5>
															<p>{{$product['qty']}} x {{ number_format($product['item']['gia_tien_giam_gia'], 0, '', ',') }}</p>
														</div>
														<div class="cart-icon">
														    <a href="{{ route('website-ban-sach.xoa-gio-hang', $product['item']['id']) }}"><i class="fa fa-remove"></i></a>
														</div>
													</div>
												@endforeach
											</div>
											<div class="cart-totals">
												<h5>Tổng <span>{{ number_format(Session('cart')->totalPrice, 0, '', ',') }} VNĐ</span></h5>
											</div>
											<div class="cart-bottom">
												<a class="view-cart" href="{{ route('website-ban-sach.danh-sach-gio-hang') }}">Xem Chi Tiết</a>
												<a href="#">Thanh Toán</a>
											</div>
											@endif
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-mid-area-end -->

			<!-- main-menu-area-start -->
			<div class="main-menu-area hidden-sm hidden-xs sticky-header-1" id="header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="menu-area">
								<nav>
									<ul>

										<li class="active"><a href="{{ route('website-ban-sach.trang-chu') }}">Trang Chủ</a></li>

										<li><a style="cursor: pointer;">Danh Mục Sản Phẩm<i class="fa fa-angle-down"></i></a>
											<div class="mega-menu">
												<span>
													<a style="cursor: pointer;" class="title">Loại Sản Phẩm</a>

													@foreach($dsLoaiSanPham as $loaisanpham)
														<a href="{{ route('website-ban-sach.san-pham', $loaisanpham->ma_loai_san_pham) }}">- {{ $loaisanpham->ten_loai_san_pham }}</a>
													@endforeach
												</span>

												<span>
													<a style="cursor: pointer;" class="title">Hình Thức Sản Phẩm</a>

													@foreach($dsHinhThucSanPham as $hinhthucsanpham)
														<a href="{{ route('website-ban-sach.san-pham', $hinhthucsanpham->loai_hinh_thuc_san_pham) }}">- {{ $hinhthucsanpham->ten_hinh_thuc_san_pham }}</a>
													@endforeach
												</span>

												<span>
													<a style="cursor: pointer;" class="title">Nhà Xuất Bản</a>

													@foreach($dsNhaXuatBan as $nhaxuatban)
														<a href="{{ route('website-ban-sach.san-pham', $nhaxuatban->ma_nha_xuat_ban) }}">- {{ $nhaxuatban->ten_nha_xuat_ban }}</a>
													@endforeach
												</span>
											</div>
										</li>

										<li><a style="cursor: pointer;">BLOG<i class="fa fa-angle-down"></i></a>
											<div class="sub-menu sub-menu-2">
												<ul>
													<li><a href="#">Blog</a></li>
													<li><a href="#">Blog Details</a></li>
												</ul>
											</div>
										</li>

										<li><a href="#">CONTACT</a></li>

										<li><a href="#">ABOUT</a></li>

									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- main-menu-area-end -->

		</header>
		<!-- header-area-end -->


		@yield('main-content')


		<!-- footer-area-start -->
		<footer>
			<!-- footer-top-start -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer-top-menu bb-2">
								<nav>
									<ul>
										<li><a href="#">home</a></li>
										<li><a href="#">Enable Cookies</a></li>
										<li><a href="#">Privacy and Cookie Policy</a></li>
										<li><a href="#">contact us</a></li>
										<li><a href="#">blog</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top-start -->
			<!-- footer-mid-start -->
			<div class="footer-mid ptb-50">
				<div class="container">
					<div class="row">
				        <div class="col-lg-8 col-md-8 col-sm-12">
				            <div class="row">
				                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-footer br-2 xs-mb">
                                        <div class="footer-title mb-20">
                                            <h3>Products</h3>
                                        </div>
                                        <div class="footer-mid-menu">
                                            <ul>
                                                <li><a href="#">About us</a></li>
                                                <li><a href="#">Prices drop </a></li>
                                                <li><a href="#">New products</a></li>
                                                <li><a href="#">Best sales</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-footer br-2 xs-mb">
                                        <div class="footer-title mb-20">
                                            <h3>Our company</h3>
                                        </div>
                                        <div class="footer-mid-menu">
                                            <ul>
                                                <li><a href="#">Contact us</a></li>
                                                <li><a href="#">Sitemap</a></li>
                                                <li><a href="#">Stores</a></li>
                                                <li><a href="#">My account </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-footer br-2 xs-mb">
                                        <div class="footer-title mb-20">
                                            <h3>Your account</h3>
                                        </div>
                                        <div class="footer-mid-menu">
                                            <ul>
                                                <li><a href="#">Addresses</a></li>
                                                <li><a href="#">Credit slips </a></li>
                                                <li><a href="#"> Orders</a></li>
                                                <li><a href="#">Personal info</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
				            </div>
				        </div>
				        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="single-footer mrg-sm">
                                <div class="footer-title mb-20">
                                    <h3>STORE INFORMATION</h3>
                                </div>
                                <div class="footer-contact">
                                    <p class="adress">
                                        <span>My Home:</span>
                                        Quận 9, TP.HCM
                                    </p>
                                    <p><span>Call Us Now:</span> (+84)922-542-409</p>
                                    <p><span>Email:</span>  nguyenvantan1611@gmail.com</p>
                                </div>
                            </div>
				        </div>
					</div>
				</div>
			</div>
			<!-- footer-mid-end -->
			<!-- footer-bottom-start -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row bt-2">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="copy-right-area">
								<p>Copyright ©<a href="https://www.facebook.com/IT.Q9.Tony">Doantotnghiep</a>. All Right Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="payment-img text-right">
								<a href="#"><img src="{{ asset('assets/Web/img/1.png') }}" alt="payment" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom-end -->
		</footer>
		<!-- footer-area-end -->


		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{ asset('assets/Web/js/vendor/jquery-1.12.0.min.js') }}"></script>
		<!-- bootstrap js -->
        <script src="{{ asset('assets/Web/js/bootstrap.min.js') }}"></script>
		<!-- owl.carousel js -->
        <script src="{{ asset('assets/Web/js/owl.carousel.min.js') }}"></script>
		<!-- meanmenu js -->
        <script src="{{ asset('assets/Web/js/jquery.meanmenu.js') }}"></script>
		<!-- wow js -->
        <script src="{{ asset('assets/Web/js/wow.min.js') }}"></script>
		<!-- jquery.parallax-1.1.3.js -->
        <script src="{{ asset('assets/Web/js/jquery.parallax-1.1.3.js') }}"></script>
		<!-- jquery.countdown.min.js -->
        <script src="{{ asset('assets/Web/js/jquery.countdown.min.js') }}"></script>
		<!-- jquery.flexslider.js -->
        <script src="{{ asset('assets/Web/js/jquery.flexslider.js') }}"></script>
		<!-- chosen.jquery.min.js -->
        <script src="{{ asset('assets/Web/js/chosen.jquery.min.js') }}"></script>
		<!-- jquery.counterup.min.js -->
        <script src="{{ asset('assets/Web/js/jquery.counterup.min.js') }}"></script>
		<!-- waypoints.min.js -->
        <script src="{{ asset('assets/Web/js/waypoints.min.js') }}"></script>
		<!-- plugins js -->
        <script src="{{ asset('assets/Web/js/plugins.js') }}"></script>
		<!-- main js -->
        <script src="{{ asset('assets/Web/js/main.js') }}"></script>
    </body>
</html>
