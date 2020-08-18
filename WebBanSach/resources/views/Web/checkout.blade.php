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
						<li><a class="active">Đặt Hàng</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs-area-end -->

<!-- entry-header-area-start -->
<div class="entry-header-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="entry-header-title">
					<h2>Đặt Hàng</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- entry-header-area-end -->

<!-- checkout-area-start -->
<div class="checkout-area mb-70">
	<div class="container">
		<div class="row">
			<form action="{{ route('website-ban-sach.xu-ly-dat-hang') }}" method="POST">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="checkbox-form">
						<h3>Thông Tin Hóa Đơn</h3>
						<div class="row">

							@csrf

							@include('Web.blocks.error')

							@include('Web.blocks.alert')

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkout-form-list">
									<label for="ten_nguoi_nhan">Tên Người Nhận <span class="required">*</span></label>

									<input type="text" id="ten_nguoi_nhan" name="ten_nguoi_nhan" title="tên người nhận không vượt quá 40 ký tự" maxlength="40" value="{{ Auth::guard('web')->user()->ho_ten }}" required />
								</div>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkout-form-list">
									<label for="dia_chi_giao_hang">Địa Chỉ Giao Hàng <span class="required">*</span></label>

									<input type="text" id="dia_chi_giao_hang" name="dia_chi_giao_hang" title="địa chỉ giao hàng không vượt quá 100 ký tự" maxlength="100" value="{{ Auth::guard('web')->user()->dia_chi }}" required />
								</div>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="checkout-form-list">
									<label for="so_dien_thoai_giao_hang">SĐT Giao Hàng <span class="required">*</span></label>

									<input type="tel" id="so_dien_thoai_giao_hang" name="so_dien_thoai_giao_hang" title="số điện thoại giao hàng phải điền đúng 10 số" maxlength="10" pattern="[0-9]{10}" value="{{ Auth::guard('web')->user()->so_dien_thoai }}" required />
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="your-order">
						@if(Session::has('cart'))
						<h3>Giỏ Hàng Của Bạn</h3>
						@else
						<h3>Giỏ Hàng Của Bạn (Trống)</h3>
						@endif
						<div class="your-order-table table-responsive">
							<table>
								<thead>
									<tr>
										<th class="product-name">Sản Phẩm</th>
										<th class="product-total">Tổng</th>
									</tr>
								</thead>
								<tbody>
									@if(Session::has('cart'))
                                	@foreach($product_cart as $product)
										<tr class="cart_item">
											<td class="product-name">
												{{ $product['item']['ten_san_pham'] }} <strong class="product-quantity"> × {{$product['qty']}}</strong>
											</td>
											<td class="product-total">
												<span class="amount">{{ number_format($product['price'], 0, '', ',') }}</span>
											</td>
										</tr>
									@endforeach
									@endif
								</tbody>
								<tfoot>
									@if(Session::has('cart'))
									<tr class="order-total">
										<th>Số Lượng</th>
										<td><strong><span class="amount">{{ Session('cart')->totalQty }} Quyển</span></strong></td>
									</tr>
									<tr class="order-total">
										<th>Tổng Cộng</th>
										<td><strong><span class="amount">{{ number_format(Session('cart')->totalPrice, 0, '', ',') }} VNĐ</span></strong></td>
									</tr>
									@endif
								</tfoot>
							</table>
						</div>
						<div class="payment-method">
							<div class="order-button-payment">
								<button type="submit" style="background: #ec4445 none repeat scroll 0 0; border: medium none; color: #fff; font-size: 17px; height: 50px; margin: 20px 0 0; padding: 0; text-transform: uppercase; transition: all 0.3s ease 0s; width: 100%; font-family: 'Rufina', serif; font-weight: 400;" onclick="return confirm('Bạn Có Muốn Tạo Hóa Đơn Này ?')">Tạo Hóa Đơn</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- checkout-area-end -->
@endsection
