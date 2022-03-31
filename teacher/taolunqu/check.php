<?php
error_reporting(0);
require_once("..../api/user.php");
isset($_COOKIE['nc'])?$nc = $_COOKIE['nc']:$nc = null;
if($nc==null){
    echo setcookie("nc",teacher_info_name($COOKIE["teacher_username"]),time()+3600*24,'/');
}else{
    echo $nc;
}
?>