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
            'image' => 'https://dmtalkies.com/wp-content/uploads/2024/02/Netflix-House-Of-Ninjas-Ending-Explained-Series-Summary-Haru-Nagi-Yoko-Souichi.jpg',
            'category' => 'web',
            'project_date' => '2023-10-01',
            'link' => 'https://example.com/portfolio',
            'client' => 'Self-Employed'
        ]);

        Portofolio::create([
            'title' => 'Aplikasi Mobile UI',
            'description' => 'Desain UI aplikasi kesehatan menggunakan Figma.',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPvG1WHiL4p44ms5N7j8cbJyzd763Hk6Yr8w&s',
            'category' => 'design',
            'project_date' => '2023-09-15',
            'link' => 'https://example.com/app-ui',
            'client' => 'Self-Employed'
        ]);
    }
}
