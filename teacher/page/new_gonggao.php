<html>
<head>
<script language="javascript">
function onsubm()
{
//document.getElementById("result").innerHTML=document.getElementById("text1").value;
result.innerHTML=document.getElementById("text1").value;
}
setInterval(onsubm, 500);
function changeclass(a)
{
    if(a=="no"){
        document.getElementById("text1").placeholder="请输入文字";
    }else if(a=="yes"){
        document.getElementById("text1").placeholder="请直接输入html的<body>部分代码，例如<h1>hello world</h1>";
    }
}
</script>
</head>
<body onload="changeclass('no')">
<div>
<span style="position:relative;left:500px"><font size="5" color="red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;预览:</font></span></div>
<div style="width:600px;height:430px;border:1px solid blue;float:left;">
<form action="newgonggao.php" method="post">
标题：<input type="text" name="head" autofocus><br>
输入类型：
<input type="radio" name="ishtml" value="no" checked onclick="changeclass(this.value)">文本&nbsp;&nbsp;&nbsp;
<input type="radio" name="ishtml" value="yes" onclick="changeclass(this.value)">HTML代码（支持JavaScript、CSS，不支持PHP、ASP）
<textarea rows="20" cols="80" id="text1" name="text" maxlength="1000" required placeholder="请输入">
</textarea>
<input type="submit" value="提交代码"/>
</form>
</div>
<div id="result" style="width:300px;height:400px;border:1px solid blue;float:left;">
</div>
</body>
</html>