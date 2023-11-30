<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlugCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('slug_categories')->insert([
            ['uri' => 'nails', 'name' => 'Маникюр'],
            ['uri' => 'foot-nails', 'name' => 'Педикюр'],
            ['uri' => 'box', 'name' => 'Бокс в 4 - 6 рук (1 - 2 часа занятости)'],
            ['uri' => 'hairs', 'name' => 'Парикмахерская'],
            ['uri' => 'brow-n-lashes', 'name' => 'Оформление бровей и ресниц'],
            ['uri' => 'makeup', 'name' => 'Макияж, прически'],
        ]);
    }
}
