<?php 
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
//ユーザー関数:直リンク防止
hidden();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>更新結果画面</title>
</head>
  <body>
    <?php
    if(isset($_POST['type'])){
    //受け取った値を変数に格納
    $name=$_POST['name'];
    $birthday=$_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
    $type=$_POST['type'];
    $tell=$_POST['tell'];
    $comment=$_POST['comment'];
    $id=$_POST['id'];
    //SQL文を実行
    $result = update_profile($name,$birthday,$type,$tell,$comment,$id);

    //エラーが発生しなければ表示を行う
    if(!isset($result)){?>
    <h1>更新確認</h1>
    以上の内容で更新しました。<br>
    <?php
    }else{
        echo 'データの更新に失敗しました。次記のエラーにより処理を中断します:'.$result;
    }}else{
        echo '種別を入力してください';
        echo "<br>";}
    echo return_top(); 
    ?>
  </body>
</html>
