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
        	['ma_loai_san_pham' => 'LSP001', 'ten_loai_san_pham' => 'Tiểu Thuyết'],
        	['ma_loai_san_pham' => 'LSP002', 'ten_loai_san_pham' => 'Kinh Tế'],
        	['ma_loai_san_pham' => 'LSP003', 'ten_loai_san_pham' => 'Tâm Lý - Kĩ Năng Sống'],
        	['ma_loai_san_pham' => 'LSP004', 'ten_loai_san_pham' => 'Giáo Dục Con'],
        	['ma_loai_san_pham' => 'LSP005', 'ten_loai_san_pham' => 'Thiếu Nhi'],
        	['ma_loai_san_pham' => 'LSP006', 'ten_loai_san_pham' => 'Tiểu Sử - Hồi Ký'],
        	['ma_loai_san_pham' => 'LSP007', 'ten_loai_san_pham' => 'Giáo Khoa'],
        	['ma_loai_san_pham' => 'LSP008', 'ten_loai_san_pham' => 'Ngoại Ngữ'],
            ['ma_loai_san_pham' => 'LSP009', 'ten_loai_san_pham' => 'Văn Hóa - Nghệ Thuật - Du Lịch'],
            ['ma_loai_san_pham' => 'LSP010', 'ten_loai_san_pham' => 'Tin Học'],
            ['ma_loai_san_pham' => 'LSP011', 'ten_loai_san_pham' => 'Kiến Thức Bách Khoa'],
            ['ma_loai_san_pham' => 'LSP012', 'ten_loai_san_pham' => 'Truyện Ngắn - Tản Văn'],
            ['ma_loai_san_pham' => 'LSP013', 'ten_loai_san_pham' => 'Văn Học']
        ]);
    }
}
