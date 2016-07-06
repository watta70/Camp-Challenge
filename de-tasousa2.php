<?php
//２．以下の機能を実装してください。１で作成したHTMLの入力データを取得し、画面に表示する

$textbox = $_POST['txtName'];
$radio = $_POST['txtsex'];
$radio2 = $_POST['txtsex2'];
$textarea = $_POST['mulText'];


echo $textbox;
echo "<br>";

if($radio == NULL){
}else{
  echo $radio;
}
if($radio2 == NULL){
}else{
  echo $radio2;
}
echo "<br>";
echo $textarea;
















?>
