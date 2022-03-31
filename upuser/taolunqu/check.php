<?php
error_reporting(0);
require_once("..../api/user.php");
isset($_COOKIE['nc'])?$nc = $_COOKIE['nc']:$nc = null;
if($nc==null){
    echo setcookie("nc",info_name($COOKIE["username"]),time()+3600*24,'/');
}else{
    echo $nc;
}
?>