<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
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
                'content'   => 'OMG!!',
                'posted_at' => time(),
                'post_id'   => 4,
            ],
            [
                'user_id'   => 2,
                'content'   => 'オプション忘れないで！',
                'snippet'   => '--no-preserve-root',
                'posted_at' => time(),
                'post_id'   => 4,
            ],
        ]);
    }
}
