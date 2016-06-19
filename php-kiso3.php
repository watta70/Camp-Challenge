<?php

//課題１　自分のプロフィール(名前、生年月日、自己紹介)を3行に分けて表示するユーザー定義関数を作り、関数を10回呼び出して下さい
/*function my_profile(){
	echo "私の名前は渡部です<br>";
	echo "１９８９年９月１２日生まれです<br>";
	echo "趣味は読書、スノボー、旅行などです。<br><br>";
}
for($i=0;$i<10;$i++){
  my_profile();
}
*/

//課題２保留　引数として数値を受け取り、その値が奇数か偶数か判別＆表示する処理を関数として制作し、適当な数値に対して奇数・偶数の判別を行ってください

/*
function kansu($suchi){
  if($suchi % 2 == 0){echo "この数値は偶数です";
  }else{echo "この数値は奇数です";
  }
}
kansu(2);
*/

/* 課題３　引き数が3つの関数を定義する。1つ目は適当な数値を、2つ目はデフォルト値が5の数値を、最後はデフォルト値がfalse(bool値)の
$typeを引き数として定義する。1つ目の引き数に2つ目の引き数を掛ける計算をする関数を作成し、$typeがfalseの時はその値を表示、trueのときは
さらに2乗して表示する。
　例）function sample($□□□, $△△△, $type) // 引数が３つの関数書き出し部分(デフォルト値なし) */
/* function teigi_a($nana,$go = 5,$type = false){
   if($type == false){
    echo $nana * $go;
  } else{if($type == true){
    echo ($nana * $go) * ($nana * $go);
  }}}
  $ddd = 7;
  teigi_a($ddd);
*/

/*  function show_usrdata($id,$name,$admin = false){
  	if($admin===true){
  		echo "$id $name あなたは管理者です";
  }else{
  echo "$id $name あなたは一般会員です";
  }
  }
  $myid = 20;$hisid=1;
  show_usrdata($myid, "林");//一般会員
  show_usrdata($hisid, "添田", true);//管理者*/

/*課題4:保留　課題1で定義した関数に追記する形として、戻り値　true(bool値)　を返却するように修正し、関数の
呼び出し側でtrueを受け取れたら「この処理は正しく実行できました」、そうでないなら「正しく実行できませんでした」と表示する */
/*
function my_profile(){
	"私の名前は渡部です<br>";
	"１９８９年９月１２日生まれです<br>";
	"趣味は読書、スノボー、旅行などです。<br><br>";
  return true;

}
if(my_profile() == true){
  echo "この処理は正しく実行できました";
}else{echo "正しく実行できませんでした";
}
*/

//課題5:保留　戻り値としてある人物のid(数値),名前,生年月日、住所を返却し、受け取った後は全情報を表示する
// function i_d(){
//     $suuchi = 555;
//     $namae = 'moaya';
//     $seinenn = 19890912;
//     $jyusyo = 'ootaku';
//     return array ($suuchi,$namae,$seinenn,$jyusyo);
//
// }
// $jyoho = i_d();
// foreach($jyoho as $value){
// echo $value;
// }



/*課題6:名前による検索プログラムを実装する。3人分のプロフィール(項目は課題5参照)をあらかじめ定義しておく。
引き数にそれらのプロフィールと文字列をとり、戻り値は1人分のプロフィール情報を返却する。
引き数の文字が名前に含まれる(部分一致)プロフィール情報(複数名合致する場合は最初のプロフィールとする)を戻り値として返却する。
それ以降などは課題5と同じ扱いに */







/* 課題7:引き数、戻り値はなしの関数を用意。初期値3のglobal値を2倍していく、ローカルな値はstaticとして
その関数が何回実行されたのかを保持していくような関数である。この関数を20回呼び出す */
//
// $g_number=3;
// function check_scope(){
//
//    global $g_number;
//     echo $g_number = $g_number * 2;
//     echo "<br>";
//   static $l_number=0;
//    $l_number = $l_number + 1;
//     echo $l_number .'回目';
//     echo "<br>";
//
//     }
//
//     for($i=0; $i<20; $i++) {
//            echo check_scope();
// }

//課題8:課題1、課題2のユーザー定義箇所を含んだutil.phpを作成し、requireで呼び出して表示する

// require "util.php";
// kansu(2);
// echo "<br>";
// my_profile();

//課題9:3人分のプロフィールについてIDと住所以外（名前,生年月日）を表示する処理を実行する。2重のforeachとcontinueを必ず用いること

// $arr = array(1 =>'maoya',
//              2 =>'生年月日:19890912',
//              3 =>'ID:01',
//
//              );
// $arr2 = array(1 =>'yuto',
//               2 =>'生年月日:19890101',
//               3 =>'ID:02'
//              );
// $arr3 = array(1 =>'kaneko',
//               2 =>'生年月日:19890401',
//               3 =>'ID:03'
//              );
//
// $arr4 = array($arr,$arr2,$arr3);
//
//
//     foreach($arr4 as $value) {
//       foreach($value as $y => $value2)
//          if($y == 3){
//            continue;
//            }
//          elseif($y < 3)
//            {echo $value2 ;
//            echo "<br>";}
//
//
//
//
//
//      };
//
//



 ?>
