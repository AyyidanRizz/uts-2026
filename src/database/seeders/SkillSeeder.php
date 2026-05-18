<?php

namespace Database\Seeders;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $frontendSkills = [
            'Desain',
            'Figma',
            'UI/UX HTML, CSS, JS'
        ];

        foreach ($frontendSkills as $skill) {
            Skill::create([
                'nama' => $skill,
                'kategori' => 'frontend'
            ]);
        }

        $backendSkills = [
            'Database (PostgreSQL)'
        ];

        foreach ($backendSkills as $skill) {
            Skill::create([
                'nama' => $skill,
                'kategori' => 'backend'
            ]);
        }
    }
}
