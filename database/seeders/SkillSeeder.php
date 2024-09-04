<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch categories by name for better clarity and avoid hardcoding IDs
        $programmingId = SkillCategory::where('name', 'Programming')->first()->id;
        $databaseId = SkillCategory::where('name', 'Database')->first()->id;
        $designId = SkillCategory::where('name', 'Design')->first()->id;
        $devopsId = SkillCategory::where('name', 'DevOps')->first()->id;

        // Programming skills
        Skill::create(['name' => 'PHP Development', 'skill_category_id' => $programmingId]);
        Skill::create(['name' => 'JavaScript Development', 'skill_category_id' => $programmingId]);

        // Database skills
        Skill::create(['name' => 'Database Management', 'skill_category_id' => $databaseId]);
        Skill::create(['name' => 'SQL Optimization', 'skill_category_id' => $databaseId]);

        // System Administration skills
        Skill::create(['name' => 'Linux System Administration', 'skill_category_id' => $programmingId]);

        // Design skills
        Skill::create(['name' => 'Graphic Design', 'skill_category_id' => $designId]);
        Skill::create(['name' => 'UX/UI Design', 'skill_category_id' => $designId]);

        // DevOps skills
        Skill::create(['name' => 'Continuous Integration', 'skill_category_id' => $devopsId]);
        Skill::create(['name' => 'Kubernetes Management', 'skill_category_id' => $devopsId]);
    }
}
