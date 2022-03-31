<?php
//检查用户登录，已登录返回用户名未登录返回“”
function teacher_login(){
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
	//接收$_POST用户名和密码
	$myusername = $_COOKIE['teacher_username'];
	$mypassword = $_COOKIE['teacher_password'];
	//查看表user用户名与密码和传输值是否相等
	$sql = "SELECT * FROM teacher_userlogin WHERE username = '$myusername' AND password = '$mypassword'";
	//result必需规定由 mysqli_query()、mysqli_store_result() 或 mysqli_use_result() 返回的结果集标识符。
	$result = mysqli_query($link,$sql);
	$num = mysqli_num_rows($result);//函数返回结果集中行的数量
	//判断是否登录后显示或跳转
	if($num){
	mysqli_close($link);//关闭数据库
	return $myusername;
	}else{
		return "";
		
	}
		mysqli_close($link);//关闭数据库
	}
	

function teacher_info_name($id){
$host = "sql103.xiaopangkj.space";
$sqlusername = "xiaop_30259055";
$sqlpassword = "iostream";
$dbname = "xiaop_30259055_school";
	session_start();
	header("content-type:text/html;charset=utf-8");
	$link = mysqli_connect($host,$sqlusername,$sqlpassword,$dbname);
	if (!$link) {
		die("连接失败: " . mysqli_connect_error());
	}
	$myusername = $id;
	$sql = "SELECT name FROM teacher_userlogin WHERE username ='$myusername'";
    mysqli_query($link,"set names utf8");
	$result = mysqli_query($link,$sql);
	
	if (mysqli_num_rows($result) > 0) {
	    $row = $result->fetch_assoc();

     $info_=$row["name"];
     mysqli_close($link);
     return $info_;
} else {
    mysqli_close($link);
    return "error";
}
	}



function teacher_info_lastip($id){
$host = "sql103.xiaopangkj.space";
$sqlusername = "xiaop_30259055";
$sqlpassword = "iostream";
$dbname = "xiaop_30259055_school";
	session_start();
	header("content-type:text/html;charset=utf-8");
	$link = mysqli_connect($host,$sqlusername,$sqlpassword,$dbname);
	if (!$link) {
		die("连接失败: " . mysqli_connect_error());
	}
	$myusername = $id;
	$sql = "SELECT lastip FROM teacher_userlogin WHERE username ='$myusername'";
    mysqli_query($link,"set names utf8");
	$result = mysqli_query($link,$sql);
	
	if (mysqli_num_rows($result) > 0) {
	    $row = $result->fetch_assoc();

     $info_=$row["lastip"];
     mysqli_close($link);
     return $info_;
} else {
    mysqli_close($link);
    return "error";
}
	}


function teacher_info_email($id){
$host = "sql103.xiaopangkj.space";
$sqlusername = "xiaop_30259055";
$sqlpassword = "iostream";
$dbname = "xiaop_30259055_school";
	session_start();
	header("content-type:text/html;charset=utf-8");
	$link = mysqli_connect($host,$sqlusername,$sqlpassword,$dbname);
	if (!$link) {
		die("连接失败: " . mysqli_connect_error());
	}
	$myusername = $id;
	$sql = "SELECT email FROM teacher_userlogin WHERE username ='$myusername'";
    mysqli_query($link,"set names utf8");
	$result = mysqli_query($link,$sql);
	
	if (mysqli_num_rows($result) > 0) {
	    $row = $result->fetch_assoc();

     $info_=$row["email"];
     mysqli_close($link);
     return $info_;
} else {
    mysqli_close($link);
    return "error";
}
	}

function teacher_info_xingbie($id){
$host = "sql103.xiaopangkj.space";
$sqlusername = "xiaop_30259055";
$sqlpassword = "iostream";
$dbname = "xiaop_30259055_school";
	session_start();
	header("content-type:text/html;charset=utf-8");
	$link = mysqli_connect($host,$sqlusername,$sqlpassword,$dbname);
	if (!$link) {
		die("连接失败: " . mysqli_connect_error());
	}
	$myusername = $id;
	$sql = "SELECT xingbie FROM teacher_userlogin WHERE username ='$myusername'";
    mysqli_query($link,"set names utf8");
	$result = mysqli_query($link,$sql);
	
	if (mysqli_num_rows($result) > 0) {
	    $row = $result->fetch_assoc();

     $info_=$row["xingbie"];
     mysqli_close($link);
     return $info_;
} else {
    mysqli_close($link);
    return "error";
}
	}

function teacher_name_user($name){
$host = "sql103.xiaopangkj.space";
$sqlusername = "xiaop_30259055";
$sqlpassword = "iostream";
$dbname = "xiaop_30259055_school";
	session_start();
	header("content-type:text/html;charset=utf-8");
	$link = mysqli_connect($host,$sqlusername,$sqlpassword,$dbname);
	if (!$link) {
		die("连接失败: " . mysqli_connect_error());
	}
	$myusername = $name;
	$sql = "SELECT username FROM teacher_userlogin WHERE name ='$myusername'";
    mysqli_query($link,"set names utf8");
	$result = mysqli_query($link,$sql);
	
	if (mysqli_num_rows($result) > 0) {
	    $row = $result->fetch_assoc();

     $info_=$row["username"];
     mysqli_close($link);
     return $info_;
} else {
    mysqli_close($link);
    return "error";
}
	}
function teacher_xueke($id){
$host = "sql103.xiaopangkj.space";
$sqlusername = "xiaop_30259055";
$sqlpassword = "iostream";
$dbname = "xiaop_30259055_school";
	session_start();
	header("content-type:text/html;charset=utf-8");
	$link = mysqli_connect($host,$sqlusername,$sqlpassword,$dbname);
	if (!$link) {
		die("连接失败: " . mysqli_connect_error());
	}
	$myusername = $id;
	$sql = "SELECT xueke FROM teacher_userlogin WHERE username ='$myusername'";
    mysqli_query($link,"set names utf8");
	$result = mysqli_query($link,$sql);
	
	if (mysqli_num_rows($result) > 0) {
	    $row = $result->fetch_assoc();

     $info_=$row["xueke"];
     mysqli_close($link);
     return $info_;
} else {
    mysqli_close($link);
    return "error";
}
	}


 ?>