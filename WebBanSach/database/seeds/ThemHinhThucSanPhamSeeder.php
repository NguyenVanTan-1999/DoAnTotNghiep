<?php

use Illuminate\Database\Seeder;

class ThemHinhThucSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hinh_thuc_san_pham')->insert([
        	['loai_hinh_thuc_san_pham' => 'HTSP001', 'ten_hinh_thuc_san_pham' => 'Sản Phẩm Mới'],
        	['loai_hinh_thuc_san_pham' => 'HTSP002', 'ten_hinh_thuc_san_pham' => 'Sản Phẩm Bán Chạy'],
        	['loai_hinh_thuc_san_pham' => 'HTSP003', 'ten_hinh_thuc_san_pham' => 'Sản Phẩm Yêu Thích'],
        	['loai_hinh_thuc_san_pham' => 'HTSP004', 'ten_hinh_thuc_san_pham' => 'Sản Phẩm Giảm Giá']
        ]);
    }
}
