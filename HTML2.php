<?php


if(isset($_POST['name'])){
	$name= $_POST['name'];
}

setcookie('name',$name);

if(isset($_POST['syumi'])){
	$syumi= $_POST['syumi'];
}
setcookie('syumi',$syumi);

if(isset($_POST['seibetu'])){
	$seibetu= $_POST['seibetu'];
}
setcookie('seibetu',$seibetu);
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
<form action="HTML.php" method="post" accept-charset="utf-8">
<input type="submit" value = "戻る">

</form>
	
</body>
</html>

