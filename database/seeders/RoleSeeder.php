<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Personal']);


        Permission::create(['name' => 'Administrador'])->syncRoles([$role1]);
        Permission::create(['name' => 'Personal'])->syncRoles([$role2]);
    }
}
