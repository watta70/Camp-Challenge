<?php 
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
session_start();
//ユーザー関数:直リンク防止
hidden();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>変更入力画面</title>
</head>
<body>
    <form action="<?php echo UPDATE_RESULT ?>" method="POST">
        <input type="hidden" name="hidden" value="hidden">
        <?php
        $result = profile_detail($_POST['id']);
        $_SESSION['data2']=$result;
        ?>
        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">

        名前:
        <input type="text" name="name" value="<?php echo $result[0]['name']; ?>">
        <br><br>

        生年月日:　
        <?php 
        //組み込み関数:受けとった誕生日の値を分割
        $birthday = explode("-",$result[0]['birthday']);
        ?>
        <select name="year">
        <option value="<?php echo $birthday[0];?>"><?php echo $birthday[0]; ?></option>
        <?php
        for($i=1950; $i<=2010; $i++){ 
            if($i==$birthday[0]){
                continue;}?>
        <option value="<?php echo $i;?>" ><?php echo $i ;?></option>
        <?php } ?>
        </select>年
        <select name="month">
        <option value="<?php echo $birthday[1];?>"><?php echo $birthday[1];?></option>
        <?php
        for($i = 1; $i<=12; $i++){
            if($i==$birthday[1]){
                continue;}?>
        <option value="<?php echo str_pad($i,2,"0",STR_PAD_LEFT);?>" ><?php echo str_pad($i,2,"0",STR_PAD_LEFT);?></option>
        <?php } ;?>
        </select>月
        <select name="day">
        <option value="<?php echo $birthday[2];?>"><?php echo $birthday[2];?></option>
        <?php
        for($i = 1; $i<=31; $i++){ 
            if($i==$birthday[2]){
                continue;}?>
        <option value="<?php echo str_pad($i,2,"0",STR_PAD_LEFT); ?>"><?php echo str_pad($i,2,"0",STR_PAD_LEFT)?></option>
        <?php } ?>
        </select>日
        <br><br>

        種別:
        <br>
        <?php
        for($i = 1; $i<=3; $i++){ ?>
        <input type="radio" name="type" value="<?php echo $i; ?>"<?php if($i==$result[0]['type']){echo "checked";}?>><?php echo ex_typenum($i);?><br>
        <?php } ?>
        <br>

        電話番号:
        <input type="text" name="tell" value="<?php echo $result[0]['tell']; ?>">
        <br><br>

        自己紹介文
        <br>
        <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php echo $result[0]['comment']; ?></textarea><br><br>

        <input type="hidden" name="mode"  value="RESULT">
        <input type="submit" name="btnSubmit" value="以上の内容で更新を行う">
    </form>
    <form action="<?php echo RESULT_DETAIL; ?>" method="POST">
        <input type="submit" name="NO" value="詳細画面に戻る"style="width:100px">
        <input type="hidden" name="hidden" value="hidden">

    </form>
    <?php echo return_top(); ?>

</body>

</html>
