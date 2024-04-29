<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_gerente = Role::create(['name' => 'gerente']);


        $permission_create_role = Permission::create(['name' => 'create roles']);
        $permission_read_role = Permission::create(['name' => 'read roles']);
        $permission_update_role = Permission::create(['name' => 'update roles']);
        $permission_delete_role = Permission::create(['name' => 'delete roles']);

        $permission_create_product = Permission::create(['name' => 'create products']);
        $permission_read_product = Permission::create(['name' => 'read products']);
        $permission_update_product = Permission::create(['name' => 'update products']);
        $permission_delete_product = Permission::create(['name' => 'delete products']);

        $permission_create_category = Permission::create(['name' => 'create categories']);
        $permission_read_category = Permission::create(['name' => 'read categories']);
        $permission_update_category = Permission::create(['name' => 'update categories']);
        $permission_delete_category = Permission::create(['name' => 'delete categories']);

        $permission_create_supplier = Permission::create(['name' => 'create suppliers']);
        $permission_read_supplier = Permission::create(['name' => 'read suppliers']);
        $permission_update_supplier = Permission::create(['name' => 'update suppliers']);
        $permission_delete_supplier = Permission::create(['name' => 'delete suppliers']);

        $permission_create_sale = Permission::create(['name' => 'create sales']);
        $permission_read_sale = Permission::create(['name' => 'read sales']);
        $permission_update_sale = Permission::create(['name' => 'update sales']);
        $permission_delete_sale = Permission::create(['name' => 'delete sales']);

        $permission_create_sale_details = Permission::create(['name' => 'create sales_details']);
        $permission_read_sale_details = Permission::create(['name' => 'read sales_details']);
        $permission_update_sale_details = Permission::create(['name' => 'update sales_details']);
        $permission_delete_sale_details = Permission::create(['name' => 'delete sales_details']);

        $permission_create_stock = Permission::create(['name' => 'create stock']);
        $permission_read_stock = Permission::create(['name' => 'read stock']);
        $permission_update_stock = Permission::create(['name' => 'update stock']);
        $permission_delete_stock = Permission::create(['name' => 'delete stock']);

        $permission_create_pay = Permission::create(['name' => 'create payment']);
        $permission_read_pay = Permission::create(['name' => 'read payment']);
        $permission_update_pay = Permission::create(['name' => 'update payment']);
        $permission_delete_pay = Permission::create(['name' => 'delete payment']);


        $permissions_admin = [
            $permission_create_role,
            $permission_read_role,
            $permission_update_role,
            $permission_delete_role,

            $permission_create_product,
            $permission_read_product,
            $permission_update_product,
            $permission_delete_product,

            $permission_create_category,
            $permission_read_category,
            $permission_update_category,
            $permission_delete_category,

            $permission_create_supplier,
            $permission_read_supplier,
            $permission_update_supplier,
            $permission_delete_supplier,

            $permission_create_sale,
            $permission_read_sale,
            $permission_update_sale,
            $permission_delete_sale,

            $permission_create_sale_details,
            $permission_read_sale_details,
            $permission_update_sale_details,
            $permission_delete_sale_details,

            $permission_create_stock,
            $permission_read_stock,
            $permission_update_stock,
            $permission_delete_stock,

            $permission_create_pay,
            $permission_read_pay,
            $permission_update_pay,
            $permission_delete_pay
        ];

        $permissions_gerente = [

            $permission_create_product,
            $permission_read_product,
            $permission_update_product,
            $permission_delete_product,

            $permission_create_category,
            $permission_read_category,
            $permission_update_category,
            $permission_delete_category,

            $permission_create_supplier,
            $permission_read_supplier,
            $permission_update_supplier,
            $permission_delete_supplier,

            $permission_create_sale,
            $permission_read_sale,
            $permission_update_sale,
            $permission_delete_sale,

            $permission_create_sale_details,
            $permission_read_sale_details,
            $permission_update_sale_details,
            $permission_delete_sale_details,

            $permission_create_stock,
            $permission_read_stock,
            $permission_update_stock,
            $permission_delete_stock,

            $permission_create_pay,
            $permission_read_pay,
            $permission_update_pay,
            $permission_delete_pay

        ];

        //Asignación de permisos
        $role_admin->syncPermissions($permissions_admin);
        $role_gerente->syncPermissions($permissions_gerente);

    }
}
