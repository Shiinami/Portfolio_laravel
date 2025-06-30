<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat user default jika belum ada
        User::firstOrCreate(
            ['email' => 'user@example.com'],
            [
                'name' => 'Deva Syaiful',
                'password' => bcrypt('password') // ganti jika perlu
            ]
        );

        $this->call([
            ProfileSeeder::class,
            PortfolioSeeder::class,
        ]);
    }
}
