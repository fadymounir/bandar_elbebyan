<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Super Admin',
            'email'     => 'super-admin@admin.com',
            'phone'     => '+966503980729',
            'type'      => 'admin',
            'is_active' => 1,
            'role_id'   => 1,
            'password'  => Hash::make('admin'),
        ]);
    }
}
