<?php 
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>ユーザー情報詳細画面</title>
</head>
  <body>
    <?php
        $name= isset($_SESSION['data2'][0]['name']) ? $_SESSION['data2'][0]['name'] : null;
        $birthday=isset($_SESSION['data2'][0]['birthday']) ? $_SESSION['data2'][0]['birthday'] : null;
        $type=isset($_SESSION['data2'][0]['type']) ? $_SESSION['data2'][0]['type'] : null;
        $tell=isset($_SESSION['data2'][0]['tell']) ? $_SESSION['data2'][0]['tell'] : null;
        $comment=isset($_SESSION['data2'][0]['comment']) ? $_SESSION['data2'][0]['comment'] : null;

        if(isset($_GET['id'])){
            $result = profile_detail($_GET['id']);
        }else{$result=$_SESSION['data2'];
        }

        //エラーが発生しなければ表示を行う
        if(is_array($result)){
        ?>
      
        <h1>詳細情報</h1>
        名前:<?php 
            if(isset($_POST['hidden'])){
                echo $name.'<br>';
            }else{echo $result[0]['name'];?><br>
           <?php }?>
        生年月日:<?php
            if(isset($_POST['hidden'])){
                echo $birthday.'<br>';
            }else{echo $result[0]['birthday'];?><br>
            <?php }?>
        種別:<?php
            if(isset($_POST['hidden'])){
                echo $type.'<br>';
            }else{echo ex_typenum($result[0]['type']);?><br>
            <?php }?>
        電話番号:<?php
            if(isset($_POST['hidden'])){
                echo $tell.'<br>';
            }else{echo $result[0]['tell'];?><br>
            <?php }?>
        自己紹介:<?php
            if(isset($_POST['hidden'])){
                echo $comment.'<br>';
            }else{echo $result[0]['comment'];?><br>
            <?php }?>
        <?php if(isset($_POST['hidden'])){
        登録日時:
            echo null;
        }else{echo date('Y年n月j日　G時i分s秒', strtotime($result[0]['newDate'])); ?><br>
        <?php }?>

        <form action="<?php echo UPDATE ?>" method="POST">
            <input type="hidden" name="hidden" value="hidden">
            <input type="submit" name="update" value="変更"style="width:100px">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        </form>
        <form action="<?php echo DELETE ?>" method="POST">
            <input type="hidden" name="hidden" value="hidden">
            <input type="submit" name="sakujyo" value="削除"style="width:100px">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        </form>
    
        <?php
        }else{
            echo 'データの検索に失敗しました。次記のエラーにより処理を中断します:'.$result;
        }
    echo return_top(); 
    ?>
  </body>
</html>
