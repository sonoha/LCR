<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id'   => 1,
                'content'   => 'Hello Light Code Review!!',
                'posted_at' => time(),
            ],
            [
                'user_id'   => 1,
                'content'   => 'This is Second Post!!',
                'snippet'   => 'This is a snippet!',
                'posted_at' => time(),
            ],
            [
                'user_id'   => 2,
                'content'   => '24時退勤はよくないと思います。',
                'posted_at' => time(),
            ],
            [
                'user_id'   => 3,
                'content'   => '神は言っている、ここで死ぬ運命ではないと。',
                'snippet'   => '$ sudo rm -rf /',
                'posted_at' => time(),
            ],
        ]);
    }
}
