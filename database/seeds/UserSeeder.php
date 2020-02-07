<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // role admin
        Role::create([
            'name'=>'admin',
            'display_name'=>'admin'

        ]);
          //role member
        Role::create([
            'name'=>'member',
            'display_name'=>'member'
    ]);

    $adminUser = new User;

    $adminUser->name = "admin";
    $adminUser->email ="admin@gmail.com";
    $adminUser->password= bcrypt("rahasia123");
    $adminUser->save();
    $adminUser->attachRole('admin');

    $memberUser = new User;
    $memberUser->name = "member";
    $memberUser->email ="member@gmail.com";
    $memberUser->password= bcrypt("rahasia123");
    $memberUser->save();
    $memberUser->attachRole('member');
  } 
}
