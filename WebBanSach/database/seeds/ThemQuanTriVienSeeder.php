<?php

use Illuminate\Database\Seeder;

class ThemQuanTriVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\QuanTriVien::create([
        	'ten_tai_khoan_admin' => 'admin',
        	'mat_khau_admin'      => Hash::make('Nguyenvantan1999'),
        	'ho_ten_admin'        => 'Nguyen Van Tan',
        ]);
    }
}
