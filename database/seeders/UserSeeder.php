<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();
        User::create([
            'name' => 'Lina Fadilah',
            'email' => 'linahardiyana@gmail.com',
            'email_verified_at'  => now(),
            'role' => 'admin',
            'password' => Hash::make('123456'),
            'phone' => '6281322522106',
            'bio' => 'anak baik',
        ]);
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at'  => now(),
            'role' => 'superadmin',
            'password' => Hash::make('123456'),
            'phone' => '6281322521234',
            'bio' => 'anak baik',
        ]);
    }
}
