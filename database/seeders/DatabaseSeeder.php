<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'created_by_id' => '0',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '1234567890',
            'password' => Hash::make('admin@gmail.com'),
            'show_password' => 'admin@gmail.com',
            'role_as' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
