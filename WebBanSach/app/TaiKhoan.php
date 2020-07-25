<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaiKhoan extends Model
{
	use SoftDeletes;

    protected $table = "tai_khoan";

    protected $dates = ['deleted_at'];

    public function getPasswordAttribute($value)
    {
    	$this->attributes['mat_khau'] = Hash::make($value);
    }
}
