<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\admin;
use App\Models\roles;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        admin::truncate();

        $adminRoles = roles::where('TenRoles','admin')->first();
        $QTVRoles = roles::where('TenRoles','QTV')->first();

        $admin = admin::create([
            'HoTenAD'=>'tuongAD',
            'Email'=>'tuongb1809317@student.ctu.edu.vn',
            'SoDT'=>'0349246232',
            'MatKhau'=>md5('123'),
            'DiaChi'=>'Tra Vinh'
        ]);

         $QTV = admin::create([
            'HoTenAD'=>'tuongQTV',
            'Email'=>'tuong@123.com',
            'SoDT'=>'0349246232',
            'MatKhau'=>md5('123'),
            'DiaChi'=>'Tra Vinh'
        ]);

         $admin->roles()->attach($adminRoles);
         $QTV->roles()->attach($QTVRoles);

    }
}
