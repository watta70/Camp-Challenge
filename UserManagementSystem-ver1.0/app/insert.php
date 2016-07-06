<?php require_once '../common/defineUtil.php'; ?>
<?php require_once '../common/scriptUtil.php'; 
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録画面</title>
</head>
<body>
    <form action="<?php echo INSERT_CONFIRM ?>" method="POST">
    名前:
    <input type="text" name="name" value="<?php 
        if(isset($_SESSION['name'])){
            echo $_SESSION['name'];
            } ?>">
    <br><br>
    生年月日:
    <select name="year">
        <option value="<?php //第一段階:4
            if(isset($_SESSION['year'])){
                echo $_SESSION['year'];
            }else{echo "----";
        } ?>"><?php 
            if(isset($_SESSION['year'])){
                echo $_SESSION['year'];
            }else{echo "----";
        }?></option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option value="<?php echo $i; ?>"><?php echo $i;?></option>
        <?php } ?>
    </select>年

    <select name="month">
        <option value="<?php 
            if(isset($_SESSION['month'])){
                echo $_SESSION['month'];
            }else{echo "--";
        } ?>"><?php 
            if(isset($_SESSION['month'])){
                echo $_SESSION['month'];
            }else{echo "--";
        }?></option>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php } ;?>
    </select>月

    <select name="day">
        <option value="<?php 
            if(isset($_SESSION['day'])){
                echo $_SESSION['day'];
            }else{echo "--";
        } ?>"><?php 
            if(isset($_SESSION['day'])){
                echo $_SESSION['day'];
            }else{echo "--";
        }?></option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option value="<?php echo $i; ?>"><?php echo $i;?></option>
        <?php } ?>
    </select>日
    <br><br>

    種別:
    <br>
    <input type="radio" name="type" value="エンジニア">エンジニア<br>
    <input type="radio" name="type" value="営業">営業<br>
    <input type="radio" name="type" value="その他">その他<br>
    <br>
    
    電話番号:
    <input type="text" name="tell" value="<?php if(isset($_SESSION['tell'])){
            echo $_SESSION['tell'];} ?>">
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard" value="<?php echo $_SESSION['comment']; ?>"> </textarea><br><br>
    
    <input type="submit" name="btnSubmit" value="確認画面へ"><br/><br/>
    
    </form>
    
    <?php 
    //第一段階:1
    echo return_top();?>
</body>
</html>
<?php

?>
