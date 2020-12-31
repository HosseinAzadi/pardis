<?php

namespace Modules\PardisCore\database\seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => '1',
                'name' => 'programmer',
                'display_name' => 'توسعه دهنده'
            ],
            [
                'id' => '2',
                'name' => 'admin',
                'display_name' => 'مدیر سامانه'
            ],
            [
                'id' => '3',
                'name' => 'manager',
                'display_name' => 'مدیر ‌شرکت'
            ],

        ];

        Role::query()->insertOrIgnore($roles);
    }
}
