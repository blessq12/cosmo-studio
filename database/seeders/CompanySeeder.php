<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            [
                'name' => 'cosmo',
                'nameAdd' => 'by Kukchenko',
                'description' => 'Какое то описание будет тут',
                'email' => 'cosmostudio@gmail.com',
                'vkLink' => 'https://vk.com/club211506899',
                'acc2gis' => 'https://2gis.ru/tomsk/geo/70000001065415248',
                'accYandex' => 'https://yandex.ru/navi/org/187831879312'
            ]
        ]);
    }
}
