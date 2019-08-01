<?php

use Illuminate\Database\Seeder;


class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@hh.ru',
            'password' => bcrypt('admin')
        ]);
    }
}
