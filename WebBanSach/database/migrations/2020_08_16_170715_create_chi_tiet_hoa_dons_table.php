<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_hoa_don', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hoa_don_id');
            $table->unsignedInteger('san_pham_id');
            $table->integer('so_luong');
            $table->integer('don_gia');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('hoa_don_id')->references('id')->on('hoa_don');
            $table->foreign('san_pham_id')->references('id')->on('san_pham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_hoa_don');
    }
}
