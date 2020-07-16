<?php

use Illuminate\Database\Seeder;

class ThemNhaXuatBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nha_xuat_ban')->insert([
        	['ma_nha_xuat_ban' => 'NXB001', 'ten_nha_xuat_ban' => 'Nhà Xuất Bản Trẻ', 'dia_chi_nha_xuat_ban' => '161B Lý Chính Thắng, Phường 7, Quận 3, TP.HCM', 'website_nha_xuat_ban' => 'http://www.nxbtre.com.vn', 'email_nha_xuat_ban' => 'hopthubandoc@nxbtre.com.vn', 'so_dien_thoai_nha_xuat_ban' => '02839316289'],


        	['ma_nha_xuat_ban' => 'NXB002', 'ten_nha_xuat_ban' => 'Nhà Xuất Bản Kim Đồng', 'dia_chi_nha_xuat_ban' => '55 Quang Trung, Quận Hai Bà Trưng, Hà Nội', 'website_nha_xuat_ban' => 'http://www.nxbkimdong.com.vn', 'email_nha_xuat_ban' => 'info@nxbkimdong.com.vn', 'so_dien_thoai_nha_xuat_ban' => '02439434730'],


        	['ma_nha_xuat_ban' => 'NXB003', 'ten_nha_xuat_ban' => 'Nhà Xuất Bản Nhã Nam', 'dia_chi_nha_xuat_ban' => '59 Đỗ Quang, Quận Cầu Giấy, Hà Nội', 'website_nha_xuat_ban' => 'http://nhanam.com.vn', 'email_nha_xuat_ban' => 'bookstore@nhanam.vn', 'so_dien_thoai_nha_xuat_ban' => '0903244248'],


        	['ma_nha_xuat_ban' => 'NXB004', 'ten_nha_xuat_ban' => 'Nhà Xuất Bản Alpha Books', 'dia_chi_nha_xuat_ban' => 'Tầng 3, Dream Home Center, 11A Ngõ 282 Nguyễn Huy Tưởng, Quận Thanh Xuân, Hà Nội', 'website_nha_xuat_ban' => 'http://www.alphabooks.vn', 'email_nha_xuat_ban' => 'info@alphabooks.vn', 'so_dien_thoai_nha_xuat_ban' => '19002647'],


        	['ma_nha_xuat_ban' => 'NXB005', 'ten_nha_xuat_ban' => 'Nhà Xuất Bản Thái Hà Books', 'dia_chi_nha_xuat_ban' => 'Lô B2, Khu Đấu Giá 3HA, Tổ Dân Phố Số 1, Phường Phúc Diễn, Quận Bắc Từ Liêm, Hà Nội', 'website_nha_xuat_ban' => 'http://www.thaihabooks.com', 'email_nha_xuat_ban' => 'info@thaihabooks.com', 'so_dien_thoai_nha_xuat_ban' => '02437930480'],


        	['ma_nha_xuat_ban' => 'NXB006', 'ten_nha_xuat_ban' => 'Nhà Xuất Bản Đông A Books', 'dia_chi_nha_xuat_ban' => '113 Đông Các, Phường Ô Chợ Dừa, Quận Đống Đa, Hà Nội', 'website_nha_xuat_ban' => 'http://www.dongabooks.vn', 'email_nha_xuat_ban' => 'tdtdonga@gmail.com', 'so_dien_thoai_nha_xuat_ban' => '0438569381']
        ]);
    }
}
