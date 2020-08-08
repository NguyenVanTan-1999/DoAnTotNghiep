@extends('Web/layout')

@section('main-content')

@include('Web.partials.banner.banner-area')

@include('Web.partials.slider.slider-area')

<!-- product-area-start -->
<div class="product-area pt-95 xs-mb">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center mb-50">
					<h2>- Hình Thức Sản Phẩm -</h2>
                    <p>Browse the collection of our best selling and top interresting products.<br>
                    ll definitely find what you are looking for..</p>
				</div>
			</div>
			<div class="col-lg-12">
				<!-- tab-menu-start -->
				<div class="tab-menu mb-40 text-center">
					<ul>
						<li class="active"><a href="#SanPhamMoi" data-toggle="tab">Sản Phẩm Mới</a></li>

						<li><a href="#SanPhamBanChay"  data-toggle="tab">Sản Phẩm Bán Chạy</a></li>

						<li><a href="#SanPhamGiamGia" data-toggle="tab">Sản Phẩm Giảm Giá</a></li>
					</ul>
				</div>
				<!-- tab-menu-end -->
			</div>
		</div>
		<!-- tab-area-start -->
		<div class="tab-content">
			<div class="tab-pane active" id="SanPhamMoi">
                <div class="tab-active owl-carousel">
                    @foreach($sanphamMoi as $sanphammoi)
                        <!-- single-product-start -->
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{ asset('images/product/'.$sanphammoi->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
                                </a>
                                <div class="quick-view">
                                    <a class="action-view" href="#" data-target="#" data-toggle="modal" title="Xem Nhanh">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">{{ $sanphammoi->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li>
                                        <li><span class="discount-percentage">-{{ $sanphammoi->phan_tram_giam_gia }}%</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <h4 style="height: 65px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphammoi->id) }}">{{ $sanphammoi->ten_san_pham }}</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>{{ $sanphammoi->gia_tien_giam_gia }}</li>
                                        <li class="old-price">{{ $sanphammoi->gia_tien_san_pham }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <a href="#" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphammoi->id) }}" title="Chi Tiết"><i class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>	
                        </div>
                        <!-- single-product-end -->
                    @endforeach
                </div>
			</div>

			<div class="tab-pane fade" id="SanPhamBanChay">
                <div class="tab-active owl-carousel">
                    @foreach($sanphambanChay as $sanphambanchay)
                        <!-- single-product-start -->
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{ asset('images/product/'.$sanphambanchay->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
                                </a>
                                <div class="quick-view">
                                    <a class="action-view" href="#" data-target="#" data-toggle="modal" title="Xem Nhanh">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">{{ $sanphambanchay->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li>
                                        <li><span class="discount-percentage">-{{ $sanphambanchay->phan_tram_giam_gia }}%</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <h4 style="height: 65px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphambanchay->id) }}">{{ $sanphambanchay->ten_san_pham }}</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>{{ $sanphambanchay->gia_tien_giam_gia }}</li>
                                        <li class="old-price">{{ $sanphambanchay->gia_tien_san_pham }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <a href="#" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphambanchay->id) }}" title="Chi Tiết"><i class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>	
                        </div>
                        <!-- single-product-end -->
                    @endforeach
                </div>
			</div>
            
			<div class="tab-pane fade" id="SanPhamGiamGia">
                <div class="tab-active owl-carousel">
                    @foreach($sanphamgiamGia as $sanphamgiamgia)
                        <!-- single-product-start -->
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{ asset('images/product/'.$sanphamgiamgia->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
                                </a>
                                <div class="quick-view">
                                    <a class="action-view" href="#" data-target="#" data-toggle="modal" title="Xem Nhanh">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">{{ $sanphamgiamgia->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li>
                                        <li><span class="discount-percentage">-{{ $sanphamgiamgia->phan_tram_giam_gia }}%</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <h4 style="height: 65px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphamgiamgia->id) }}">{{ $sanphamgiamgia->ten_san_pham }}</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>{{ $sanphamgiamgia->gia_tien_giam_gia }}</li>
                                        <li class="old-price">{{ $sanphamgiamgia->gia_tien_san_pham }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <a href="#" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphamgiamgia->id) }}" title="Chi Tiết"><i class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>	
                        </div>
                        <!-- single-product-end -->
                    @endforeach
                </div>
			</div>
		</div>
		<!-- tab-area-end -->
	</div>
</div>
<!-- product-area-end -->

@include('Web.partials.banner.banner-area-5-1')

<!-- bestseller-area-start -->
<div class="bestseller-area pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="bestseller-content">
					<h1>Author best selling</h1>
					<h2>J. K. <br />Rowling</h2>
					<p class="categories">categories:<a href="#">Books</a> , <a href="#">Audiobooks</a></p>
					<p>Vestibulum porttitor iaculis gravida. Praesent vestibulum varius placerat. Cras tempor congue neque, id aliquam orci finibus sit amet. Fusce at facilisis arcu. Donec aliquet nulla id turpis semper, a bibendum metus vulputate. Suspendisse potenti. </p>
					<div class="social-author">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="banner-img-2">
					<a href="#"><img src="{{ asset('assets/Web/img/banner/6.jpg') }}" alt="banner" /></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="bestseller-active owl-carousel">
					<div class="bestseller-total">
						<div class="single-bestseller mb-25">
							<div class="bestseller-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/13.jpg') }}" alt="book" /></a>
								<div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                        <li><span class="discount-percentage">-5%</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="bestseller-text text-center">
								<h3> <a href="#">Rival Messenger</a></h3>
								<div class="price">
									<ul>
										<li><span class="new-price">$40.00</span></li>
										<li><span class="old-price">$45.00</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-bestseller">
							<div class="bestseller-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/14.jpg') }}" alt="book" /></a>
								<div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="bestseller-text text-center">
								<h3> <a href="#">Impulse Duffle</a></h3>
								<div class="price">
									<ul>
										<li><span class="new-price">$70.00</span></li>
										<li><span class="old-price">$74.00</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="bestseller-total">
						<div class="single-bestseller mb-25">
							<div class="bestseller-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/15.jpg') }}" alt="book" /></a>
								<div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="bestseller-text text-center">
								<h3> <a href="#">Voyage Yoga Bag</a></h3>
								<div class="price">
									<ul>
										<li><span class="new-price">$30.00</span></li>
										<li><span class="old-price">$32.00</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-bestseller">
							<div class="bestseller-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/16.jpg') }}" alt="book" /></a>
								<div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                        <li><span class="discount-percentage">-5%</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="bestseller-text text-center">
								<h3> <a href="#">Compete Track Tote</a></h3>
								<div class="price">
									<ul>
										<li><span class="new-price">$32.00</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="bestseller-total">
						<div class="single-bestseller mb-25">
							<div class="bestseller-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/17.jpg') }}" alt="book" /></a>
								<div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="bestseller-text text-center">
								<h3> <a href="#">Fusion Backpack</a></h3>
								<div class="price">
									<ul>
										<li><span class="new-price">$59.00</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-bestseller">
							<div class="bestseller-img">
								<a href="#"><img src="{{ asset('assets/Web/img/product/14.jpg') }}" alt="book" /></a>
								<div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="bestseller-text text-center">
								<h3> <a href="#">Impulse Duffle</a></h3>
								<div class="price">
									<ul>
										<li><span class="new-price">$70.00</span></li>
										<li><span class="old-price">$74.00</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bestseller-area-end -->

<!-- new-book-area-start -->
<div class="new-book-area pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title bt text-center pt-100 mb-30 section-title-res">
					<h2>- Nhà Xuất Bản -</h2>
                    <p>Browse the collection of our best selling and top interresting products.<br>
                    ll definitely find what you are looking for..</p>
				</div>
			</div>
		</div>
        <div class="col-lg-12">
            <!-- tab-menu-start -->
            <div class="tab-menu mb-40 text-center">
                <ul>
                    <li class="active"><a href="#" data-toggle="tab">Nhà Xuất Bản Trẻ</a></li>
                </ul>
            </div>
            <!-- tab-menu-end -->
        </div>
		<div class="tab-active owl-carousel">
            @foreach($nhaxuatbanTre as $nhaxuatbantre)
                <div class="tab-total">
                    <!-- single-product-start -->
                    <div class="product-wrapper mb-40">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('images/product/'.$nhaxuatbantre->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#" data-toggle="modal" title="Xem Nhanh">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">{{ $nhaxuatbantre->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li>
                                    <li><span class="discount-percentage">-{{ $nhaxuatbantre->phan_tram_giam_gia }}%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <h4 style="height: 65px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $nhaxuatbantre->id) }}">{{ $nhaxuatbantre->ten_san_pham }}</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>{{ $nhaxuatbantre->gia_tien_giam_gia }}</li>
                                    <li class="old-price">{{ $nhaxuatbantre->gia_tien_san_pham }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $nhaxuatbantre->id) }}" title="Chi Tiết"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <!-- single-product-end -->
                </div>
            @endforeach
        </div>

        <br />

        <div class="col-lg-12">
            <!-- tab-menu-start -->
            <div class="tab-menu mb-40 text-center">
                <ul>
                    <li class="active"><a href="#" data-toggle="tab">Nhà Xuất Bản Kim Đồng</a></li>
                </ul>
            </div>
            <!-- tab-menu-end -->
        </div>
        <div class="tab-active owl-carousel">
            @foreach($nhaxuatbanKimDong as $nhaxuatbankimdong)
                <div class="tab-total">
                    <!-- single-product-start -->
                    <div class="product-wrapper mb-40">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('images/product/'.$nhaxuatbankimdong->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-target="#" data-toggle="modal" title="Xem Nhanh">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">{{ $nhaxuatbankimdong->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li>
                                    <li><span class="discount-percentage">-{{ $nhaxuatbankimdong->phan_tram_giam_gia }}%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <h4 style="height: 65px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $nhaxuatbankimdong->id) }}">{{ $nhaxuatbankimdong->ten_san_pham }}</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>{{ $nhaxuatbankimdong->gia_tien_giam_gia }}</li>
                                    <li class="old-price">{{ $nhaxuatbankimdong->gia_tien_san_pham }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $nhaxuatbankimdong->id) }}" title="Chi Tiết"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                    <!-- single-product-end -->
                </div>
            @endforeach
        </div>
	</div>
</div>
<!-- new-book-area-start -->

@include('Web.partials.banner.banner-area-5-2')

@include('Web.partials.banner.banner-static-area')

<!-- most-product-area-start -->
<div class="most-product-area pt-90 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 xs-mb">
				<div class="section-title-2 mb-30">
					<h3>Văn Học</h3>
				</div>
				<div class="product-active-2 owl-carousel">
                    @foreach($vanHoc as $vanhoc)
    					<div class="product-total-2">                           
    						<div class="single-most-product bd mb-18">
    							<div class="most-product-img">
    								<a href="{{ route('website-ban-sach.chi-tiet-san-pham', $vanhoc->id) }}"><img src="{{ asset('images/product/'.$vanhoc->anh_minh_hoa_san_pham) }}" alt="book" /></a>
    							</div>
    							<div class="most-product-content">
    								<h4 style="height: 65px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $vanhoc->id) }}">{{ $vanhoc->ten_san_pham }}</a></h4>
    								<div class="product-price">
    									<ul>
    										<li>{{ $vanhoc->gia_tien_giam_gia }}</li>
    										<li class="old-price">{{ $vanhoc->gia_tien_san_pham }}</li>
    									</ul>
    								</div>
    							</div>
    						</div>                            
    					</div>
                    @endforeach
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 xs-mb">
				<div class="section-title-2 mb-30">
					<h3>Kiến Thức Bách Khoa</h3>
				</div>
				<div class="product-active-2 owl-carousel">
                    @foreach($kienthucbachKhoa as $kienthucbachkhoa)
    					<div class="product-total-2">
    						<div class="single-most-product bd mb-18">
    							<div class="most-product-img">
    								<a href="{{ route('website-ban-sach.chi-tiet-san-pham', $kienthucbachkhoa->id) }}"><img src="{{ asset('images/product/'.$kienthucbachkhoa->anh_minh_hoa_san_pham) }}" alt="book" /></a>
    							</div>
    							<div class="most-product-content">
    								<h4 style="height: 65px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $kienthucbachkhoa->id) }}">{{ $kienthucbachkhoa->ten_san_pham }}</a></h4>
    								<div class="product-price">
    									<ul>
    										<li>{{ $kienthucbachkhoa->gia_tien_giam_gia }}</li>
    										<li class="old-price">{{ $kienthucbachkhoa->gia_tien_san_pham }}</li>
    									</ul>
    								</div>
    							</div>
    						</div>
    					</div>
                    @endforeach
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 xs-mb">
				<div class="section-title-2 mb-30">
					<h3>Tiểu Thuyết</h3>
				</div>
				<div class="product-active-2 owl-carousel">
                    @foreach($tieuThuyet as $tieuthuyet)
    					<div class="product-total-2">
    						<div class="single-most-product bd mb-18">
    							<div class="most-product-img">
    								<a href="{{ route('website-ban-sach.chi-tiet-san-pham', $tieuthuyet->id) }}"><img src="{{ asset('images/product/'.$tieuthuyet->anh_minh_hoa_san_pham) }}" alt="book" /></a>
    							</div>
    							<div class="most-product-content">
    								<h4 style="height: 65px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $tieuthuyet->id) }}">{{ $tieuthuyet->ten_san_pham }}</a></h4>
    								<div class="product-price">
    									<ul>
    										<li>{{ $tieuthuyet->gia_tien_giam_gia }}</li>
    										<li class="old-price">{{ $tieuthuyet->gia_tien_san_pham }}</li>
    									</ul>
    								</div>
    							</div>
    						</div>
    					</div>
                    @endforeach
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="block-newsletter">
					<h2>Sign up for send newsletter</h2>
					<p>You can be always up to date with our company new!</p>
					<form action="#">
						<input type="text" placeholder="Enter your email address" />
					</form>
					<a href="#">Send Email</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- most-product-area-end -->

@include('Web.partials.testimonial.testimonial-area')

@include('Web.partials.recent-post.recent-post-area')

@include('Web.partials.social-group.social-group-area')

@endsection
