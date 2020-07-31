<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaiKhoan extends Model
{
	use SoftDeletes;

    protected $table = "tai_khoan";

    protected $dates = ['deleted_at'];

    public function getPasswordAttribute()
    {
    	return $this->mat_khau;
    }

    public function doimatkhaukhachHang($value)
    {
    	$this->attributes['mat_khau'] = Hash::make($value);
    }
}
