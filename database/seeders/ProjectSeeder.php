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
        $projects = [
            [
                'title' => 'progetto 1',
                'description' => 'descrizione lunga',
                'thumb' => 'url img',
                'creation_date' => '22-01-24',
                'category_id' => 3,
            ],
            [
                'title' => 'progetto 2',
                'description' => 'descrizione lunga',
                'thumb' => 'url img',
                'creation_date' => '22-01-24',
            ],
            [
                'title' => 'progetto 3',
                'description' => 'descrizione lunga',
                'thumb' => 'url img',
                'creation_date' => '22-01-24',
            ],
        ];
        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->fill($project);
            $newProject->save();
        }
    }
}
