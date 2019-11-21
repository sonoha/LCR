<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->truncate();
        DB::table('comments')->insert([
            [
                'user_id'   => 1,
                'content'   => 'OMG!!',
                'snippet'   => null,
                'post_id'   => 4,
            ],
            [
                'user_id'   => 2,
                'content'   => 'オプション忘れないで！',
                'snippet'   => '--no-preserve-root',
                'post_id'   => 4,
            ],
        ]);
    }
}
