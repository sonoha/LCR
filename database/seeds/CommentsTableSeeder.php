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
                'content'   => '別の変数に入れてから渡してはどうでしょうか？',
                'snippet'   => '@php
  $action = \'detail/\'.$posts->post_id;
@endphp

@include(\'post\', [\'action\' => $action])',
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
            [
                'user_id'   => 2,
                'content'   => 'Python ではクラスに __lt__ という名前のメソッドを定義することで、クラスのインスタンス同士を不等号 < 等で比較できるようになります。
              メソッド __lt__ には 2 つの引数が渡されることになりますが、一方が自分で、他方が比較される相手です。
              今回の __lt__ にも 2 つの引数 self と c2 があり、どちらも Card クラスのインスタンスであることが期待されています。
              第一引数の self は自分自身であり、第二引数の c2 は比較相手です。
              ですから c2.value や c2.suit というのは、比較相手の番号やスートのことを指しています。
              試しに Card クラスのインスタンスを作って比較してみると分かりやすいです。
              より詳しくは、Python 3 の公式ドキュメントにおける object.__lt__(self, other) の説明が参考になります。',
                'snippet'   => '>>> c1 = Card(4, 1)
>>> c2 = Card(5, 2)
>>> c1 < c2
True',
                'post_id'   => 7,
                'commented_at' => '2019-11-22 23:05:28',
            ],
            [
                'user_id'   => 1,
                'content'   => 'この場合は下記のように関数を返す関数に引数として渡す事で望む動作が可能です。
                理屈ではわかっても、普通の書き方に慣れているとつい油断してしまいます。',
                'snippet'   => 'for (var i = 0; i < 10; i++) {
    $(\'#elem\' + i).click((function(i) {
        return function() {
            alert(i);
        }
    })(i));
}',
                'post_id'   => 8,
                'commented_at' => '2019-11-23 10:50:26',
            ],
            [
              'user_id'   => 2,
              'content'   => '引数を使わず以下の様にbindする事もできます。',
              'snippet'   => 'ffor (var i = 0; i < 10; i++) {
    $(\'#elem\' + i).click((function() {
        var x=i;
        return function() {
            alert(x);
        }
    })());
}',
              'post_id'   => 8,
              'commented_at' => '2019-11-23 12:34:17',
            ],
        ]);
    }
}
