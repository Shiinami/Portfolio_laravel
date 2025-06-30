<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portofolio;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        Portofolio::create([
            'title' => 'Portofolio Website',
            'description' => 'Situs web pribadi yang dibuat dengan Laravel dan CSS murni.',
            'image' => 'portfolio/sample1.jpg',
            'category' => 'web'
        ]);

        Portofolio::create([
            'title' => 'Aplikasi Mobile UI',
            'description' => 'Desain UI aplikasi kesehatan menggunakan Figma.',
            'image' => 'portfolio/sample2.jpg',
            'category' => 'design'
        ]);
    }
}
