<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HinhThucSanPham extends Model
{
    use SoftDeletes;

    protected $table = 'hinh_thuc_san_pham';

	protected $dates = ['deleted_at'];
}
