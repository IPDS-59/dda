<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * @author Fajrian Aidil Pratama
 *
 * @email fajrianaidilp@gmail.com
 *
 * @create date 2023-02-11 20:47:39
 *
 * @modify date 2023-02-11 20:47:39
 *
 * @desc [description]
 */
class PermissionAndRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit tables']);
        Permission::create(['name' => 'verify tables']);
        Permission::create(['name' => 'delete tables']);
        Permission::create(['name' => 'publish tables']);
        Permission::create(['name' => 'unpublish tables']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'contributor']);
        $role->givePermissionTo('edit tables');
        $role = Role::create(['name' => 'verificator']);
        $role->givePermissionTo('verify tables');

        // or may be done by chaining
        $role = Role::create(['name' => 'admin'])
            ->givePermissionTo(['publish tables', 'unpublish tables']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
