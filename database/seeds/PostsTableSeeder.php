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
            [
                'user_id'   => 3,
                'content'   => 'laravelについて教えてください。
                bladeテンプレートで他のbladeテンプレートをincludeした時に変数が渡せません。
                controllerから取得した変数を文字列と結合して別のbladeテンプレートに渡したいのですが、どなたか教えてください。',
                'snippet'   => '@include(\'post\', [\'action\' => \'detail/{{$posts->post_id}}\'])',
                'posted_at' => '2019-09-02 17:50:33',
            ],
            [
                'user_id'   => 3,
                'content'   => 'Javaについて教えてください。
                +-?をString型のString cに代入して、if(c=="+")のように条件分岐させているのですが、うまくいきません。',
                'snippet'   => 'import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class test{
  public static void main(String[] args){
    BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));
    try{
      while(true){
        String str = reader.readLine();

        String[] str_Array = str.split(" ");
        int a = Integer.parseInt(str_Array[0]);
        int b = Integer.parseInt(str_Array[2]);
        String c = str_Array[1];
        System.out.println(a);
        System.out.println(b);
        System.out.println(c);

        if(c == "?") break;
        if(c == "+"){
          System.out.println(a+b);
        }else if(c == "-"){
          System.out.println(a-b);
        }else if(c == "/"){
          System.out.println(a/b);
        }else if(c == "*"){
          System.out.println(a*b);
        }
      }
      reader.close();
    }catch(IOException e){
      System.out.println("エラー:"+e);
    }
  }
}',
                'posted_at' => '2019-09-02 17:50:33',
            ],
            [
                'user_id'   => 4,
                'content'   => 'Python初心者です。
                以下は参考書「独学プログラマー（コーリ・アリソフ著）」に記載されているWarというカードゲームのプログラムの一部です。
                その部分でわからないところがあるので質問させていただきます。
                def __lt__(self. c2)の部分でc2.valueやc2.suitというところがありますが、何の値が入っている変数なのかよくわかりません。どなたかよろしくお願いします。',
                'snippet'   => 'class Card:
    suits = ["spades", "hearts", "diamonds", "clubs"]

    values = [None, None, "2", "3", "4", "5", "6", "7", "8", "9",
              "10", "Jack", "Queen", "King", "Ace"]

    def __init__(self, v, s):
        """スートも値も整数値です。"""
        self.value = v
        self.suit = s

    def __lt__(self, c2):
        if self.value < c2.value:
            return True

        if self.value == c2.value:
            if self.suit < c2.suit:
                return True
            else:
                return False

        return False',
                'posted_at' => '2019-11-22 20:53:46',
            ],
            [
                'user_id'   => 4,
                'content'   => 'Javascriptについて質問です。要素#elem0 .. #elem9に対してクリックイベントを設定し、それぞれの要素に対応した番号をalertで出したいと思っています。
                下記のコードだと、#elem0をクリックしたときには0、#elem1をクリックしたら1、といったようにです。
                しかし、下のコードだと常に10が表示され、上記のような挙動になりません。どうすればいいのでしょうか?',
                'snippet'   => 'for (var i = 0; i < 10; i++) {
    $(\'#elem\' + i).click(function() {
        alert(i);
    });
}',
                'posted_at' => '2019-11-22 23:30:12',
            ],
        ]);
    }
}
