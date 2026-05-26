<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile; // Import Model Profile kamu di sini

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::firstOrCreate([
            // Hero Section
            'hero_title' => 'Selamat datang di web portfolio Saya',
            'hero_description' => 'Pada web ini, Saya akan menjelaskan secara singkat tentang projek akhir yang akan saya buat!',

            // About Section
            'about_story' => 'Hi! Nama Saya Siti Ahsanu Nadiyya Rizal, biasa dipanggil Nadiyya. Saya merupakan mahasiswa
            IT semester 4, pada website portfolio ini saya akan memberi tau kalian skill apa saja yang saya kuasai,
            teman-teman bisa langsung cek dibawah ini ya:',

            'project_description'=> 'Dibawah ini adalah project yang saya kerjakan untuk project akhir mata kuliah Pemrograman Web',

            // Information Section
            'name' => 'Siti Ahsanu Nadiyya Rizal',
            'phone' => '0812-3456-7890', // Silakan ganti dengan nomor aslimu jika mau
            'github' => 'https://github.com/AyyidanRizz',
            'email' => 'siti.ahsanu.nadiyya.rizal@student.esaunggul.ac.id',

            // Stats Section
            'experience_years' => 2,
            'happy_customers' => 24,
            'projects_finished' => 10,
            'digital_awards' => 3,
        ]);
    }
}