<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name'=>'Admin','guard_name'=>'web'],
            ['name'=>'User','guard_name'=>'web'],
        ];
        foreach ($roles as $role) {
            ${$role['name']} = new Role;
            ${$role['name']}->fill($role)->save();
        }
        $permissions = [
            ['name'=>'view-dashboard','guard_name'=>'web'],

            ['name'=>'view-reports','guard_name'=>'web'],

            ['name'=>'create-agent','guard_name'=>'web'],
            ['name'=>'edit-agent','guard_name'=>'web'],
            ['name'=>'delete-agent','guard_name'=>'web'],

            ['name'=>'create-user','guard_name'=>'web'],
            ['name'=>'edit-user','guard_name'=>'web'],
            ['name'=>'delete-user','guard_name'=>'web'],
        ];

        foreach ($permissions as $permission) {
            $perm = Permission::create($permission);
            $Admin->permissions()->attach($perm);
            if(in_array($permission['name'], ['view-reports','create-agent','edit-agent','delete-agent'])){
                $User->permissions()->attach($perm);
            }
        }
    }
}
