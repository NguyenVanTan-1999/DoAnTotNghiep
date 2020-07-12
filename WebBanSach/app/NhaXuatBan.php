<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhaXuatBan extends Model
{
    use SoftDeletes;

    protected $table = 'nha_xuat_ban';

	protected $dates = ['deleted_at'];
}
