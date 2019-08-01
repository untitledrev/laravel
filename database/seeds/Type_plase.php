<?php

use Illuminate\Database\Seeder;

class Type_plase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('types')->insert([
            'id' => '1',
            'name' => 'Москва'
        ]);

        DB::table('types')->insert([
            'id' => '2',
            'name' => 'Питер'
        ]);

        DB::table('types')->insert([
            'id' => '3',
            'name' => 'НьюЕрк'
        ]);


        DB::table('types')->insert([
            'id' => '4',
            'name' => 'Лондон'
        ]);


        DB::table('types')->insert([
            'id' => '5',
            'name' => 'Море'
        ]);

    }
}
