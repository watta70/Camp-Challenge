<?php
/*
１．身の回りにあるものをオブジェクティブ指向で抽象化してみましょう。自分が興味あるもので構いません。また、抽象化するレベルも問いません。

カレー
お客さん
コック
店
ライス
皿

2．1で作成したオブジェクト群からクラスにできそうなものを考えましょう。クラスにどういったデータを持たせるかが重要です。

人クラス
皿の中に入るものクラス

3．以下の機能を持つクラスを作成してください。
　　　・パブリックな２つの変数
　　　・２つの変数に値を設定するパブリックな関数
　　　・２つの変数の中身をechoするパブリックな関数*/
class Human {
    public $name = '';
    public $age = 0;
    public function set($n, $a) {
        global $name, $age;
    	$name = $n;
    	$age = $a;
    }
    public function show() {
        global $name, $age;
    	echo $name;
    	echo "<br>";
    	echo $age;
    }

}
$kakunou = new Human();
$kakunou->set('watabe','26');

$kakunou->show();
echo "<br>";

//4．保留　3のクラスを継承し、以下の機能を持つクラスを作成してください。
//　　　・２つの変数の中身をクリアするパブリックな関数


class Delete extends Human{
    public function Clear($syoukyo, $syoukyo2){
          $syoukyo = null;
          $syoukyo2 = null;
    }
}
$num = new Delete();
$num->Clear(1, 2);

var_dump($syoukyo);






















?>