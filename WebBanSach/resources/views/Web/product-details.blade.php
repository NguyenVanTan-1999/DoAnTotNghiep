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
						<li><a class="active">Chi Tiết Sản Phẩm</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs-area-end -->

<!-- product-main-area-start -->
<div class="product-main-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<!-- product-main-area-start -->
				<div class="product-main-area">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
							<div class="flexslider">
								<ul class="slides">
									<li>
									  <img src="{{ asset('images/product/'.$sanPham->anh_minh_hoa_san_pham) }}" alt="woman" />
									</li>
								</ul>
							</div>
							<div class="product-add-form">
								<form action="#">
									<a href="#">Thêm Vào Giỏ</a>
									<a href="#" style="margin-left: 10px;">Mua Ngay</a>
								</form>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
							<div class="product-info-main">
								<div class="page-title">
									<h1>{{ $sanPham->ten_san_pham }}</h1>
								</div><br />
								<div class="product-info-stock-sku">
									<span>Loại Sản Phẩm :</span>
									<div class="product-attribute">
										<span class="value" style="color: #f07c29;">{{ $sanPham->loaisanPham->ten_loai_san_pham }}</span>
									</div>

									<span>Nhà Xuất Bản :</span>
									<div class="product-attribute">
										<span class="value" style="color: #f07c29;">{{ $sanPham->nhaxuatBan->ten_nha_xuat_ban }}</span>
									</div>
								</div>
								<div class="product-info-price">
									<div class="price-final">
										<span>{{ number_format($sanPham->gia_tien_giam_gia, 0, '', ',') }}</span>

										<span class="old-price" style="margin-left: 10px;">{{ number_format($sanPham->gia_tien_san_pham, 0, '', ',') }}</span>

										<span class="discount-percentage" style="margin-left: 15px;">-{{ (($sanPham->gia_tien_san_pham - $sanPham->gia_tien_giam_gia) * 100 / ($sanPham->gia_tien_san_pham)) }}%</span>
									</div>
								</div>
								<div class="product-add-form">
									<form action="#">
										<div class="quality-button">
											<span style="font-weight: bold; color: #333; font-size: 18px;">Số Lượng :</span>
											<input class="qty" type="number" value="1" style="margin-left: 10px;">
										</div>
									</form>
								</div><br />
								<div class="product-social-links">
									<div class="product-addto-links">
										<a href="#"><i class="fa fa-heart"></i></a>
										<a href="#"><i class="fa fa-pie-chart"></i></a>
										<a href="#"><i class="fa fa-envelope-o"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- product-main-area-end -->

				<!-- product-info-area-start -->
				<div class="product-info-area mt-80">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="active"><a href="#ChiTiet" data-toggle="tab">Chi Tiết</a></li>

						<li><a href="#NhanXet" data-toggle="tab">Nhận Xét</a></li>
					</ul>
					<div class="tab-content">
                        <div class="tab-pane active" id="ChiTiet">
                            <div class="valu">
                                <ul>
                              	    <li>Hình Thức Sản Phẩm:<span style="margin-left: 20px; color: #f07c29;">{{ $sanPham->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li><br />

                              	    <li>Loại Sản Phẩm:<span style="margin-left: 20px; color: #f07c29;">{{ $sanPham->loaisanPham->ten_loai_san_pham }}</span></li><br />

                                    <li>Mã Sản Phẩm:<span style="margin-left: 20px;">{{ $sanPham->ma_san_pham }}</span></li><br />

                                    <li>Nhà Xuất Bản:<span style="margin-left: 20px; color: #f07c29;">{{ $sanPham->nhaxuatBan->ten_nha_xuat_ban }}</span></li><br />

                                    <li>Ngày Xuất Bản Sản Phẩm:<span style="margin-left: 20px;">{{ $sanPham->ngay_xuat_ban_san_pham }}</span></li>
                                </ul>
	                            <div class="product-reviews-summary">
									<div class="reviews-actions">
										<span>{{ $sanPham->thong_tin_san_pham }}</span>
									</div>
								</div>
                            </div>
                        </div>

                        <div class="tab-pane" id="NhanXet">
                            <div class="valu valu-2">
                                <div class="section-title mb-60 mt-60">
                                    <h2>Customer Reviews</h2>
                                </div>
                                <ul>
                                    <li>
                                        <div class="review-title">
                                            <h3>themes</h3>
                                        </div>
                                        <div class="review-left">
                                            <div class="review-rating">
                                                <span>Price</span>
                                                <div class="rating-result">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="review-rating">
                                                <span>Value</span>
                                                <div class="rating-result">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="review-rating">
                                                <span>Quality</span>
                                                <div class="rating-result">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-right">
                                            <div class="review-content">
                                                <h4>themes </h4>
                                            </div>
                                            <div class="review-details">
                                                <p class="review-author">Review by<a href="#">plaza</a></p>
                                                <p class="review-date">Posted on <span>12/9/16</span></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="review-add">
                                    <h3>You're reviewing:</h3>
                                    <h4>Joust Duffle Bag</h4>
                                </div>
                                <div class="review-field-ratings">
                                    <span>Your Rating <sup>*</sup></span>
                                    <div class="control">
                                        <div class="single-control">
                                            <span>Value</span>
                                            <div class="review-control-vote">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="single-control">
                                            <span>Quality</span>
                                            <div class="review-control-vote">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="single-control">
                                            <span>Price</span>
                                            <div class="review-control-vote">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-form">
                                    <div class="single-form">
                                        <label>Nickname <sup>*</sup></label>
                                        <form action="#">
                                            <input type="text" />
                                        </form>
                                    </div>
                                    <div class="single-form single-form-2">
                                        <label>Summary <sup>*</sup></label>
                                        <form action="#">
                                            <input type="text" />
                                        </form>
                                    </div>
                                    <div class="single-form">
                                        <label>Review <sup>*</sup></label>
                                        <form action="#">
                                            <textarea name="massage" cols="10" rows="4"></textarea>
                                        </form>
                                    </div>
                                </div>
                                <div class="review-form-button">
                                    <a href="#">Submit Review</a>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
				<!-- product-info-area-end -->

				<!-- new-book-area-start -->
				<div class="new-book-area mt-60">
					<div class="section-title text-center mb-30">
						<h3>SẢN PHẨM TƯƠNG TỰ</h3>
					</div>
					<div class="tab-active-2 owl-carousel">
						@foreach($sanphamtuongTu as $sanphamtuongtu)
							<!-- single-product-start -->
							<div class="product-wrapper">
								<div class="product-img">
									<a>
										<img src="{{ asset('images/product/'.$sanphamtuongtu->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
									</a>
									<div class="quick-view">
	                                    <a class="action-view" href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphamtuongtu->id) }}" title="Xem Chi Tiết">
	                                        <i class="fa fa-search-plus"></i>
	                                    </a>
	                                </div>
	                                <div class="product-flag">
	                                    <ul>
	                                        <li><span class="sale">{{ $sanphamtuongtu->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li>
	                                        <li><span class="discount-percentage">-{{ (($sanphamtuongtu->gia_tien_san_pham - $sanphamtuongtu->gia_tien_giam_gia) * 100 / ($sanphamtuongtu->gia_tien_san_pham)) }}%</span></li>
	                                    </ul>
	                                </div>
								</div>
								<div class="product-details text-center">
									<h4 style="height: 85px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphamtuongtu->id) }}">{{ $sanphamtuongtu->ten_san_pham }}</a></h4>
									<div class="product-price">
										<ul>
											<li>{{ number_format($sanphamtuongtu->gia_tien_giam_gia, 0, '', ',') }}</li>
											<li class="old-price">{{ number_format($sanphamtuongtu->gia_tien_san_pham, 0, '', ',') }}</li>
										</ul>
									</div>
								</div>
								<div class="product-link">
									<div class="product-button">
										<a href="#" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
									</div>
									<div class="add-to-link">
	                                    <ul>
	                                        <li><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphamtuongtu->id) }}" title="Chi Tiết"><i class="fa fa-external-link"></i></a></li>
	                                    </ul>
	                                </div>
								</div>
							</div>
							<!-- single-product-end -->
						@endforeach
					</div>
				</div>
				<!-- new-book-area-end -->
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="shop-left">
					<div class="banner-area mb-30">
						<div class="banner-img-2">
							<a href="#"><img src="{{ asset('assets/Web/img/banner/33.jpg') }}" alt="banner" /></a>
						</div>
					</div>
					<div class="left-title-2 mb-30">
						<h2>Compare Products</h2>
						<p>You have no items to compare.</p>
					</div>
					<div class="left-title-2">
						<h2>My Wish List</h2>
						<p>You have no items in your wish list.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- product-main-area-end -->
@endsection
