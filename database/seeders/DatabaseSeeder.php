<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'status' => 1,
            'hp'  => '081234567892',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'nama' => 'Kasir',
            'email' => 'kasir@gmail.com',
            'role' => 'kasir',
            'status' => 1,
            'hp'  => '081234567892',
            'password' => bcrypt('kasir'),
        ]);
    }
}
