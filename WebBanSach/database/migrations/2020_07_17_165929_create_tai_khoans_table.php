<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiKhoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_khoan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_tai_khoan', 100)->unique();
            $table->string('mat_khau', 100);
            $table->string('ho_ten', 100);
            $table->integer('do_tuoi');
            $table->string('gioi_tinh', 3);
            $table->string('dia_chi', 100);
            $table->string('quoc_gia', 100);
            $table->string('email', 100);
            $table->char('so_dien_thoai', 10);
            $table->string('anh_dai_dien');
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
        Schema::dropIfExists('tai_khoan');
    }
}
