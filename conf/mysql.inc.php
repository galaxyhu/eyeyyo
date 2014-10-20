<?php
define('DB_USER', 'root');
define('DB_PASSWORD', 'galaxy1877');
define('DB_HOST', 'localhost');
define('DB_NAME', '');
$con = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME) or die('数据库无法连接'.  mysqli_connect_error());
mysql_set_charset('utf8'); 
?>