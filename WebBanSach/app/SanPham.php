<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SanPham extends Model
{
	use SoftDeletes;
	
    protected $table = "san_pham";

	protected $dates = ['deleted_at'];

	public function nhaxuatBan()
	{
		return $this->belongsTo('App\NhaXuatBan', 'nha_xuat_ban_id', 'ma_nha_xuat_ban');
	}

	public function loaisanPham()
	{
		return $this->belongsTo('App\LoaiSanPham', 'loai_san_pham_id', 'ma_loai_san_pham');
	}

	public function hinhthucsanPham()
	{
		return $this->belongsTo('App\HinhThucSanPham', 'hinh_thuc_san_pham_id', 'loai_hinh_thuc_san_pham');
	}
}
