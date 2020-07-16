<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhaXuatBansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nha_xuat_ban', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_nha_xuat_ban', 10)->unique();
            $table->string('ten_nha_xuat_ban', 100);
            $table->string('dia_chi_nha_xuat_ban', 100);
            $table->string('website_nha_xuat_ban', 100);
            $table->string('email_nha_xuat_ban', 100);
            $table->string('so_dien_thoai_nha_xuat_ban', 11);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nha_xuat_ban');
    }
}
