<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DefaultProfileAndRole::class);
        $this->call(UsersPermissionSeeder::class);
        $this->call(AdminsPermissionSeeder::class);
        $this->call(CategoriesPermissionSeeder::class);
        $this->call(SuperAdminUserSeeder::class);
    }
}
