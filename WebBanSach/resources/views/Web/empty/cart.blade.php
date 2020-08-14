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
			    <i class="fa fa-remove" data-id="{{ $product['item']['id'] }}"></i>
			</div>
		</div>
	@endforeach
</div>
<div class="cart-totals">
	<h5>Tổng <span>{{ number_format(Session('cart')->totalPrice, 0, '', ',') }} VNĐ</span></h5>
	<input hidden id="total-quanty-cart" type="number" value="{{ Session('cart')->totalQty }}">
</div>
