<?php
$dbms='mysql';     //数据库类型
$host='db'; //数据库主机名
$dbName='mysql';    //使用的数据库
$user='root';      //数据库连接用户名
$pass='root';          //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";

try {
	$dbh = new PDO($dsn, $user, $pass);
	echo '<h2>成功通过 PDO 连接到 MySQL 服务器</h2>' . PHP_EOL;
} catch(PDOException $e) {
	die("Error!: " . $e->getMessage() . "<br/>");
}
phpinfo();