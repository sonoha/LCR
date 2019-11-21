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
                'created_at'          => '2019-07-02 17:50:33',
            ],
            [
                'name'                => 'iizuka',
                'email'               => 'example.2@email.com',
                'password'            => bcrypt('hogepiyo'),
                'created_at'          => '2019-08-02 17:50:33',
            ],
            [
                'name'                => 'nakamura',
                'email'               => 'example.3@email.com',
                'password'            => bcrypt('secret'),
                'created_at'          => '2019-09-02 17:50:33',
            ],
            [
                'name'                => 'hayashiguchi',
                'email'               => 'example.4@email.com',
                'password'            => bcrypt('himitsu'),
                'created_at'          => '2019-10-02 17:50:33',
            ],
        ]);
    }
}
