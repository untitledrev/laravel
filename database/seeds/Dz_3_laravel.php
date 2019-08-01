<?php

use Illuminate\Database\Seeder;

class Dz_3_laravel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tasks')->insert([
            'id' => '1',
            'name' => 'Получение письма',
            'counter' => '0'
        ]);
        DB::table('tasks')->insert([
            'id' => '2',
            'name' => 'Отправка письма',
            'counter' => '0'
        ]);
        DB::table('tasks')->insert([
            'id' => '3',
            'name' => 'Получение посылки',
            'counter' => '0'
        ]);
        DB::table('tasks')->insert([
            'id' => '4',
            'name' => 'Отправка посылки',
            'counter' => '0'
        ]);


    }
}
