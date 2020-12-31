<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\PardisCore\database\seeders\PermissionSeeder;
use Modules\PardisCore\database\seeders\RolePermissionSeeder;
use Modules\PardisCore\database\seeders\RoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProvinceSeeder::class,
            UserSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            RolePermissionSeeder::class
        ]);
    }
}
