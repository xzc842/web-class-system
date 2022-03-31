<?php
//检查用户登录，已登录返回用户名未登录返回“”
function login(){
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
	$myusername = $_COOKIE['username'];
	$mypassword = $_COOKIE['password'];
	//查看表user用户名与密码和传输值是否相等
	$sql = "SELECT * FROM userlogin WHERE username = '$myusername' AND password = '$mypassword'";
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
	

function info_name($id){
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
	$sql = "SELECT name FROM userlogin WHERE username ='$myusername'";
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

function info_group($id){
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
	$sql = "SELECT usergroup FROM userlogin WHERE username ='$myusername'";
    mysqli_query($link,"set names utf8");
	$result = mysqli_query($link,$sql);
	
	if (mysqli_num_rows($result) > 0) {
	    $row = $result->fetch_assoc();

     $info_=$row["usergroup"];
     mysqli_close($link);
     return $info_;
} else {
    mysqli_close($link);
    return "error";
}
	}

function info_lastip($id){
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
	$sql = "SELECT lastip FROM userlogin WHERE username ='$myusername'";
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

function info_jf($id){
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
	$sql = "SELECT jf FROM userlogin WHERE username ='$myusername'";
    mysqli_query($link,"set names utf8");
	$result = mysqli_query($link,$sql);
	
	if (mysqli_num_rows($result) > 0) {
	    $row = $result->fetch_assoc();

     $info_=$row["jf"];
     mysqli_close($link);
     return $info_;
} else {
    mysqli_close($link);
    return "error";
}
	}

function info_grade($id){
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
	$sql = "SELECT grade FROM userlogin WHERE username ='$myusername'";
    mysqli_query($link,"set names utf8");
	$result = mysqli_query($link,$sql);
	
	if (mysqli_num_rows($result) > 0) {
	    $row = $result->fetch_assoc();

     $info_=$row["grade"];
     mysqli_close($link);
     return $info_;
} else {
    mysqli_close($link);
    return "error";
}
	}

function info_class($id){
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
	$sql = "SELECT class FROM userlogin WHERE username ='$myusername'";
    mysqli_query($link,"set names utf8");
	$result = mysqli_query($link,$sql);
	
	if (mysqli_num_rows($result) > 0) {
	    $row = $result->fetch_assoc();

     $info_=$row["class"];
     mysqli_close($link);
     return $info_;
} else {
    mysqli_close($link);
    return "error";
}
	}

function info_email($id){
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
	$sql = "SELECT email FROM userlogin WHERE username ='$myusername'";
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

function info_xingbie($id){
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
	$sql = "SELECT xingbie FROM userlogin WHERE username ='$myusername'";
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

function name_user($name){
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
	$sql = "SELECT username FROM userlogin WHERE name ='$myusername'";
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

function user_head($id)
{    
    if(info_group($id)==0)
    {
        if(info_xingbie($id)==0)
        {
            echo "<img src='../pictures/head/boy.jpeg' width='30' height='30'></img>";
        }
        else
        {
            echo "<img src='../pictures/head/girl.jpeg' width='30' height='30'></img>";
        }
    }
}
 ?>