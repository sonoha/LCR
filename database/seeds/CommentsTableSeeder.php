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
                'commented_at' => '2019-07-02 17:50:33',
            ],
            [
                'user_id'   => 2,
                'content'   => 'オプション忘れないで！',
                'snippet'   => '--no-preserve-root',
                'post_id'   => 4,
                'commented_at' => '2019-10-02 17:50:33',
            ],
            [
              'user_id'   => 2,
              'content'   => '別の変数に入れてから渡してはどうか？',
              'snippet'   => '@php
                                $hogehoge = \'detail/\'.$posts->post_id;
                              @endphp
                              @include(\'post\', [\'action\' => $hogehoge])',
              'post_id'   => 5,
              'commented_at' => '2019-11-22 16:02:53',
            ],
            [
              'user_id'   => 2,
              'content'   => '文字列の比較には==ではなく、equals()を使います。
                              == は、同じオブジェクトであるかどうかを判定するときに使います。
                              一方、equals() は、同じ値であるかどうかを判定するときに使います。
                              equals() の場合は、違うオブジェクトの比較であっても、保持している値が同じ場合はtrueを返します。',
              'snippet'   => 'if(c.equals("?")) break;',
              'post_id'   => 6,
              'commented_at' => '2019-11-22 16:02:53',
            ],
        ]);
    }
}
