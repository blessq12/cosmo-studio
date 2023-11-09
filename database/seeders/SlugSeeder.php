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
        'nailsTop' => 1,
        'nails' => 2,
        'barber' => 3,
        'color' => 4,
        'mans' => 5,
        'browsLashes' => 6,
        'hairExtension' => 7,

    ];
    public function run(): void
    {
        DB::table('slugs')->insert([
            // nails top
            ['slug_category_id' => $this->slugCategories['nailsTop'], 'name' => 'Маникюр с покрытием гель лак', 'price' => '1600', 'executeTime' => '1 час'],
            ['slug_category_id' => $this->slugCategories['nailsTop'], 'name' => 'Маникюр гигиенический (30 минут)', 'price' => '1100', 'executeTime' => '30 мин'],
            ['slug_category_id' => $this->slugCategories['nailsTop'], 'name' => 'Маникюр гигиенический с покрытием обычным лаком', 'price' => '1200', 'executeTime' => '1 час'],
            ['slug_category_id' => $this->slugCategories['nailsTop'], 'name' => 'Маникюр с укреплением + покрытие гель лак', 'price' => '1900', 'executeTime' => '1 час'],
            ['slug_category_id' => $this->slugCategories['nailsTop'], 'name' => 'Маникюр с покрытием френч и другим дизайном', 'price' => '1900', 'executeTime' => '1 час 20 мин'],
            ['slug_category_id' => $this->slugCategories['nailsTop'], 'name' => 'Наращивание ногтей', 'price' => 'от 2000', 'executeTime' => '1 час 30 мин'],
            ['slug_category_id' => $this->slugCategories['nailsTop'], 'name' => 'Педикюр "пальчики" с покрытием гель лак', 'price' => '1600', 'executeTime' => '45 мин'],
            ['slug_category_id' => $this->slugCategories['nailsTop'], 'name' => 'Педикюр обработка стопы БЕЗ покрытия (40 минут)', 'price' => '1600', 'executeTime' => '1 час'],
            ['slug_category_id' => $this->slugCategories['nailsTop'], 'name' => 'Педикюр с обработкой стопы и покрытием гель лак', 'price' => '2000', 'executeTime' => '1 час'],
            ['slug_category_id' => $this->slugCategories['nailsTop'], 'name' => 'Снятие нарощенных ногтей', 'price' => 'от 300', 'executeTime' => ' 20 мин'],
            // nail master
            ['slug_category_id' => $this->slugCategories['nails'], 'name' => 'Маникюр гигиенический', 'price' => '800', 'executeTime' => '1 час'],
            ['slug_category_id' => $this->slugCategories['nails'], 'name' => 'Маникюр с покрытием гель-лак', 'price' => '1300', 'executeTime' => '2 часа'],
            ['slug_category_id' => $this->slugCategories['nails'], 'name' => 'Маникюр с покрытием + укрепление', 'price' => '1600', 'executeTime' => '2 часа'],
            ['slug_category_id' => $this->slugCategories['nails'], 'name' => 'Педиикюр "пальчики" с покрытием (скидка 300 рублей)', 'price' => '1000', 'executeTime' => '2 часа'],
            ['slug_category_id' => $this->slugCategories['nails'], 'name' => 'Полный педикюр с покрытием гель-лак (скидка 300 рублей)', 'price' => '1300', 'executeTime' => '2 часа'],
            ['slug_category_id' => $this->slugCategories['nails'], 'name' => 'Наращивание ногтей', 'price' => 'от 1700', 'executeTime' => '2 часа 30 мин'],
            ['slug_category_id' => $this->slugCategories['nails'], 'name' => 'Снятие гель-лака', 'price' => '300', 'executeTime' => '30 мин'],
            // barber
            ['slug_category_id' => $this->slugCategories['barber'], 'name' => 'Абонемент на 5 уходовых процедур', 'price' => '5000', 'executeTime' => '1 час'],
            ['slug_category_id' => $this->slugCategories['barber'], 'name' => 'Стрижка длинные волосы', 'price' => '1400', 'executeTime' => '1 час 30 мин'],
            ['slug_category_id' => $this->slugCategories['barber'], 'name' => 'Стрижка короткие волосы', 'price' => '1400', 'executeTime' => '1 час'],
            ['slug_category_id' => $this->slugCategories['barber'], 'name' => 'Стрижка одним срезом', 'price' => '650', 'executeTime' => '45 мин'],
            ['slug_category_id' => $this->slugCategories['barber'], 'name' => 'Стрижка средние волосы или карэ', 'price' => '1200', 'executeTime' => '1 час 15 мин'],
            ['slug_category_id' => $this->slugCategories['barber'], 'name' => 'Уходовая процедура для волос', 'price' => '1500', 'executeTime' => '1 час'],
            ['slug_category_id' => $this->slugCategories['barber'], 'name' => 'Челка', 'price' => '350', 'executeTime' => '30 мин'],
            // color
            ['slug_category_id' => $this->slugCategories['color'], 'name' => 'Затемнение блонда/ выход в натуральный цвет', 'price' => 'от 4000', 'executeTime' => '2 час 30 мин'],
            ['slug_category_id' => $this->slugCategories['color'], 'name' => 'Консультация парикмахера', 'price' => '500', 'executeTime' => '30 мин'],
            ['slug_category_id' => $this->slugCategories['color'], 'name' => 'Мелирование', 'price' => 'от 2500', 'executeTime' => '2 часа'],
            ['slug_category_id' => $this->slugCategories['color'], 'name' => 'Окрашивание в один тон', 'price' => 'от 2500', 'executeTime' => '2 часа 30 мин'],
            ['slug_category_id' => $this->slugCategories['color'], 'name' => 'Окрашивание корней', 'price' => 'от 1500', 'executeTime' => '1 час 30 мин'],
            ['slug_category_id' => $this->slugCategories['color'], 'name' => 'Сложное окрашивание', 'price' => 'от 4000', 'executeTime' => '6 часов'],
            ['slug_category_id' => $this->slugCategories['color'], 'name' => 'Тонирование', 'price' => 'от 2500', 'executeTime' => '2 часа'],
            // mans
            ['slug_category_id' => $this->slugCategories['mans'], 'name' => 'Камуфляж волос и бороды', 'price' => '1700', 'executeTime' => '45 мин'],
            ['slug_category_id' => $this->slugCategories['mans'], 'name' => 'Камуфляж волос', 'price' => '1500', 'executeTime' => '30 мин'],
            ['slug_category_id' => $this->slugCategories['mans'], 'name' => 'Оформление бороды без опасного бритья', 'price' => '500', 'executeTime' => '30 мин'],
            ['slug_category_id' => $this->slugCategories['mans'], 'name' => 'Стрижка + оформление бороды без опасного бритья', 'price' => '1500', 'executeTime' => '1 час 30 мин'],
            ['slug_category_id' => $this->slugCategories['mans'], 'name' => 'Стрижка мужская', 'price' => '1200', 'executeTime' => '1 час 15 мин'],
            ['slug_category_id' => $this->slugCategories['mans'], 'name' => 'Мужская коррекция бровей', 'price' => '1000', 'executeTime' => '40 мин'],
            // browsLashes
            ['slug_category_id' => $this->slugCategories['browsLashes'], 'name' => 'Депиляция лицевых зон', 'price' => '300', 'executeTime' => '20 мин'],
            ['slug_category_id' => $this->slugCategories['browsLashes'], 'name' => 'Долговременная укладка бровей (Ламинирование)', 'price' => '1200', 'executeTime' => '1 час'],
            ['slug_category_id' => $this->slugCategories['browsLashes'], 'name' => 'Коррекция + долговременная укладка', 'price' => '1600', 'executeTime' => '1 час 20 мин'],
            ['slug_category_id' => $this->slugCategories['browsLashes'], 'name' => 'Коррекция формы бровей', 'price' => '700', 'executeTime' => '30 мин'],
            ['slug_category_id' => $this->slugCategories['browsLashes'], 'name' => 'Коррекция формы и окрашивание бровей', 'price' => '1300', 'executeTime' => '1 час'],
            ['slug_category_id' => $this->slugCategories['browsLashes'], 'name' => 'Окрашивание бровей', 'price' => '800', 'executeTime' => '30 мин'],
            ['slug_category_id' => $this->slugCategories['browsLashes'], 'name' => 'Окрашивание ресниц', 'price' => '500', 'executeTime' => '30 мин'],
            ['slug_category_id' => $this->slugCategories['browsLashes'], 'name' => 'Прореживание бровей', 'price' => '400', 'executeTime' => '30 мин'],
            ['slug_category_id' => $this->slugCategories['browsLashes'], 'name' => 'Сет "Коррекция + Окрашивание + Долговременная укладка бровей"', 'price' => '2100', 'executeTime' => '1 час 30 мин'],
            ['slug_category_id' => $this->slugCategories['browsLashes'], 'name' => 'Уход "Счастье длдя бровей"', 'price' => '700', 'executeTime' => '40 мин'],
            ['slug_category_id' => $this->slugCategories['browsLashes'], 'name' => 'Уход "Счастье длдя бровей"', 'price' => '700', 'executeTime' => '40 мин'],
            // hairExtension
            ['slug_category_id' => $this->slugCategories['hairExtension'], 'name' => 'Наращивание волос', 'price' => '8500', 'executeTime' => '5 часов'],
        ]);
    }
}
