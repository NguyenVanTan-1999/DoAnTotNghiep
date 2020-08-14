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
