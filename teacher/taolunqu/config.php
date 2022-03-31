<?php
error_reporting(0);
$config = mysql_connect("sql103.xiaopangkj.space","xiaop_30259055","iostream")or die("Mysql Connect Error");//设置数据库IP，账号，密码
mysql_select_db("xiaop_30259055_school");//数据库库名
mysql_query("SET NAMES UTF8");
?>