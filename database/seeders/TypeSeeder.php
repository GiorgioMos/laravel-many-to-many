<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'title' => 'cronaca',
                'description' => 'articoli riguardanti cronaca',
                'category_id' => 3,
            ],
            [
                'title' => 'tecnologia',
                'description' => 'le piu recenti novita in ambito tech',
            ],
            [
                'title' => 'sport',
                'description' => 'tutte le notizie sui piu famosi atleti del mondo',
            ],
        ];
        foreach ($types as $type) {
            $newType = new Type();
            $newType->fill($type);
            $newType->save();
        }
    }
}
