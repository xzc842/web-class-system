<?php
require_once("../../api/user.php");
if($_COOKIE['nc']==null){
    setcookie("nc",info_name($_COOKIE["username"]),time()+3600*24,'/');
}
?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>聊天室</title>
<meta name="keywords" content="在线聊天室" />
<meta name="description" content="在线聊天室" />
<meta charset="utf-8">
<link type="text/css" href="index.css" rel="stylesheet" />
<script src="jquery-1.11.1.min.js"></script>
<script src="index.js"></script>
<script>
function down()
{
    var div = document.getElementById('message');
    div.scrollTop = div.scrollHeight;
}
</script>
</head>
<body onLoad="down();">
<title>在线聊天室</title>
<div id="chat">
<div class="window" id="message" style="overflow:auto;solid #999;height:13cm;margin-top:1cm;" ></div>
<div class="bottom"><marquee>请大家注意文明用语并且尊守国家法律法规!</marquee></div>
</div>
<div id="shuru"><textarea style="width: 100%;height:50px;resize:none;" id="content" autofocus required placeholder="请输入想说的话。。。"></textarea></div>
<div id="form"><input type="submit" value="发送" id="send" class="send" style="width:200px;"/><!--<input type="hidden" id="nicheng" class="nicheng" value="<?php echo $nc;?>" /></div>
<div id="form"><input type="button" class="fanhui" value="重设昵称" id="reset" style="width:200px;" /></div>
<div id="bg"></div>
<div id="window">
<div class="t">
<div class="title">设置我的昵称</div>
<div class="nc">

<input type="text" value="<?php echo $nc;?>" id="nc" style="width: 60%;height:30px;text-align:center;" /><br /><br />
<input type="button" id="setting" value="设置" style="width: 60%;height:30px;" />

</div>
</div>-->
</div>

</body>