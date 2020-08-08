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
				@foreach($sanPhams as $sanphams)
					<!-- product-main-area-start -->
					<div class="product-main-area">
						<div class="row">
							<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
								<div class="flexslider">
									<ul class="slides">
										<li>
										  <img src="{{ asset('images/product/'.$sanphams->anh_minh_hoa_san_pham) }}" alt="woman" />
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
								<div class="product-info-main">
									<div class="page-title">
										<h1>{{ $sanphams->ten_san_pham }}</h1>
									</div>
									<div class="product-info-stock-sku">
										<span>Mã SP |</span>
										<div class="product-attribute">
											<span class="value">{{ $sanphams->ma_san_pham }}</span>
										</div>
									</div>
									<div class="product-reviews-summary">
										<div class="reviews-actions">
											<a>Ngày Xuất Bản</a>
											<a class="view">{{ $sanphams->ngay_xuat_ban_san_pham }}</a>
										</div>
									</div>
									<div class="product-info-price">
										<div class="price-final">
											<span class="discount-percentage">(-{{ $sanphams->phan_tram_giam_gia }}%)</span><br />
											<span>{{ $sanphams->gia_tien_giam_gia }}</span>
											<span class="old-price">{{ $sanphams->gia_tien_san_pham }}</span>
										</div>
									</div>
									<div class="product-add-form">
										<form action="#">
											<div class="quality-button">
												<input class="qty" type="number" value="1">
											</div>
											<a href="#">Thêm Vào Giỏ</a>
										</form>
									</div>
									<div class="product-social-links">
										<div class="product-addto-links">
											<a href="#"><i class="fa fa-heart"></i></a>
											<a href="#"><i class="fa fa-pie-chart"></i></a>
											<a href="#"><i class="fa fa-envelope-o"></i></a>
										</div>
										<div class="product-addto-links-text">
											<p>{{ $sanphams->thong_tin_san_pham }}</p>
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
	                                <li><i class="fa fa-circle"></i>Hình Thức SP | {{ $sanphams->hinhthucsanPham->ten_hinh_thuc_san_pham }}</li><br />
	                                <li><i class="fa fa-circle"></i>Loại SP | {{ $sanphams->loaisanPham->ten_loai_san_pham }}</li><br />
	                                <li><i class="fa fa-circle"></i>NXB | {{ $sanphams->nhaxuatBan->ten_nha_xuat_ban }}</li>
	                              </ul>
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
				@endforeach
				<!-- new-book-area-start -->
				<div class="new-book-area mt-60">
					<div class="section-title text-center mb-30">
						<h3>upsell products</h3>
					</div>
					<div class="tab-active-2 owl-carousel">
						<!-- single-product-start -->
						<div class="product-wrapper">
							<div class="product-img">
								<a href="#">
									<img src="{{ asset('assets/Web/img/product/1.jpg') }}" alt="book" class="primary" />
								</a>
								<div class="quick-view">
                                    <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                        <li><span class="discount-percentage">-5%</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="product-details text-center">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Joust Duffle Bag</a></h4>
								<div class="product-price">
									<ul>
										<li>$60.00</li>
									</ul>
								</div>
							</div>
							<div class="product-link">
								<div class="product-button">
									<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
								<div class="add-to-link">
                                    <ul>
                                        <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
							</div>
						</div>
						<!-- single-product-end -->
						<!-- single-product-start -->
						<div class="product-wrapper">
							<div class="product-img">
								<a href="#">
									<img src="{{ asset('assets/Web/img/product/3.jpg') }}" alt="book" class="primary" />
								</a>
								<div class="quick-view">
                                    <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="product-details text-center">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
								<div class="product-price">
									<ul>
										<li>$52.00</li>
									</ul>
								</div>
							</div>
							<div class="product-link">
								<div class="product-button">
									<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
								<div class="add-to-link">
                                    <ul>
                                        <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
							</div>
						</div>
						<!-- single-product-end -->
						<!-- single-product-start -->
						<div class="product-wrapper">
							<div class="product-img">
								<a href="#">
									<img src="{{ asset('assets/Web/img/product/5.jpg') }}" alt="book" class="primary" />
								</a>
								<div class="quick-view">
                                    <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="discount-percentage">-5%</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="product-details text-center">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Set of Sprite Yoga Straps</a></h4>
								<div class="product-price">
									<ul>
										<li> <span>Starting at</span>$34.00</li>
									</ul>
								</div>
							</div>
							<div class="product-link">
								<div class="product-button">
									<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
								<div class="add-to-link">
                                    <ul>
                                        <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
							</div>
						</div>
						<!-- single-product-end -->
						<!-- single-product-start -->
						<div class="product-wrapper">
							<div class="product-img">
								<a href="#">
									<img src="{{ asset('assets/Web/img/product/7.jpg') }}" alt="book" class="primary" />
								</a>
								<div class="quick-view">
                                    <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                        <li><span class="discount-percentage">-5%</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="product-details text-center">
								<div class="product-rating">
									<ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
								</div>
								<h4><a href="#">Strive Shoulder Pack</a></h4>
								<div class="product-price">
									<ul>
										<li>$30.00</li>
										<li class="old-price">$32.00</li>
									</ul>
								</div>
							</div>
							<div class="product-link">
								<div class="product-button">
									<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
								<div class="add-to-link">
                                    <ul>
                                        <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
							</div>
						</div>
						<!-- single-product-end -->
					</div>
				</div>
				<!-- new-book-area-start -->
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="shop-left">
					<div class="left-title mb-20">
						<h4>Related Products</h4>
					</div>
					<div class="random-area mb-30">
						<div class="product-active-2 owl-carousel">
							<div class="product-total-2">
								<div class="single-most-product bd mb-18">
									<div class="most-product-img">
										<a href="#"><img src="{{ asset('assets/Web/img/product/20.jpg') }}" alt="book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="#">Endeavor Daytrip</a></h4>
										<div class="product-price">
											<ul>
												<li>$30.00</li>
												<li class="old-price">$33.00</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-most-product bd mb-18">
									<div class="most-product-img">
										<a href="#"><img src="{{ asset('assets/Web/img/product/21.jpg') }}" alt="book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="#">Savvy Shoulder Tote</a></h4>
										<div class="product-price">
											<ul>
												<li>$30.00</li>
												<li class="old-price">$35.00</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-most-product">
									<div class="most-product-img">
										<a href="#"><img src="{{ asset('assets/Web/img/product/22.jpg') }}" alt="book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="#">Compete Track Tote</a></h4>
										<div class="product-price">
											<ul>
												<li>$35.00</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="product-total-2">
								<div class="single-most-product bd mb-18">
									<div class="most-product-img">
										<a href="#"><img src="{{ asset('assets/Web/img/product/23.jpg') }}" alt="book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="#">Voyage Yoga Bag</a></h4>
										<div class="product-price">
											<ul>
												<li>$30.00</li>
												<li class="old-price">$33.00</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-most-product bd mb-18">
									<div class="most-product-img">
										<a href="#"><img src="{{ asset('assets/Web/img/product/24.jpg') }}" alt="book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="#">Impulse Duffle</a></h4>
										<div class="product-price">
											<ul>
												<li>$70.00</li>
												<li class="old-price">$74.00</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-most-product">
									<div class="most-product-img">
										<a href="#"><img src="{{ asset('assets/Web/img/product/22.jpg') }}" alt="book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="#">Fusion Backpack</a></h4>
										<div class="product-price">
											<ul>
												<li>$59.00</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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
