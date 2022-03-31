 <?php
        require_once("../../../api/email.php");
        require_once("../../../api/code.php");
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
	$mail=$_POST["email"]; 
	//查看表user用户名与密码和传输值是否相等
	$sql = "SELECT * FROM userlogin WHERE email='$mail'";
	//result必需规定由 mysqli_query()、mysqli_store_result() 或 mysqli_use_result() 返回的结果集标识符。
	$result = mysqli_query($link,$sql);
	$num = mysqli_num_rows($result);//函数返回结果集中行的数量
	//判断是否登录后显示或跳转
	if($num){
	mysqli_close($link);//关闭数据库
	
	}else{
        $sql = "SELECT * FROM teacher_userlogin WHERE email='$mail'";
	    //result必需规定由 mysqli_query()、mysqli_store_result() 或 mysqli_use_result() 返回的结果集标识符。
	    $result = mysqli_query($link,$sql);
	    $num = mysqli_num_rows($result);//函数返回结果集中行的数量
        if(!$num)
        {
		echo'<script>window.location.href="email.html?i=1"</script>';
        }
        mysqli_close($link);//关闭数据库
		
	}
		
	


        function checkEmail($email) 
{
 
  
  $email_=filter_var($email, FILTER_SANITIZE_EMAIL);
 
  if(filter_var($email_, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  
 
}
$yzm=rand(100000,999999);
//$key=2008;
//$code_email=authcode($mail,"ENCODE",$key,0);
//$code_yzm=authcode($yzm,"ENCODE",$key,0);
echo $yzm;
$body="
<html>
<div id=\"qm_con_body\"><div id=\"mailContentContainer\" class=\"qmbox qm_con_body_content qqmail_webmail_only\" style=\"opacity: 1;\"><div style=\"background:#f5f5f5;padding:48px 0;\"><div style=\"width:665px;margin:0 auto;border:1px solid #dcdcdc;background:#ffffff\"><h2 style=\"height:56px;line-height:56px;margin:0;color:#ffffff;font-size:20px;background:#40caba;padding-left:30px;font-weight:normal\">修改密码</h2><div style=\"padding:50px 0;margin:0 30px;font-size:13px;border-bottom:1px solid #ebebeb;\"><h3 style=\"color:#000000;font-size:15px;margin:0;margin-bottom:4px;\">亲爱的用户：</h3>您正在验证身份，验证码是：<b style=\"font-size:26px;color:#40caba;margin-bottom:20px;display:block;margin-top:10px;\">{$yzm}</b> 15分钟内有效，为了您的帐号安全，请勿泄露给他人。</div><div style=\"color:#898989;font-size:10px;background:#fcfcfc;padding:18px 30px;\">本邮件由系统自动发出，请勿直接回复。 谢谢！</div></div></div>
<style type=\"text/css\">.qmbox style, .qmbox script, .qmbox head, .qmbox link, .qmbox meta {display: none !important;}</style></div></div>
</html>
";
if(checkEmail($mail))
{
  post_yzm($mail,"找回密码",$body);
  echo "
  <html>
    <head>
        <title>邮箱找回密码</title>
        <meta charset=\"utf-8\">
    </head>
    <body bgcolor=\"#1E90FF\">
        <div style=\"margin-top:0.5cm;margin-left:0.5cm;background-color:#FFD700;height:50px;width:1300px;\">
            <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;安全中心</h1>
        </div>
        <div style=\"margin-top:0.5cm;margin-left:1.5cm;height:600px;width:1000px;background-color:#DAA520\">
            <form action=\"resetpass.php?email={$mail}&yzm_b={$yzm}\" method=\"post\">
                <input type=\"text\" name=\"yzm\"> <br>
                <input type=\"text\" name=\"pass\"><br>
                <input type=\"text\" name=\"againpass\"><br>
                 <input type=\"submit\" value=\"Submit\">确认</button>
            </from>
        </div>
        
    </body>
</html>
  ";
 
}else{
    die("error");
}
        ?>