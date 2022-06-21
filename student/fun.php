<?php
header('Content-Type: text/html; charset=utf-8');
?>
<?php
	try {
		$db = new PDO("mysql:host=localhost;dbname=studb", "root", "root");
		//
		//$conn=mysql_connect("localhost","root","root");
		//mysql_select_db("pxscj",$conn);
		//mysql_query("SET NAMES gb2312");
	}catch(PDOException $e) {
		echo "连接错误".$e->getMessage();
	}
?>