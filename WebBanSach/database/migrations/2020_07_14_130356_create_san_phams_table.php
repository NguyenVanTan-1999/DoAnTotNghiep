<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_san_pham', 10)->unique();
            $table->string('ten_san_pham', 100);
            $table->string('thong_tin_san_pham', 1000);
            $table->date('ngay_xuat_ban_san_pham');
            $table->integer('gia_tien_san_pham');
            $table->integer('gia_tien_giam_gia');
            $table->integer('phan_tram_giam_gia');
            $table->string('anh_minh_hoa_san_pham');
            $table->string('nha_xuat_ban_id', 10);
            $table->string('loai_san_pham_id', 10);
            $table->string('hinh_thuc_san_pham_id', 10);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('nha_xuat_ban_id')->references('ma_nha_xuat_ban')->on('nha_xuat_ban');
            $table->foreign('loai_san_pham_id')->references('ma_loai_san_pham')->on('loai_san_pham');
            $table->foreign('hinh_thuc_san_pham_id')->references('loai_hinh_thuc_san_pham')->on('hinh_thuc_san_pham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham');
    }
}
