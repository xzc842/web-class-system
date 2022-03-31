<?php
error_reporting(0);
require_once("..../api/user.php");
isset($_POST['nc'])?$nc = $_POST['nc']:$nc = null;
echo setcookie("nc",info_name($COOKIE["username"]),time()+3600*24,'/');
?>