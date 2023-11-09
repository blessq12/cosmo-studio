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
            ['uri' => 'nails', 'name' => 'Маникюр/педикюр', 'masterCategory' => '!Топ-мастер'],
            ['uri' => 'nails2', 'name' => 'Маникюр/педикюр', 'masterCategory' => 'Мастер'],
            ['uri' => 'barber', 'name' => 'Стрижки', 'masterCategory' => null],
            ['uri' => 'color', 'name' => 'Окрашивания', 'masterCategory' => null],
            ['uri' => 'mans', 'name' => 'Мужской зал', 'masterCategory' => null],
            ['uri' => 'browsLashes', 'name' => 'Брови и ресницы', 'masterCategory' => null],
            ['uri' => 'hairExtension', 'name' => 'Наращивание волос', 'masterCategory' => null],
        ]);
    }
}
