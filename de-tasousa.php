<?php
/*１．以下の入力フィールドを持ったHTMLを、PHPで処理する想定で記述してください。
　　・名前（テキストボックス）、性別（ラジオボタン）、趣味（複数行テキストボックス） */
?>
<!-- <!DOCTYPE html>
<html>
  <head>
    <title>個人データ入力</title>
  </head>
  <body>
    <form action="de-tasousa2.php" method="post">
      名前:<input type="text" name="txtName">
      性別:男<input type="radio" name="txtsex">女<input type="radio" name="txtsex2">
      趣味:<textarea name="mulText"></textarea>
      <input type="submit" name="btnSubmit">

    </form>
  </body>
</html> -->

<?php
/* ３．クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。
 date_default_timezone_set('Asia/Tokyo');*/

/*$access_time = date('H時i分s秒');
    setcookie('LastLogintime', $access_time);


    $lasttime = $_COOKIE['LastLogintime'];

echo '前回のアクセス時刻は'.$lasttime.'です。';*/




//４．３と同じ機能をセッションで作成してください。

/*date_default_timezone_set('Asia/Tokyo');

session_start();
    $_SESSION['time'] = date('H時i分s秒');


    echo '前回のアクセス時刻は'.$_SESSION['time'].'です。';*/


//５．ファイルアップロード機能を作成してください。
//６．５で作成したプログラムに、ファイルの中身を読み込んで表示する機能を追加してください。
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title></title>
   <link rel="stylesheet" href="">
 </head>
 <body>
   <form enctype="multipart/form-data" action="de-tasousa.php" method="post" accept-charset="utf-8">
        ファイル選択:<input name="userfile" type="file" />
        <input type="submit" value = 'アップロード'>

   </form>
   <?php
   

   $file_name = 'wawawa.txt';
   if(is_uploaded_file($_FILES['userfile']['tmp_name'])){if(move_uploaded_file(
      $_FILES['userfile']['tmp_name'], $file_name)){
      echo $_FILES["userfile"]["name"] . "をアップロードしました。";
      echo "<br>";
      echo 'ファイルの内容: '.file_get_contents("$file_name");

     }else{echo '移動失敗';
   }}else{echo 'アップロードされていません。';
     }

     
  
?>


   
 </body>
 </html>










