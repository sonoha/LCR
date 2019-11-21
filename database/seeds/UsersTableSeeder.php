<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name'                => 'ando',
                'email'               => 'example.1@email.com',
                'password'            => bcrypt('pass'),
            ],
            [
                'name'                => 'iizuka',
                'email'               => 'example.2@email.com',
                'password'            => bcrypt('hogepiyo'),
            ],
            [
                'name'                => 'nakamura',
                'email'               => 'example.3@email.com',
                'password'            => bcrypt('secret'),
            ],
            [
                'name'                => 'hayashiguchi',
                'email'               => 'example.4@email.com',
                'password'            => bcrypt('himitsu'),
            ],
        ]);
    }
}
