<?php
require_once("phpmailer.php");

require_once("smtp.php");
function post_yzm($email,$title,$body)
{


// 实例化PHPMailer核心类

$mail = new PHPMailer();

// 是否启用smtp的debug进行调试 开发环境建议开启 生产环境注释掉即可 默认关闭debug调试模式

//$mail->SMTPDebug = 1;

// 使用smtp鉴权方式发送邮件

$mail->isSMTP();

// smtp需要鉴权 这个必须是true

$mail->SMTPAuth = true;

// 链接qq域名邮箱的服务器地址

$mail->Host = 'smtp.qq.com';

// 设置使用ssl加密方式登录鉴权

$mail->SMTPSecure = 'ssl';

// 设置ssl连接smtp服务器的远程服务器端口号

$mail->Port = 465;

// 设置发送的邮件的编码

$mail->CharSet = 'UTF-8';

// 设置发件人昵称 显示在收件人邮件的发件人邮箱地址前的发件人姓名

$mail->FromName = 'xzc';

// smtp登录的账号 QQ邮箱即可

$mail->Username = '2636670638@qq.com';

// smtp登录的密码 使用生成的授权码

$mail->Password = 'cuojcalneixkeagf';

// 设置发件人邮箱地址 同登录账号

$mail->From = '2636670638@qq.com';

// 邮件正文是否为html编码 注意此处是一个方法

$mail->isHTML(true);

// 设置收件人邮箱地址

$mail->addAddress($email);

// 添加该邮件的主题

//$mail->Subject = 'text';
$mail->Subject = $title;

// 添加邮件正文

//$mail->Body = 'Hello World';
$mail->Body = $body;
// 发送邮件 返回状态

$status = $mail->send();
}
?>