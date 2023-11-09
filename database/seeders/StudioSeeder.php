<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('studios')->insert([
            [
                'company_id' => 1,
                'uri' => 'lenina',
                'phone' => '+7 913 108-62-98',
                'address' => 'пр-т. Ленина, 166',
                'navYandex' => 'https://yandex.ru/maps/67/tomsk/?ll=84.948098%2C56.504705&mode=routes&rtext=~56.504705%2C84.948098&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NzYzMDg5NhI80KDQvtGB0YHQuNGPLCDQotC-0LzRgdC6LCDQv9GA0L7RgdC_0LXQutGCINCb0LXQvdC40L3QsCwgMTY2IgoNbeWpQhXSBGJC&z=16.71'
            ],
            [
                'company_id' => 1,
                'uri' => 'leto',
                'phone' => '+7 913 106-12-66',
                'address' => 'ул. Нахимова, 8, стр. 13',
                'navYandex' => 'https://yandex.ru/maps/67/tomsk/?indoorLevel=1&ll=84.960422%2C56.456776&mode=routes&rtext=~56.456776%2C84.960423&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoyMjA4NzYzNzg1EjzQoNC-0YHRgdC40Y8sINCi0L7QvNGB0LosINGD0LvQuNGG0LAg0J3QsNGF0LjQvNC-0LLQsCwgONGBMTMiCg2966lCFb3TYUI%2C&z=16.71'
            ]
        ]);
    }
}
