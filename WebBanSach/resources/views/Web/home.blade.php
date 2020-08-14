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
                                <a>
                                    <img src="{{ asset('images/product/'.$sanphammoi->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
                                </a>
                                <div class="quick-view">
                                    <a class="action-view" href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphammoi->id) }}" title="Xem Chi Tiết">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">{{ $sanphammoi->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li>
                                        <li><span class="discount-percentage">-{{ (($sanphammoi->gia_tien_san_pham - $sanphammoi->gia_tien_giam_gia) * 100 / ($sanphammoi->gia_tien_san_pham)) }}%</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <h4 style="height: 65px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphammoi->id) }}">{{ $sanphammoi->ten_san_pham }}</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>{{ number_format($sanphammoi->gia_tien_giam_gia, 0, '', ',') }}</li>
                                        <li class="old-price">{{ number_format($sanphammoi->gia_tien_san_pham, 0, '', ',') }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <a href="{{ route('website-ban-sach.them-vao-gio', $sanphammoi->id) }}" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
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
                                <a>
                                    <img src="{{ asset('images/product/'.$sanphambanchay->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
                                </a>
                                <div class="quick-view">
                                    <a class="action-view" href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphambanchay->id) }}" title="Xem Chi Tiết">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">{{ $sanphambanchay->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li>
                                        <li><span class="discount-percentage">-{{ (($sanphambanchay->gia_tien_san_pham - $sanphambanchay->gia_tien_giam_gia) * 100 / ($sanphambanchay->gia_tien_san_pham)) }}%</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <h4 style="height: 65px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphambanchay->id) }}">{{ $sanphambanchay->ten_san_pham }}</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>{{ number_format($sanphambanchay->gia_tien_giam_gia, 0, '', ',') }}</li>
                                        <li class="old-price">{{ number_format($sanphambanchay->gia_tien_san_pham, 0, '', ',') }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <a onclick="AddCart({{ $sanphambanchay->id }})" href="javascript:" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
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
                                <a>
                                    <img src="{{ asset('images/product/'.$sanphamgiamgia->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
                                </a>
                                <div class="quick-view">
                                    <a class="action-view" href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphamgiamgia->id) }}" title="Xem Chi Tiết">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">{{ $sanphamgiamgia->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li>
                                        <li><span class="discount-percentage">-{{ (($sanphamgiamgia->gia_tien_san_pham - $sanphamgiamgia->gia_tien_giam_gia) * 100 / ($sanphamgiamgia->gia_tien_san_pham)) }}%</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <h4 style="height: 65px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphamgiamgia->id) }}">{{ $sanphamgiamgia->ten_san_pham }}</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>{{ number_format($sanphamgiamgia->gia_tien_giam_gia, 0, '', ',') }}</li>
                                        <li class="old-price">{{ number_format($sanphamgiamgia->gia_tien_san_pham, 0, '', ',') }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <a onclick="AddCart({{ $sanphamgiamgia->id }})" href="javascript:" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
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
                    <li class="active"><a data-toggle="tab">Nhà Xuất Bản Trẻ</a></li>
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
                            <a>
                                <img src="{{ asset('images/product/'.$nhaxuatbantre->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="{{ route('website-ban-sach.chi-tiet-san-pham', $nhaxuatbantre->id) }}" title="Xem Chi Tiết">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">{{ $nhaxuatbantre->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li>
                                    <li><span class="discount-percentage">-{{ (($nhaxuatbantre->gia_tien_san_pham - $nhaxuatbantre->gia_tien_giam_gia) * 100 / ($nhaxuatbantre->gia_tien_san_pham)) }}%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <h4 style="height: 65px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $nhaxuatbantre->id) }}">{{ $nhaxuatbantre->ten_san_pham }}</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>{{ number_format($nhaxuatbantre->gia_tien_giam_gia, 0, '', ',') }}</li>
                                    <li class="old-price">{{ number_format($nhaxuatbantre->gia_tien_san_pham, 0, '', ',') }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a onclick="AddCart({{ $nhaxuatbantre->id }})" href="javascript:" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
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
                    <li class="active"><a data-toggle="tab">Nhà Xuất Bản Kim Đồng</a></li>
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
                            <a>
                                <img src="{{ asset('images/product/'.$nhaxuatbankimdong->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="{{ route('website-ban-sach.chi-tiet-san-pham', $nhaxuatbankimdong->id) }}" title="Xem Chi Tiết">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">{{ $nhaxuatbankimdong->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li>
                                    <li><span class="discount-percentage">-{{ (($nhaxuatbankimdong->gia_tien_san_pham - $nhaxuatbankimdong->gia_tien_giam_gia) * 100 / ($nhaxuatbankimdong->gia_tien_san_pham)) }}%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details text-center">
                            <h4 style="height: 65px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $nhaxuatbankimdong->id) }}">{{ $nhaxuatbankimdong->ten_san_pham }}</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li>{{ number_format($nhaxuatbankimdong->gia_tien_giam_gia, 0, '', ',') }}</li>
                                    <li class="old-price">{{ number_format($nhaxuatbankimdong->gia_tien_san_pham, 0, '', ',') }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a onclick="AddCart({{ $nhaxuatbankimdong->id }})" href="javascript:" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
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
    								<h4 style="height: 85px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $vanhoc->id) }}">{{ $vanhoc->ten_san_pham }}</a></h4>
    								<div class="product-price">
    									<ul>
    										<li>{{ number_format($vanhoc->gia_tien_giam_gia, 0, '', ',') }}</li>
    										<li class="old-price">{{ number_format($vanhoc->gia_tien_san_pham, 0, '', ',') }}</li>
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
    								<h4 style="height: 85px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $kienthucbachkhoa->id) }}">{{ $kienthucbachkhoa->ten_san_pham }}</a></h4>
    								<div class="product-price">
    									<ul>
    										<li>{{ number_format($kienthucbachkhoa->gia_tien_giam_gia, 0, '', ',') }}</li>
    										<li class="old-price">{{ number_format($kienthucbachkhoa->gia_tien_san_pham, 0, '', ',') }}</li>
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
    								<h4 style="height: 85px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $tieuthuyet->id) }}">{{ $tieuthuyet->ten_san_pham }}</a></h4>
    								<div class="product-price">
    									<ul>
    										<li>{{ number_format($tieuthuyet->gia_tien_giam_gia, 0, '', ',') }}</li>
    										<li class="old-price">{{ number_format($tieuthuyet->gia_tien_san_pham, 0, '', ',') }}</li>
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

@include('Web.partials.social-group.social-group-area')

@endsection

@section('ajax')
<script>
    function AddCart(id){
        $.ajax({
            url: 'website-ban-sach/them-vao-gio/'+id,
            type: 'GET',
        }).done(function(response) {
            RenderCart(response);
            alertify.success('Đã Thêm Vào Giỏ');
        });
    }

    $("#change-item-cart").on("click", ".cart-icon i", function(){
        $.ajax({
            url: 'website-ban-sach/xoa-gio-hang/'+$(this).data("id"),
            type: 'GET',
        }).done(function(response) {
            RenderCart(response);
            alertify.error('Đã Xóa Sản Phẩm');
        });
    });

    function RenderCart(response){
        $("#change-item-cart").empty();
        $("#change-item-cart").html(response);
        $("#total-quanty-show").text($("#total-quanty-cart").val());
    }
</script>
@endsection
