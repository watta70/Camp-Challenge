<?php

//１．2016年1月1日 0時0分0秒のタイムスタンプを作成し、表示してください。
// $stamp = mktime(0, 0, 0, 1, 1, 2016);
// echo $stamp;

//２．現在の日時を「年-月-日 時:分:秒」で表示してください。
// $today = date ('Y年m月d日　H時:i分:s秒');
// echo $today;

//３．2016年11月4日 10時0分0秒のタイムスタンプを作成し、「年-月-日 時:分:秒」で表示してください。
// $stamp = mktime(10, 0, 0, 11, 4, 2016);
// $time = date('Y年m月d日　H時:i分:s秒',$stamp);
// echo $time;

//４．2015年1月1日 0時0分0秒と2015年12月31日 23時59分59秒の差（総秒）を表示してください。
// $day = strtotime("2015-1-1 0:0:0");
// $day2 = strtotime("2015-12-31 23:59:59");
// echo $day - $day2;

//５．自分の氏名について、バイト数と文字数を取得して、表示してください。
// echo strlen('渡部真央哉').'バイト';
// echo "<br>";
// echo mb_strlen('渡部真央哉').'文字';

//６．自分のメールアドレスの「@」以降の文字を取得して、表示してください。
//echo strstr('watta700@gmail.com', '@');

//７．以下の文章の「I」⇒「い」に、「U」⇒「う」に入れ替える処理を作成し、結果を表示してください。
//  「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」

 // $subject ='きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます';
 // $mae = array('I','U');
 // $ato = array('い','う');
 //
 // $output = str_replace($mae, $ato, $subject);
 // echo $output;


 //８.ファイルに自己紹介を書き出し、保存してください。
// $a=fopen('AAA.txt', 'a');
// fwrite($a, 'im from Tokyo');
// fclose($a);




 //９.ファイルから自己紹介を読み出し、表示してください。



 $file_txt = file_get_contents('AAA.txt');
 echo $file_txt;






























 ?>
