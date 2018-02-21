<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
  public function run()
  {
    $role_employee = new Role();
    $role_employee->name = 'admin';
    $role_employee->description = 'A Admin User';
    $role_employee->save();
  }
}