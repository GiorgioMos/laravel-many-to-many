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
                'name' => 'cronaca',
                'description' => 'articoli riguardanti cronaca',
                'category_id' => 1,
            ],
            [
                'name' => 'tecnologia',
                'description' => 'le piu recenti novita in ambito tech',
                'category_id' => 2,

            ],
            [
                'name' => 'sport',
                'description' => 'tutte le notizie sui piu famosi atleti del mondo',
                'category_id' => 3,
            ],
        ];
        foreach ($types as $type) {
            $newType = new Type();
            $newType->fill($type);
            $newType->save();
        }
    }
}
