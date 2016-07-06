<!-- ７．以下の機能を実装してください。

　　　名前・性別・趣味を入力するページを作成してください。
　　　また、入力された名前・性別・趣味を記憶し、次にアクセスした際に
　　　記録されたデータを初期値として表示してください。
　　　
　　　※PHPと同時に、HTMLの知識が必要になります。
　　　※入力フィールドの使い方を調べてみましょう。 -->
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<form action="HTML2.php" method="post" accept-charset="utf-8">
名前:<input type="text" name = "name" value = "<?php echo $_COOKIE['name']; ?>">
性別 男:<input type="radio" name = "seibetu" value = "男" <?php if($_COOKIE['seibetu'] == "男"){echo "checked";} ?>>
女:<input type="radio" name = "seibetu" value = "女"<?php if($_COOKIE['seibetu'] == "女"){echo "checked";} ?>>
趣味:<input type="text" name = "syumi" value = "<?php echo $_COOKIE['syumi']; ?>">
<input type="submit">
</form>
	
</body>
</html>
