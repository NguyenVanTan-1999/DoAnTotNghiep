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
						<li><a class="active">Tìm Kiếm</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs-area-end -->

<!-- shop-main-area-start -->
<div class="shop-main-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="shop-left">
					<div class="section-title-5 mb-30">
						<h2>SẢN PHẨM TÙY CHỌN</h2>
					</div>

					<div class="left-title mb-20">
						<h4>HÌNH THỨC SẢN PHẨM</h4>
					</div>
					<div class="left-menu mb-30" style="margin-bottom: 0px;">
						<ul>
							@foreach($dsHinhThucSanPhamLink as $hinhthucsanphamlink)
								<li><a href="{{ route('website-ban-sach.san-pham', $hinhthucsanphamlink->loai_hinh_thuc_san_pham) }}">{{ $hinhthucsanphamlink->ten_hinh_thuc_san_pham }}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="row">
						{{ $dsHinhThucSanPhamLink->links() }}
					</div><br />

					<div class="left-title mb-20">
						<h4>LOẠI SẢN PHẨM</h4>
					</div>
					<div class="left-menu mb-30" style="margin-bottom: 0px;">
						<ul>
							@foreach($dsLoaiSanPhamLink as $loaisanphamlink)
								<li><a href="{{ route('website-ban-sach.san-pham', $loaisanphamlink->ma_loai_san_pham) }}">{{ $loaisanphamlink->ten_loai_san_pham }}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="row">
						{{ $dsLoaiSanPhamLink->links() }}
					</div><br />

					<div class="left-title mb-20">
						<h4>NHÀ XUẤT BẢN</h4>
					</div>
					<div class="left-menu mb-30" style="margin-bottom: 0px;">
						<ul>
							@foreach($dsNhaXuatBanLink as $nhaxuatbanlink)
								<li><a href="{{ route('website-ban-sach.san-pham', $nhaxuatbanlink->ma_nha_xuat_ban) }}">{{ $nhaxuatbanlink->ten_nha_xuat_ban }}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="row">
						{{ $dsNhaXuatBanLink->links() }}
					</div><br />

					<div class="left-title mb-20">
						<h4>GIÁ</h4>
					</div>
					<div class="left-menu mb-30">
						<ul>
							<li><a href="#">20.000 - 50.000</a></li>
							<li><a href="#">50.000 - 100.000</a></li>
							<li><a href="#">100.000 - 200.000</a></li>
							<li><a href="#">200.000 - 500.000</a></li>
							<li><a href="#">500.000 - 1.000.000</a></li>
						</ul>
					</div>

					<div class="banner-area mb-30">
						<div class="banner-img-2">
							<a href="#"><img src="{{ asset('assets/Web/img/banner/31.jpg') }}" alt="banner" /></a>
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
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<div class="category-image mb-30">
					<a href="#"><img src="{{ asset('assets/Web/img/banner/32.jpg') }}" alt="banner" /></a>
				</div>
				<div class="section-title-5 mb-30">
					<h2>SÁCH</h2>
				</div>
				<div class="toolbar mb-30">
					<div class="shop-tab">
						<div class="tab-3">
							<ul>
								<li class="active"><a href="#th" data-toggle="tab"><i class="fa fa-th-large"></i>Grid</a></li>
								<li><a href="#list" data-toggle="tab"><i class="fa fa-bars"></i>List</a></li>
							</ul>
						</div>
						<div class="list-page">
							<p>Tổng Cộng: <span style="font-weight: bold;">{{ count($tongsanphamtimKiem) }}</span> Sản Phẩm</p>
						</div>
					</div>
					<div class="toolbar-sorter">
						<span>Sắp Xếp Giá</span>
						<select id="sorter" class="sorter-options" data-role="sorter" onchange="location = this.value;">
							<option selected="selected"> Chọn... </option>
							<option value="{{ route('website-ban-sach.tim-kiem-tang-dan') }}"> Tăng Dần </option>
							<option value="{{ route('website-ban-sach.tim-kiem-giam-dan') }}"> Giảm Dần </option>
						</select>
					</div>
				</div>
				<!-- tab-area-start -->
				<div class="tab-content">
					<div class="tab-pane active" id="th">
					    <div class="row">
					    	@foreach($dssanphamtimkiemGrid as $sanphamtimkiemgrid)
						        <div class="col-lg-3 col-md-4 col-sm-6">
						            <!-- single-product-start -->
	                                <div class="product-wrapper mb-40">
	                                    <div class="product-img">
	                                        <a>
	                                            <img src="{{ asset('images/product/'.$sanphamtimkiemgrid->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
	                                        </a>
	                                        <div class="quick-view">
	                                            <a class="action-view" href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphamtimkiemgrid->id) }}" title="Xem Chi Tiết">
	                                                <i class="fa fa-search-plus"></i>
	                                            </a>
	                                        </div>
	                                        <div class="product-flag">
	                                            <ul>
	                                                <li><span class="sale">{{ $sanphamtimkiemgrid->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li>
	                                                <li><span class="discount-percentage">-{{ (($sanphamtimkiemgrid->gia_tien_san_pham - $sanphamtimkiemgrid->gia_tien_giam_gia) * 100 / ($sanphamtimkiemgrid->gia_tien_san_pham)) }}%</span></li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                    <div class="product-details text-center">
	                                        <h4 style="height: 85px;"><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphamtimkiemgrid->id) }}">{{ $sanphamtimkiemgrid->ten_san_pham }}</a></h4>
	                                        <div class="product-price">
	                                            <ul>
	                                                <li>{{ number_format($sanphamtimkiemgrid->gia_tien_giam_gia, 0, '', ',') }}</li>
	                                                <li class="old-price">{{ number_format($sanphamtimkiemgrid->gia_tien_san_pham, 0, '', ',') }}</li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                    <div class="product-link">
	                                        <div class="product-button">
	                                            <a href="{{ route('website-ban-sach.them-vao-gio', $sanphamtimkiemgrid->id) }}" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
	                                        </div>
	                                        <div class="add-to-link">
	                                            <ul>
	                                                <li><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphamtimkiemgrid->id) }}" title="Chi Tiết"><i class="fa fa-external-link"></i></a></li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                </div>
	                                <!-- single-product-end -->
						        </div>
					        @endforeach
					    </div>
					    <div class="row">
							{{ $dssanphamtimkiemGrid->links() }}
						</div>
					</div>

					<div class="tab-pane fade" id="list">
						@foreach($dssanphamtimkiemList as $sanphamtimkiemlist)
							<!-- single-shop-start -->
							<div class="single-shop mb-30">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="product-wrapper-2">
											<div class="product-img">
												<a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphamtimkiemlist->id) }}">
													<img src="{{ asset('images/product/'.$sanphamtimkiemlist->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="product-wrapper-content">
											<div class="product-details">
												<h4><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphamtimkiemlist->id) }}">{{ $sanphamtimkiemlist->ten_san_pham }}</a></h4>
												<div class="product-price">
													<ul>
														<li>{{ number_format($sanphamtimkiemlist->gia_tien_giam_gia, 0, '', ',') }}</li>
														<li class="old-price">{{ number_format($sanphamtimkiemlist->gia_tien_san_pham, 0, '', ',') }}</li>
													</ul>
												</div>
												<p>{{ $sanphamtimkiemlist->thong_tin_san_pham }}</p>
											</div>
											<div class="product-link">
												<div class="product-button">
													<a href="{{ route('website-ban-sach.them-vao-gio', $sanphamtimkiemlist->id) }}" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
												</div>
												<div class="add-to-link">
	                                                <ul>
	                                                    <li><a href="{{ route('website-ban-sach.chi-tiet-san-pham', $sanphamtimkiemlist->id) }}" title="Chi Tiết"><i class="fa fa-external-link"></i></a></li>
	                                                </ul>
	                                            </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- single-shop-end -->
						@endforeach
						<div class="row">
							{{ $dssanphamtimkiemList->links() }}
						</div>
					</div>
				</div>
				<!-- tab-area-end -->
				<!-- pagination-area-start -->
				<div class="pagination-area mt-50">
					<div class="list-page-2">
						<p>Tổng Cộng: <span style="font-weight: bold;">{{ count($tongsanphamtimKiem) }}</span> Sản Phẩm</p>
					</div>
				</div>
				<!-- pagination-area-end -->
			</div>
		</div>
	</div>
</div>
<!-- shop-main-area-end -->
@endsection
