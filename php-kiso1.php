<?php
//課題基礎編
//1
echo "hello world<br/>";

//2
echo "groove-gear<br><br>";

//3
echo "初めまして、渡部です。<br>";
echo "今はプログラミングの勉強をしています。<br>";
echo "趣味は読書、スノボー、フットサル、料理などです。<br><br>";

//4,5
const X = "5";
$hensu = "10";
echo ++$hensu + 4 / X;
echo"<br/><br/>";

//6
$piko = "a";
if ($piko == 1){echo '1です！';
}else{if($piko == 2){echo 'プログラミングキャンプ！';
}
else{if($piko == 'a'){echo '文字です！';
}
else{echo 'その他です！';
}}}

echo"<br/><br/>";


//7

//➀
echo "雑貨<br>";
echo "生鮮食品<br>";
echo "その他<br><br>";


//➁
$param1 = $_GET['param1'];//個数
$param2 = $_GET['param2'];//総額
$param3 = $_GET['param3'];//商品種別
echo "$param3";
echo "<br>一個";
echo $param2 / $param1;
echo '円';
echo "<br>合計";
echo "$param2";
echo '円';
echo "<br><br>";


//➂

if($param2>=3000){echo $param2 * 0.04;
}else{if ($param2>=5000){echo $param2 * 0.05;
}else{echo "0";
}}echo 'ポイント';
 ?>
