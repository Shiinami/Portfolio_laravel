<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'name' => 'Deva Syaiful',
            'address' => 'Bandung, Indonesia',
            'birth_date' => '2000-01-01',
            'email' => 'deva@example.com',
            'website' => 'https://devasyaiful.my.id',
            'bio' => 'UI/UX Designer dan Web Developer dengan pengalaman di Laravel dan Figma.',
            'phone' => '08123456789',
            'freelance' => 'Available',
            'degree' => 'S1 Teknik Informatika',
            'age' => '20',
            'pic' => 'profile/deva.jpg',
        ]);
    }
}
