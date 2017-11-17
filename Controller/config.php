<?php
//$connection = mysql_connect($host, $username, $password);//连接到数据库
$connection = mysqli_connect('localhost', 'user', 'password', 'database');
//mysqli_query("set names 'utf8'");//编码转化
mysqli_query($connection, 'CREATE TEMPORARY TABLE `short_url_tb`');
