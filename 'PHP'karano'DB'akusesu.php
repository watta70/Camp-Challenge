<?php

//課題1:Challenge_dbへのエラーハンドリングを含んだ接続の確立を行ってください

try{
	$pdo_object= new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','watta','0606');
}catch(PDOException $Exception){die('接続に失敗しました:'.$Exception->getMessage());
}


//課題2:前回の課題1で作成したテーブルに自由なメンバー情報を格納する処理を構築してください

// $sql = "INSERT INTO profiles(profilesID,name,age)
// VALUES ('5','佐藤　茂','77')";

// $query = $pdo_object->prepare($sql);
// $query -> execute();



//課題3:前回の課題1で作成したテーブルからSELECT*により全件取得し、画面に取得した全情報を表示してください

/*$sql = "select * from profiles";

$query = $pdo_object->prepare($sql);
$query -> execute();

$result = $query->fetchall(PDO::FETCH_ASSOC);

	      foreach($result as $result2){
             foreach($result2 as $result3){
             	echo $result3;
             	echo "<br>";
             }
	      }*/

//課題4:前回の課題1で作成したテーブルからprofileID=1の情報を取得し、画面に取得した情報を表示してください
/*$sql = "select * from profiles where profilesID=1";

$query = $pdo_object->prepare($sql);
$query -> execute();

$result = $query->fetchall(PDO::FETCH_ASSOC);

	      foreach($result as $result2){
             foreach($result2 as $result3){
             	echo $result3;
             	echo "<br>";
}
}*/
//課題5：nameに「茂」を含む情報を取得し、画面に取得した情報を表示してください
/*$sql = "select * from profiles where name like '%茂%'";
$query = $pdo_object->prepare($sql);
$query -> execute();

$result = $query->fetchall(PDO::FETCH_ASSOC);

	      foreach($result as $result2){
             foreach($result2 as $result3){
             	echo $result3;
             	echo "<br>";
             }
         }*/

//課題6:課題2でINSERTしたレコードを指定して削除してください。SELECT*で結果を表示してください
/*$sql = "delete from profiles where name='佐藤　茂'";
$query = $pdo_object->prepare($sql);
$query -> execute();

$sql = "select * from profiles";
$query = $pdo_object->prepare($sql);
$query -> execute();

$result = $query->fetchall(PDO::FETCH_ASSOC);
             foreach($result as $result2){
             	foreach($result2 as $result3){
             		echo $result3;
             		echo "<br>";
             	}
             }*/

//課題7:profileID=1のnameを「松岡 修造」に、ageを48に、birthdayを1967-11-06に更新してください

/*$sql = "update profiles SET name='松岡 修造',age=48,birthday='1967-11-06' where profilesID=1";

$query = $pdo_object->prepare($sql);
$query -> execute();*/

/*課題8:検索用のフォームを用意し、名前の部分一致で検索＆表示する処理を構築してください。
同じページにリダイレクトするPOST処理と、POSTに値が入っているかの条件分岐を活用すれば、一つの.phpで完了できますので、チャレンジしてみてください*/
// 課題9:フォームからデータを挿入できる処理を構築してください。
// 課題10:profileIDで指定したレコードを削除できるフォームを作成してください。
// 課題11:profileIDで指定したレコードの、profileID以外の要素をすべて上書きできるフォームを作成してください
// 課題12:検索用のフォームを用意し、名前、年齢、誕生日を使った複合検索ができるようにしてください。

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
      <form action="'PHP'karano'DB'akusesu.php" method="post" accept-charset="utf-8">

　　　　<br/><名前検索><br/><input type="text" name="name"><br/>
            <複合検索> <br/>名前:<input type="text" name="fukugoname">
            年齢(半角):<input type="text" name="fukugonennrei">
            誕生日:<input type="date" name="fukugobirthday"><br/>

            <名前追加><br/><input type="text" name="sounyuu"><br/>
            <削除するレコードのIDNo.(半角)><br/><input type="text" name="sakujyo"><br/><br/>      
      

            <上書き保存><br/>ID指定(半角):<input type="text" name="ID"><br/>内容<br/>
            名前:<input type="text" name="unamae">
            tell(半角):<input type="text" name="utell">
            age(半角):<input type="text" name="uage">
            birthday:<input type="date" name="udate"><br/><br/>
      <input type="submit" value = '全入力データ送信'><br/><br/>
           
      </form>


<?php
$name = $_POST['name'];
$sounyuu = $_POST['sounyuu'];
$sakujyo = $_POST['sakujyo'];
$ID = $_POST['ID'];
$unamae = $_POST['unamae'];
$utell = $_POST['utell'];
$uage = $_POST['uage'];
$udate = $_POST['udate'];
$fukugoname = $_POST['fukugoname'];
$fukugonennrei = $_POST['fukugonennrei'];
$fukugobirthday = $_POST['fukugobirthday'];



//課題8
if($name == ""){
      $name = null;
}
if(isset($name)){   
      $sql = "select * from profiles where name like '%$name%'";
      $atai = $pdo_object->prepare($sql);
      $atai->execute();
      $result =$atai->fetchall(PDO::FETCH_ASSOC);
      var_dump($result);
      echo "<br>";
}else{
      echo "-検索する名前を入力してください。";
      echo "<br>";
}


//課題9
if($sounyuu == ""){
      $sounyuu = null;
}
if(isset($sounyuu)){
      $sql2 = "INSERT into profiles(name) VALUES ('$sounyuu')";
      $tuika = $pdo_object->prepare($sql2);
      $tuika->execute();
      echo "'$sounyuu'.がprofilesに追加されました。";
      echo "<br>";
}else{
      echo '-追加する名前があれば、入力してください。';
      echo "<br>";
}


//課題10
if ($sakujyo == "") {
      $sakujyo = null;
}
if (isset($sakujyo)){
      $sql3 = "delete from profiles where profilesID = $sakujyo";
      $query = $pdo_object->prepare($sql3);
      
      $query->execute();
      echo "profilesIDNo.'$sakujyo'は削除されました。";
      echo "<br>";
      # code...
}else{
      echo '-プロファイルは削除されていません。';
      echo "<br>";
}

///課題11
if($ID== "" || $unamae== "" || $utell== "" || $uage== "" || $udate == ""){
      $ID=null ; $unamae=null ; $utell=null ; $uage=null ; $udate =null;
      
}

if(isset($unamae, $utell, $uage, $udate)){
      $sql4 = "update profiles set name = :name,tell = :tell,age = :age,birthday = :birthday where profilesID = $ID";
      $query2 = $pdo_object->prepare($sql4);
      $query2 -> bindValue(':name',$unamae);
      $query2 -> bindValue(':tell',$utell);
      $query2 -> bindValue(':age',$uage);
      $query2 -> bindValue(':birthday',$udate);
      $query2->execute();
      $result2 =$query2->fetchall(PDO::FETCH_ASSOC);
      var_dump($unamae);

      echo '-データが更新されました。';
      echo "<br>";
}else{echo '-上書きする際は上書き保存のすべての項目を入力してください。';
echo "<br>";
      
}

//課題12
if($fukugoname=="" or $fukugonennrei=="" or $fukugobirthday==""){
      $fukugoname=null; $fukugonennrei=null; $fukugobirthday=null;
}

if(isset($fukugoname, $fukugonennrei, $fukugobirthday)){
      $sql5 = "select * from profiles where name=:name && age=:age && birthday=:birthday";
      $query3=$pdo_object->prepare($sql5);
      $query3->bindvalue(':name',$fukugoname);
      $query3->bindvalue(':age',$fukugonennrei);
      $query3->bindvalue(':birthday',$fukugobirthday);
      $query3->execute();
      $result3 =$query3->fetchall(PDO::FETCH_ASSOC);
      echo "-複合検索結果";
      echo "<br>";
      // echo 'profilesID:';
      foreach ($result3 as $key => $value) {
            foreach ($value as $key2 => $value2) {
                   echo "$key2: $value2";
                   echo "<br>";

            }
          
      }
    
      

}else{echo '-複合検索の全ての項目を入力してください。';

}



?>
</body>
</html>
<?php


























