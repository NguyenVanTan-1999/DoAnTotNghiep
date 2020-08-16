<?php

namespace App;

class GioHang
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id){
		$giohang = ['qty'=>0, 'price' => $item->gia_tien_giam_gia, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty']++;
		$giohang['price'] = $item->gia_tien_giam_gia * $giohang['qty'];
		$this->items[$id] = $giohang;
		$this->totalQty++;
		$this->totalPrice += $item->gia_tien_giam_gia;
	}

	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}

	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}

	public function UpdateItemCart($id, $quanty){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];

		$this->items[$id]['qty'] = $quanty;
		$this->items[$id]['price'] = $quanty * $this->items[$id]['item']->gia_tien_giam_gia;

		$this->totalQty += $this->items[$id]['qty'];
		$this->totalPrice += $this->items[$id]['price'];
	}
}
