<?php

namespace Modules\PardisCore\database\seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programmer = Role::query()->where('name', 'programmer')->first();
        $programmer->permissions()->sync([
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
            11, 12, 13, 14, 15, 16, 17, 18, 19
        ], false);

        $admin = Role::query()->where('name', 'admin')->first();
        $admin->permissions()->sync([
            1, 3, 5, 6, 7, 8, 9, 10, 11,
            15, 19
        ], false);

        $manager = Role::query()->where('name', 'manager')->first();
        $manager->permissions()->sync([
            2, 3, 4, 19
        ], false);
    }
}
