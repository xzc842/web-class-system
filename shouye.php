<?php
require_once("api/user.php");
if(login()=="")
{
    echo "<script>alert('登录超时或未登录请重新登录')</script>";
    echo'<script>window.location.href="index.html?i=2"</script>';
}
?>
<html>
    <head>
        <title>首页-沈采学校</title>
        <meta charset="utf-8"></meta>
        <style>

ul{

list-style-type:none;

margin:0;

padding:0;

}

 

a{

display:block;

background-color:green;

color:white;

width:80px;

text-align:center;

padding:4px;

text-decoration:none;

}

a:hover,a:active{

background-color:#98bf21;

}

 

</style>
<style type="text/css">
	body,ul,li,a
	{
		padding: 0;
		margin: 0;
	}
	body
	{
		margin-top: 50px;
		background-color:#e6e6e6;
		color: #fff; 
	}
	.menu
	{
		font-size: 0;
		padding: 0;
		height: 50px;
		padding-left: 5%;
		background-color: #00a2ca;
		position: relative;
	}
	.menubar
	{
		margin: 0 auto;
		position: absolute;
		list-style-type: none;
		width: 100%;
		overflow-y: auto;
	}
 
	.menubar li
	{
		padding:0px 5px;
		display:inline-block;
		cursor: pointer;
		line-height: 50px;		
	}
	.menubar li:hover
	{
	background-color:#0095bb;
	}
	.menubar li.menu-value
	{
		background-color: #0095bb;	
	}
 
	.menubar a
	{
		display: block;
		height: 50px;
		font-family: "微软雅黑","Microsoft Yahei","Hiragino Sans GB",tahoma,arial,"宋体" ;
		font-size: 15px;
		text-align: center;
		text-decoration: none;
		color: #fff;
	}
 
</style>
    </head>
    <body>
      
 
<div id="header" style="background-color:#00BFFF;width:1200px">
     
<h1 style="margin-bottom:0;">沈采学校</h1>
<?php
require_once("api/user.php");
echo "用户名：";
echo $_COOKIE["username"];
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "姓名：";
echo info_name($_COOKIE["username"]);
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
?>
<script type="text/javascript">
function signout(){
    if(window.confirm("确定要退出登录吗？")){
    document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.cookie = "password=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    window.location.href="index.html?i=2";
    }
}
</script>
<button onclick="signout();">退出登录</button>
</div>
<script>
function changeherf(herf)
{
     document.getElementById("center_page").src="page/"+herf+".php";
}
</script>


<li><a onclick="changeherf('shouye')">首页</a></li>
<li><a onclick="changeherf('kechenglist')">课程表</a></li>
<li><a onclick="changeherf('huodong')">活动</a></li>
<li><a onclick="changeherf('set')">设置</a></li>
<!-- 以下为中心代码 -->
<div id="content" style="background-color:#EEEEEE;height:1000px;width:1200px;float:left;margin-top:-4cm;margin-left:2.2cm;">
  <iframe id="center_page" src="page/shouye.php"
            height="1000"
            width="1200"
            frameborder="0"
            scrolling="0"
           
    ></iframe></div>

    </body>
</html>