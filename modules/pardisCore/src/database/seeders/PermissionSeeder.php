<?php

namespace Modules\PardisCore\database\seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'id' => '1',
                'name' => 'index_company',
                'display_name' => 'لیست شرکت‌ها'
            ],
            [
                'id' => '2',
                'name' => 'create_company',
                'display_name' => 'ایجاد شرکت'
            ],
            [
                'id' => '3',
                'name' => 'show_company',
                'display_name' => 'مشاهده شرکت'
            ],
            [
                'id' => '4',
                'name' => 'edit_company',
                'display_name' => 'ویرایش شرکت'
            ],
            [
                'id' => '5',
                'name' => 'delete_company',
                'display_name' => 'حذف شرکت'
            ],
            [
                'id' => '6',
                'name' => 'approve_company',
                'display_name' => 'تغییر وضعیت شرکت'
            ],
            [
                'id' => '7',
                'name' => 'index_user',
                'display_name' => 'لیست کاربران'
            ],
            [
                'id' => '8',
                'name' => 'create_user',
                'display_name' => 'ایجاد کاربر'
            ],
            [
                'id' => '9',
                'name' => 'edit_user_information',
                'display_name' => 'ویرایش اطلاعات کاربر'
            ],
            [
                'id' => '10',
                'name' => 'edit_user_acl',
                'display_name' => 'ویرایش دسترسی کاربر'
            ],
            [
                'id' => '11',
                'name' => 'index_role',
                'display_name' => 'لیست نقش‌ها'
            ],
            [
                'id' => '12',
                'name' => 'create_role',
                'display_name' => 'ایجاد نقش'
            ],
            [
                'id' => '13',
                'name' => 'edit_role',
                'display_name' => 'ویرایش نقش'
            ],
            [
                'id' => '14',
                'name' => 'delete_role',
                'display_name' => 'حذف نقش'
            ],
            [
                'id' => '15',
                'name' => 'index_permission',
                'display_name' => 'لیست دسترسی‌ها'
            ],
            [
                'id' => '16',
                'name' => 'create_permission',
                'display_name' => 'ایجاد دسترسی'
            ],
            [
                'id' => '17',
                'name' => 'edit_permission',
                'display_name' => 'ویرایش دسترسی'
            ],
            [
                'id' => '18',
                'name' => 'delete_permission',
                'display_name' => 'حذف دسترسی'
            ],
            [
                'id' => '19',
                'name' => 'edit_account',
                'display_name' => 'ویرایش حساب کاربری'
            ],
        ];

        Permission::query()->insertOrIgnore($permissions);
    }
}
