<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\roles;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        roles::truncate();

        roles::create(['TenRoles'=>'Nhân viên']);
        roles::create(['TenRoles'=>'Quản trị viên']);


    }
}
