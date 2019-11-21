<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        DB::table('posts')->insert([
            [
                'user_id'   => 1,
                'content'   => 'Hello Light Code Review!!',
                'snippet'   => null,
                'posted_at' => '2019-07-02 17:50:33',
            ],
            [
                'user_id'   => 1,
                'content'   => 'This is Second Post!!',
                'snippet'   => 'This is a snippet!',
                'posted_at' => '2019-08-02 17:50:33',
            ],
            [
                'user_id'   => 2,
                'content'   => '24時退勤はよくないと思います。',
                'snippet'   => null,
                'posted_at' => '2019-09-02 17:50:33',
            ],
            [
                'user_id'   => 3,
                'content'   => '神は言っている、ここで死ぬ運命ではないと。',
                'snippet'   => '$ sudo rm -rf /',
                'posted_at' => '2019-10-02 17:50:33',
            ],
        ]);
    }
}
