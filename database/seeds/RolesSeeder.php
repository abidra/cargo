<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = new Role;
      $admin->name = 'admin_karyawan';
      $admin->display_name = 'Admin Karyawan';
      $admin->description = 'Admin Karyawan';
      $admin->save();
      // $admin = new Role;
      // $admin->name = 'directorat';
      // $admin->display_name = 'Direktorat';
      // $admin->description = 'Direktorat';
      // $admin->save();
      //
      // $admin = new Role;
      // $admin->name = 'dws';
      // $admin->display_name = 'DWS';
      // $admin->description = 'DWS';
      // $admin->save();
      //
      // $admin = new Role;
      // $admin->name = 'telin';
      // $admin->display_name = 'Telin';
      // $admin->description = 'Telin';
      // $admin->save();
      //
      // $admin = new Role;
      // $admin->name = 'mitratel';
      // $admin->display_name = 'Mitratel';
      // $admin->description = 'Mitratel';
      // $admin->save();
      //
      // $admin = new Role;
      // $admin->name = 'telkom_infra';
      // $admin->display_name = 'Telkom Infra';
      // $admin->description = 'Telkom Infra';
      // $admin->save();
      //
      // $admin = new Role;
      // $admin->name = 'sso_finance';
      // $admin->display_name = 'SSO Finance';
      // $admin->description = 'SSO Finance';
      // $admin->save();
    }
}
