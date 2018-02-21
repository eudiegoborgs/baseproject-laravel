<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
  public function run()
  {
    $role_employee = Role::where('name', 'admin')->first();

    $employee = new User();
    $employee->name = 'Administrador';
    $employee->username = 'admin';
    $employee->email = 'ferreirabdiego@gmail.com';
    $employee->password = bcrypt('Fl0r3st@');
    $employee->save();
    $employee->roles()->attach($role_employee);
  }
}
