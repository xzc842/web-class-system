<?php
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
	$myusername = $_POST['username'];
	$mypassword = $_POST['password'];
	//查看表user用户名与密码和传输值是否相等
	$sql = "SELECT * FROM teacher_userlogin WHERE username = '$myusername' AND password = '$mypassword'";
	//result必需规定由 mysqli_query()、mysqli_store_result() 或 mysqli_use_result() 返回的结果集标识符。
	$result = mysqli_query($link,$sql);
	$num = mysqli_num_rows($result);//函数返回结果集中行的数量
	//判断是否登录后显示或跳转
	if($num){
		echo '登录成功';
		$expire=time()+60*60*24;
setcookie("teacher_username",$myusername,$expire);
setcookie("teacher_password",$mypassword,$expire);
	mysqli_close($link);//关闭数据库
	echo'<script>window.location.href="shouye.php"</script>';
	}else{
		echo'登录失败';
		
	}
		mysqli_close($link);//关闭数据库
	echo'<script>window.location.href="index.html?i=1"</script>';
 ?>