<?php
$servername = "sql103.xiaopangkj.space";
$sqlusername = "xiaop_30259055";
$sqlpassword = "iostream";
$dbname = "xiaop_30259055_school";
	header("content-type:text/html;charset=utf-8");
	//连接数据库
	$link = mysqli_connect("localhost","pay_com_cn","pay_com_cn","pay_com_cn");
	if (!$link) {
		die("连接失败: " . mysqli_connect_error());
	}
	//接收$_POST用户名和密码
	$username=$_POST['xzcusername'];
	$password=$_POST['xzcpassword'];
	$email=$_POST['xzcemail'];
	$grade=$_POST['xzcgrade'];
	$class=$_POST['xzcclass'];
	$name=$_POST['xzcname']
	//查看表user用户名是否存在或为空
	$sql_select = "SELECT * FROM userlogin WHERE username = '$username' OR email = '$email'";
	//result必需规定由 mysqli_query()、mysqli_store_result() 或 mysqli_use_result() 返回的结果集标识符。
	$select = mysqli_query($link,$sql_select);
	$num = mysqli_num_rows($select);//函数返回结果集中行的数量
	if($username == "" || $password == "")
	{
		echo "请确认信息完整性";
	}else if($num){
		echo "已存在用户名或邮箱";//已存在账户名输出错误
	}else{
			$sql="insert into userlogin(username,password,email,grade,class,name) values('$username','$password','$email','$grade','$class','$name)";
			$result=mysqli_query($link,$sql);
			//判断是否注册后显示内容
			if(!$result)
			{
				echo "注册不成功！"."<br>";//输出错误
				echo "<a href='index.php'>返回</a>";//超链接到首页
			}
			else
			{
				echo "注册成功!"."<br/>";//输出成功
				echo "<a href='index.hphp'>立刻登录</a>";//超链接到首页
			}
		}
	
?>