<?php
error_reporting(0);
require_once("../api/user.php");
isset($_POST['nc'])?$nc = $_POST['nc']:$nc = null;
echo setcookie("nc",teacher_info_name($COOKIE["teacher_username"]),time()+3600*24,'/');
?>