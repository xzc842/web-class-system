<?php
require_once("../../../api/code.php");
$email=$_GET["email"];
$yzm=$_GET["yzm_b"];
$yzm_b=$_POST["yzm"];
$pass=$_POST["pass"];
$againpass=$_POST["againpass"];
//$email=authcode($code_email,"DECODE",2008);
//$yzm=authcode($code_yzm,"DECODE",2008);
function repass(){
    $host = "sql103.xiaopangkj.space";
$sqlusername = "xiaop_30259055";
$sqlpassword = "iostream";
$dbname = "xiaop_30259055_school";
	session_start();
	header("content-type:text/html;charset=utf-8");
	//连接数据库
	$link = mysqli_connect($host,$sqlusername,$sqlpassword,$dbname);
	if (!$link) {
		die("连接失败: " . mysqli_connect_error());
	}
	
	$mail=$_POST["email"]; 
	
	$sql = "update userlogin set password = '$pass' where email = '$email'";
	
	$result = mysqli_query($link,$sql);
    echo $result;
}
if($yzm == $yzm_b)
{
    if($yzm == '')
    {
        echo'<script>window.location.href="email.html?i=3"</script>';
    }else{
        if($pass != $againpass)
        {
            echo'<script>window.location.href="email.html?i=4"</script>';
        }else{
            repass();
        }
    }
}else{
   // echo'<script>window.location.href="email.html?i=2"</script>';
}
?>