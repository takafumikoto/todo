<?php 
try {
	$db = new PDO('mysql:dbname=mydb;port=8889;host=localhost;charset=utf8','root','root');
	} catch (PDOException $e) {
		echo 'DB接続エラー;' . $e->getMessage();	
}
 ?>