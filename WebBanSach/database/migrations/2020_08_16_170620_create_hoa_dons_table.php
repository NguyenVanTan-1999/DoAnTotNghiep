<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tai_khoan_id');
            $table->string('ten_nguoi_nhan', 100);
            $table->date('ngay_mua');
            $table->string('dia_chi_giao_hang', 100);
            $table->char('so_dien_thoai_giao_hang', 10);
            $table->integer('tong_tien');
            $table->boolean('trang_thai');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tai_khoan_id')->references('id')->on('tai_khoan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_don');
    }
}
