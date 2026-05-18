<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'judul'=>'Sistem Pemesanan Baju/Pakaian',
            'deskripsi'=>'Sistem ini digunakan untuk berjualan secara online agar bisa mencakup banyak pelanggan.',
            'analisis'=>'Makin banyak brand-brand yang memilih tidak melanjutkan jualan di e-commerce, karena di platform e-commerce besar memiliki kebijakan yang membuat brand merugi.',
            'kebutuhan_sistem'=>'Pada sistem ini akan ada fitur seperti melihat katalog, seleksi kategori, manajemen produk, manajemen stok, dan masih banyak lagi.',
            'tech_stack'=>'Laravel, MariaDB, Docker, Navicat'
        ]);
        
    }
}
