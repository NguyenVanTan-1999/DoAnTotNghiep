<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SanPham extends Model
{
	use SoftDeletes;
	
    protected $table = "san_pham";

	protected $dates = ['deleted_at'];
}
