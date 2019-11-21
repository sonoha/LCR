<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'                => 'ando',
                'email'               => 'example.1@email.com',
                'email_verified_at'   => time(),
                'password'            => 'pass',
                'created_at'          => time(),
                'updated_at'          => time(),
            ],
            [
                'name'                => 'iizuka',
                'email'               => 'example.2@email.com',
                'email_verified_at'   => time(),
                'password'            => 'hoge',
                'created_at'          => time(),
                'updated_at'          => time(),
            ],
            [
                'name'                => 'nakamura',
                'email'               => 'example.3@email.com',
                'email_verified_at'   => time(),
                'password'            => 'secret',
                'created_at'          => time(),
                'updated_at'          => time(),
            ],
            [
                'name'                => 'hayashiguchi',
                'email'               => 'example.4@email.com',
                'email_verified_at'   => time(),
                'password'            => 'himitsu',
                'created_at'          => time(),
                'updated_at'          => time(),
            ],
        ]);
    }
}
