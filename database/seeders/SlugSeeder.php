<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $slugCategories = [
        ['uri' => 'nails', 'name' => 'Маникюр', 'id' => 1],
        ['uri' => 'foot-nails', 'name' => 'Педикюр', 'id' => 2],
        ['uri' => 'box', 'name' => 'Бокс в 4 - 6 рук (1 - 2 часа занятости)', 'id' => 3],
        ['uri' => 'hairs', 'name' => 'Парикмахерская', 'id' => 4],
        ['uri' => 'brow-n-lashes', 'name' => 'Оформление бровей и ресниц', 'id' => 5],
        ['uri' => 'makeup', 'name' => 'Макияж, прически', 'id' => 6],
    ];
    public function run(): void
    {
        DB::table('slugs')->insert([
            // nails
            ['slug_category_id' => $this->slugCategories[0]['id'], 'name' => 'Маникюр с покрытием гель-лак', 'lPrice' => '1400', 'hPrice' => '1800'],
            ['slug_category_id' => $this->slugCategories[0]['id'], 'name' => 'Маникюр гель-лак с дизайном (френч / стемпинг)', 'lPrice' => '1700', 'hPrice' => '2100'],
            ['slug_category_id' => $this->slugCategories[0]['id'], 'name' => 'Премиальное покрытие ONIQ', 'lPrice' => '200', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[0]['id'], 'name' => 'Укрепление', 'lPrice' => '300', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[0]['id'], 'name' => 'Восстановление архитектуры / поднятие клюющих ногтей', 'lPrice' => '100', 'hPrice' => '300'],
            ['slug_category_id' => $this->slugCategories[0]['id'], 'name' => 'Гигиенический маникюр', 'lPrice' => '800', 'hPrice' => '1200'],
            ['slug_category_id' => $this->slugCategories[0]['id'], 'name' => 'Гигиенический маникюр с покрытием обычным лаком IQ', 'lPrice' => '900', 'hPrice' => '1300'],
            // foot
            ['slug_category_id' => $this->slugCategories[1]['id'], 'name' => 'Педикюр "пальчики" с покрытие гель-лак', 'lPrice' => '1400', 'hPrice' => '1800'],
            ['slug_category_id' => $this->slugCategories[1]['id'], 'name' => 'Smart-педикюр обработка стопы и пальчиков с покрытием гель-лак', 'lPrice' => '1800', 'hPrice' => '2200'],
            ['slug_category_id' => $this->slugCategories[1]['id'], 'name' => 'Smart-педикюр обработка стопы и пальчиков без покрытия', 'lPrice' => '1400', 'hPrice' => '1600'],
            // box
            ['slug_category_id' => $this->slugCategories[2]['id'], 'name' => 'Маникюр и Smart-педикюр с покрытием гель-лак', 'lPrice' => '', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[2]['id'], 'name' => 'Маникюр и педикюр пальчики с покрытием гель-лак', 'lPrice' => '', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[2]['id'], 'name' => 'Маникюр и Smart-педикюр с покрытием гель-лак, коррекция и окрашивание бровей', 'lPrice' => '', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[2]['id'], 'name' => 'Маникюр и Smart-педикюр с покрытием гель-лак, коррекция и окрашивание бровей, ламинирование ресниц', 'lPrice' => '', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[2]['id'], 'name' => 'Маникюр и Smart-педикюр с покрытием гель-лак, коррекция и окрашивание бровей, ламинирование ресниц', 'lPrice' => '', 'hPrice' => ''],
            // hairs
            ['slug_category_id' => $this->slugCategories[3]['id'], 'name' => 'Стрижки', 'lPrice' => '1000', 'hPrice' => '1400'],
            ['slug_category_id' => $this->slugCategories[3]['id'], 'name' => 'Окрашивание / тонирование', 'lPrice' => '', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[3]['id'], 'name' => 'Сложные техники', 'lPrice' => '4000', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[3]['id'], 'name' => 'Контуринг', 'lPrice' => '3500', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[3]['id'], 'name' => 'Мелирование', 'lPrice' => '4000', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[3]['id'], 'name' => 'Выход из черного', 'lPrice' => '8000', 'hPrice' => ''],
            // brow-n-lashes
            ['slug_category_id' => $this->slugCategories[4]['id'], 'name' => 'Коррекция и окрашивание', 'lPrice' => '1300', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[4]['id'], 'name' => 'Долговременная укладка бровей (Ламинирование)', 'lPrice' => '1200', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[4]['id'], 'name' => 'Сет Коррекция и окрашивание и ламинирование', 'lPrice' => '2100', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[4]['id'], 'name' => 'Ботокс для бровей / Счастье для ресниц', 'lPrice' => '500', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[4]['id'], 'name' => 'Ламинирование ресниц', 'lPrice' => '1800', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[4]['id'], 'name' => 'Окрашивание ресниц', 'lPrice' => '500', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[4]['id'], 'name' => 'Снятие нарощенных ресниц', 'lPrice' => '300', 'hPrice' => ''],
            // makeup
            ['slug_category_id' => $this->slugCategories[5]['id'], 'name' => 'Макияж', 'lPrice' => '2200', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[5]['id'], 'name' => 'Локоны', 'lPrice' => '1700', 'hPrice' => ''],
            ['slug_category_id' => $this->slugCategories[5]['id'], 'name' => 'Собранная прическа', 'lPrice' => '2200', 'hPrice' => ''],
        ]);
    }
}
