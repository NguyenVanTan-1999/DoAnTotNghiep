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
						<li><a class="active">Danh Sách Giỏ Hàng</a></li>
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
					<h2>Giỏ Hàng</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- entry-header-area-end -->

<!-- cart-main-area-start -->
<div class="cart-main-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form action="#">
					<div class="table-content table-responsive" id="list-cart">
						<table>
							<thead>
								<tr>
									<th class="product-thumbnail">Ảnh Minh Họa</th>
									<th class="product-name">Tên</th>
									<th class="product-price">Giá</th>
									<th class="product-quantity">Số Lượng</th>
									<th class="product-subtotal">Tổng</th>
                                    <th class="product-remove">Lưu</th>
									<th class="product-remove">Xóa</th>
								</tr>
							</thead>
							<tbody>
								@if(Session::has('cart'))
                                @foreach($product_cart as $product)
    								<tr>
    									<td class="product-thumbnail"><a href="#"><img src="{{ asset('images/product/'.$product['item']['anh_minh_hoa_san_pham']) }}" alt="man" /></a></td>

    									<td class="product-name"><a href="#">{{ $product['item']['ten_san_pham'] }}</a></td>

    									<td class="product-price"><span class="amount">{{ number_format($product['item']['gia_tien_giam_gia'], 0, '', ',') }}</span></td>

    									<td class="product-quantity"><input type="number" value="{{$product['qty']}}"></td>

    									<td class="product-subtotal">{{ number_format($product['price'], 0, '', ',') }}</td>

                                        <td class="product-remove"><a href="#"><i class="fa fa-save"></i></a></td>

    									<td class="product-remove"><i class="fa fa-times" onclick="DeleteListItemCart({{ $product['item']['id'] }})"></i></td>
    								</tr>
                                @endforeach
								@endif
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            	@if(Session::has('cart'))
                <div class="cart_totals">
                    <h2>Tổng Cộng</h2><br />
                    <table>
                        <tbody>
                            <tr class="order-total">
                                <th>Số Lượng</th>
                                <td>
                                    <strong>
                                        <span class="amount">{{ Session('cart')->totalQty }} Quyển</span>
                                    </strong>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Tổng</th>
                                <td>
                                    <strong>
                                        <span class="amount">{{ number_format(Session('cart')->totalPrice, 0, '', ',') }} VNĐ</span>
                                    </strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="wc-proceed-to-checkout">
                        <a href="#">Proceed to Checkout</a>
                    </div>
                </div>
                @endif
            </div>
        </div>
	</div>
</div>
<!-- cart-main-area-end -->
@endsection

@section('ajax')
<script>
	function DeleteListItemCart(id){
		$.ajax({
            url: 'xoa-ds-gio-hang/'+id,
            type: 'GET',
        }).done(function(response) {
            RenderListCart(response);
            alertify.success('Đã Thêm Vào Giỏ');
        });
	}

	function RenderListCart(response){
        $("#list-cart").empty();
        $("#list-cart").html(response);
    }
</script>
@endsection
