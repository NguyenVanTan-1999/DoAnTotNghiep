<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChiTietHoaDon extends Model
{
    use SoftDeletes;

    protected $table = 'chi_tiet_hoa_don';

	protected $dates = ['deleted_at'];

	public function hoaDon()
    {
        return $this->hasMany('App\HoaDon', 'hoa_don_id', 'id');
    }

    public function sanPham()
    {
        return $this->belongsTo('App\SanPham', 'san_pham_id', 'id');
    }
}
