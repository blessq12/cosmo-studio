<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('work_hours')->insert([
            //studio lenina [id=1]
            [ 'studio_id' => 1, 'dayOfWeek' => 'пн', 'dayOfWeekFull' => 'понедельник', 'open' => '10:00', 'close' => '21:00', 'dayOff' => false],
            [ 'studio_id' => 1, 'dayOfWeek' => 'вт', 'dayOfWeekFull' => 'вторник', 'open' => '10:00', 'close' => '', 'dayOff' => false],
            [ 'studio_id' => 1, 'dayOfWeek' => 'ср', 'dayOfWeekFull' => 'среда', 'open' => '10:00', 'close' => '', 'dayOff' => false],
            [ 'studio_id' => 1, 'dayOfWeek' => 'чт', 'dayOfWeekFull' => 'четверг', 'open' => '10:00', 'close' => '', 'dayOff' => false],
            [ 'studio_id' => 1, 'dayOfWeek' => 'пт', 'dayOfWeekFull' => 'пятница', 'open' => '10:00', 'close' => '', 'dayOff' => false],
            [ 'studio_id' => 1, 'dayOfWeek' => 'сб', 'dayOfWeekFull' => 'суббота', 'open' => '10:00', 'close' => '', 'dayOff' => false],
            [ 'studio_id' => 1, 'dayOfWeek' => 'вс', 'dayOfWeekFull' => 'воскресенье', 'open' => '10:00', 'close' => '', 'dayOff' => false],
            //studio leto [id=2]
            [ 'studio_id' => 2, 'dayOfWeek' => 'пн', 'dayOfWeekFull' => 'понедельник', 'open' => '10:00', 'close' => '22:00', 'dayOff' => false],
            [ 'studio_id' => 2, 'dayOfWeek' => 'вт', 'dayOfWeekFull' => 'вторник', 'open' => '10:00', 'close' => '22:00', 'dayOff' => false],
            [ 'studio_id' => 2, 'dayOfWeek' => 'ср', 'dayOfWeekFull' => 'среда', 'open' => '10:00', 'close' => '22:00', 'dayOff' => false],
            [ 'studio_id' => 2, 'dayOfWeek' => 'чт', 'dayOfWeekFull' => 'четверг', 'open' => '10:00', 'close' => '22:00', 'dayOff' => false],
            [ 'studio_id' => 2, 'dayOfWeek' => 'пт', 'dayOfWeekFull' => 'пятница', 'open' => '10:00', 'close' => '22:00', 'dayOff' => false],
            [ 'studio_id' => 2, 'dayOfWeek' => 'сб', 'dayOfWeekFull' => 'суббота', 'open' => '10:00', 'close' => '22:00', 'dayOff' => false],
            [ 'studio_id' => 2, 'dayOfWeek' => 'вс', 'dayOfWeekFull' => 'воскресенье', 'open' => '10:00', 'close' => '22:00', 'dayOff' => false],
        ]);
    }
}
