<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Technologies = [
            [
                'name' => 'Artificial intelligence',
            ],
            [
                'name' => 'Computers',

            ],
            [
                'name' => 'Cell phones',
            ],
            [
                'name' => '3D printing',
            ],
            [
                'name' => 'Robotics',

            ],
            [
                'name' => 'Automation',
            ],
        ];
        foreach ($Technologies as $Technology) {
            $newTechnology = new Technology();
            $newTechnology->fill($Technology);
            $newTechnology->save();
        }
    }
}
