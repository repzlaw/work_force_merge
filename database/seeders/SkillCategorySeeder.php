<?php

namespace Database\Seeders;

use App\Models\SkillCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        SkillCategory::create(['name' => 'Programming']);
        SkillCategory::create(['name' => 'Database']);
        SkillCategory::create(['name' => 'System Administration']);
        SkillCategory::create(['name' => 'Design']);
        SkillCategory::create(['name' => 'DevOps']);
    }
}
