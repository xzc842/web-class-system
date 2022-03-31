<?php
require_once("config.php");
require_once("../api/user.php");
ini_set("date.timezone","PRC");
//$numsql = "select * from dunling_chat";
//$numery = mysql_query($numsql,$config);
//$num = mysql_num_rows($numery);
//if($num<5){
//$num="0";
//}else{
//$num = $num - 5;
//}
$sql = "select * from teacher_dunling_chat order by id";
mysqli_query($config,"set names utf8");
$ery = mysql_query($sql,$config);
while($chat = mysql_fetch_array($ery)){
$time = $chat['time'];
$time = date("H:i:s",$time);
echo "<img src='../../pictures/head/teacher.png' height=30 width=30>";
if($chat['nicheng']==$_COOKIE['nc'])
{
echo '<span style="color:#00FF00">';
}else{
    echo '<span style="color:#0000FF">';
}
echo $chat['nicheng'].' </span><span style="color:#808080;">'.$time." </span><br/>";
echo '<P style="color:#000000">'.$chat['content'].'<p/>'; 
}
?>