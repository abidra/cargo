<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        //role
        $super_admin = new Role;
        $super_admin->name = 'super_admin';
        $super_admin->display_name = 'Super Admin';
        $super_admin->save();


        $admin_utama = new Role;
        $admin_utama->name = 'admin_utama';
        $admin_utama->display_name = 'Admin Utama';
        $admin_utama->description = 'Admin Utama';
        $admin_utama->save();

        $admin_karyawan = new Role;
        $admin_karyawan->name = 'admin_karyawan';
        $admin_karyawan->display_name = 'Admin Karyawan';
        $admin_karyawan->description = 'Admin Karyawan';
        $admin_karyawan->save();

        // super admin
        $user = new User;
        $user->name = 'Super Admin';
        $user->phone = '0123456789';
        $user->username = 'superadmin';
        $user->email = 'admin@nanana.co.id';
        $user->password = bcrypt('superadmin!');
        $user->save();
        $user->attachRole($super_admin);

         foreach (range(1, 3) as $index) {
             $user = new User;
             $user->name = $faker->name;
             $user->username = 'admin_utama_'.$index;
         	$user->phone = $faker->e164PhoneNumber;
             $user->email = $faker->email;
             $user->password = bcrypt('admin!');

             $user->save();
             $user->attachRole($admin_utama);
         }

        foreach (range(1, 5) as $index) {
            $user = new User;
            $user->name = $faker->name;
            $user->username = 'admin_karyawan_'.$index;
            $user->phone = $faker->e164PhoneNumber;
            $user->email = $faker->email;
            $user->password = bcrypt('admin!');

            $user->save();
            $user->attachRole($admin_karyawan);
        }
    }
}
