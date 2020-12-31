<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insertOrIgnore([
            [
                'id' => 1,
                'first_name' => 'وحید',
                'last_name' => 'عاشورزاده',
                'username' => 'root',
                'email' => 'test@gmail.com',
                'nid' => '0010000100',
                'mobile' => '09123456789',
                'is_admin' => 1,
                'password' => bcrypt('123'),
                'gender' => 'female',
                'province_id' => 8,
                'parent_id' => 0,
                'is_banned' => 0,
                'two_factor_status' => 'off',
                'email_verified_at' => now()->toDateTimeString(),
                'remember_token' => null,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
                'deleted_at' => null,
            ]
        ]);
    }
}
