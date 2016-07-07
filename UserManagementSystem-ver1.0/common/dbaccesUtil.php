<?php
require_once '../common/scriptUtil.php';
//DBへの接続用を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
//第一段階:8 まだ解けてない。
function connect2MySQL(){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','atta','0606');
        return $pdo;
    } catch (PDOException $e) {
    	echo "<br>";
        echo "接続に失敗しました。次記のエラーにより処理を中断します:";
        echo "<br>";
        echo $e->getMessage();
        echo "<br>";
        
        
    }
}





//第一段階:7
function database($name,$birthday,$tell,$type,$comment){
	//db接続を確立
    $insert_db = connect2MySQL();
    if(isset($insert_db)){
    //DBに全項目のある1レコードを登録するSQL
    $insert_sql = "INSERT INTO user_t(name,birthday,tell,type,comment,newDate)"
            . "VALUES(:name,:birthday,:tell,:type,:comment,:newDate)";
    //クエリとして用意
     $insert_query = $insert_db->prepare($insert_sql);
     	
     
    //SQL文にセッションから受け取った値＆現在時をバインド
    $insert_query->bindValue(':name',$name);
    $insert_query->bindValue(':birthday',$birthday);
    $insert_query->bindValue(':tell',$tell);
    $insert_query->bindValue(':type',$type);
    $insert_query->bindValue(':comment',$comment);
    //第一段階: 6
    $insert_query->bindValue(':newDate',date('Y-m-d H:i:s'));
    
    //SQLを実行

    $insert_query->execute();
    
    //接続オブジェクトを初期化することでDB接続を切断
    $insert_db=null;
}else{
echo return_top();
 exit;
}
}