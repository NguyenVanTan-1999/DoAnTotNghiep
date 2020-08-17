<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HoaDon extends Model
{
    use SoftDeletes;

    protected $table = 'hoa_don';

	protected $dates = ['deleted_at'];

	public function taiKhoan()
    {
        return $this->hasMany('App\TaiKhoan', 'tai_khoan_id', 'id');
    }
}
