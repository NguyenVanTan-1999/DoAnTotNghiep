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
						<li><a href="{{ route('website-ban-sach.san-pham') }}" class="active">Sản Phẩm</a></li>
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
					<div class="left-menu mb-30">
						<ul>
							@foreach($dsHinhThucSanPham as $hinhthucsanpham)
								<li><a href="#">{{ $hinhthucsanpham->ten_hinh_thuc_san_pham }}</a></li>
							@endforeach
						</ul>
					</div>

					<div class="left-title mb-20">
						<h4>LOẠI SẢN PHẨM</h4>
					</div>
					<div class="left-menu mb-30">
						<ul>
							@foreach($dsLoaiSanPham as $loaisanpham)
								<li><a href="#">{{ $loaisanpham->ten_loai_san_pham }}</a></li>
							@endforeach
						</ul>
						<div class="row">
							{{ $dsLoaiSanPham->links() }}
						</div>
					</div>

					<div class="left-title mb-20">
						<h4>NHÀ XUẤT BẢN</h4>
					</div>
					<div class="left-menu mb-30">
						<ul>
							@foreach($dsNhaXuatBan as $nhaxuatban)
								<li><a href="#">{{ $nhaxuatban->ten_nha_xuat_ban }}</a></li>
							@endforeach
						</ul>
						<div class="row">
							{{ $dsNhaXuatBan->links() }}
						</div>
					</div>

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
				<div class="header-search">
					<form action="#">
						<input type="text" placeholder="Tìm Kiếm Sản Phẩm ..." />
						<a href="#"><i class="fa fa-search"></i></a>
					</form>
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
							<p>Tổng Cộng: <span style="font-weight: bold;">{{ count($tongSanPham) }}</span> Sản Phẩm</p>
						</div>
					</div>
					<div class="field-limiter">
						<div class="control">
							<span>Show</span>
							<!-- chosen-start -->
							<select data-placeholder="Default Sorting" style="width:50px;" class="chosen-select" tabindex="1">
								 <option value="Sorting">1</option>
								 <option value="popularity">2</option>
								 <option value="rating">3</option>
								 <option value="date">4</option>
							</select>
							<!-- chosen-end -->
						</div>
					</div>
					<div class="toolbar-sorter">
						<span>Sort By</span>
						<select id="sorter" class="sorter-options" data-role="sorter">
							<option selected="selected" value="position"> Position </option>
							<option value="name"> Product Name </option>
							<option value="price"> Price </option>
						</select>
						<a href="#"><i class="fa fa-arrow-up"></i></a>
					</div>
				</div>
				<!-- tab-area-start -->
				<div class="tab-content">
					<div class="tab-pane active" id="th">
					    <div class="row">
					    	@foreach($dsSanPhamGrid as $sanphamgrid)
						        <div class="col-lg-3 col-md-4 col-sm-6">
						            <!-- single-product-start -->
	                                <div class="product-wrapper mb-40">
	                                    <div class="product-img">
	                                        <a href="#">
	                                            <img src="{{ asset('images/product/'.$sanphamgrid->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
	                                        </a>
	                                        <div class="quick-view">
	                                            <a class="action-view" href="#" data-target="#" data-toggle="modal" title="Xem Nhanh">
	                                                <i class="fa fa-search-plus"></i>
	                                            </a>
	                                        </div>
	                                        <div class="product-flag">
	                                            <ul>
	                                                <li><span class="sale">{{ $sanphamgrid->hinhthucsanPham->ten_hinh_thuc_san_pham }}</span></li>
	                                                <li><span class="discount-percentage">-{{ $sanphamgrid->phan_tram_giam_gia }}%</span></li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                    <div class="product-details text-center">
	                                        <h4 style="height: 65px;"><a href="#">{{ $sanphamgrid->ten_san_pham }}</a></h4>
	                                        <div class="product-price">
	                                            <ul>
	                                                <li>{{ $sanphamgrid->gia_tien_giam_gia }}</li>
	                                                <li class="old-price">{{ $sanphamgrid->gia_tien_san_pham }}</li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                    <div class="product-link">
	                                        <div class="product-button">
	                                            <a href="#" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
	                                        </div>
	                                        <div class="add-to-link">
	                                            <ul>
	                                                <li><a href="product-details.html" title="Chi Tiết"><i class="fa fa-external-link"></i></a></li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                </div>
	                                <!-- single-product-end -->
						        </div>
					        @endforeach
					    </div>
					    <div class="row">
							{{ $dsSanPhamGrid->links() }}
						</div>
					</div>

					<div class="tab-pane fade" id="list">
						@foreach($dsSanPhamList as $sanphamlist)
							<!-- single-shop-start -->
							<div class="single-shop mb-30">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="product-wrapper-2">
											<div class="product-img">
												<a href="#">
													<img src="{{ asset('images/product/'.$sanphamlist->anh_minh_hoa_san_pham) }}" alt="book" class="primary" />
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="product-wrapper-content">
											<div class="product-details">
												<h4><a href="#">{{ $sanphamlist->ten_san_pham }}</a></h4>
												<div class="product-price">
													<ul>
														<li>{{ $sanphamlist->gia_tien_giam_gia }}</li>
														<li class="old-price">{{ $sanphamlist->gia_tien_san_pham }}</li>
													</ul>
												</div>
												<p>{{ $sanphamlist->thong_tin_san_pham }}</p>
											</div>
											<div class="product-link">
												<div class="product-button">
													<a href="#" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
												</div>
												<div class="add-to-link">
	                                                <ul>
	                                                    <li><a href="product-details.html" title="Chi Tiết"><i class="fa fa-external-link"></i></a></li>
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
							{{ $dsSanPhamList->links() }}
						</div>
					</div>
				</div>
				<!-- tab-area-end -->
				<!-- pagination-area-start -->
				<div class="pagination-area mt-50">
					<div class="list-page-2">
						<p>Tổng Cộng: <span style="font-weight: bold;">{{ count($tongSanPham) }}</span> Sản Phẩm</p>
					</div>
				</div>
				<!-- pagination-area-end -->
			</div>
		</div>
	</div>
</div>
<!-- shop-main-area-end -->
@endsection
