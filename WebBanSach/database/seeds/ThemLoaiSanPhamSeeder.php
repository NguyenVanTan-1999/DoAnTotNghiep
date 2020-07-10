<?php

use Illuminate\Database\Seeder;

class ThemLoaiSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loai_san_pham')->insert([
        	['ma_loai_san_pham' => 'SP001', 'ten_loai_san_pham' => 'Văn Học'],
        	['ma_loai_san_pham' => 'SP002', 'ten_loai_san_pham' => 'Kinh Tế'],
        	['ma_loai_san_pham' => 'SP003', 'ten_loai_san_pham' => 'Tâm Lý - Kĩ Năng Sống'],
        	['ma_loai_san_pham' => 'SP004', 'ten_loai_san_pham' => 'Giáo Dục Con'],
        	['ma_loai_san_pham' => 'SP005', 'ten_loai_san_pham' => 'Thiếu Nhi'],
        	['ma_loai_san_pham' => 'SP006', 'ten_loai_san_pham' => 'Tiểu Sử - Hồi Ký'],
        	['ma_loai_san_pham' => 'SP007', 'ten_loai_san_pham' => 'Giáo Khoa'],
        	['ma_loai_san_pham' => 'SP008', 'ten_loai_san_pham' => 'Ngoại Ngữ']
        ]);
    }
}
