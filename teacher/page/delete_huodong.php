<?php
require_once("../api/user.php");
$name=$_POST["name"];
if(isset($name))
{
$servername = "sql103.xiaopangkj.space";
$username = "xiaop_30259055";
$password = "iostream";
$dbname = "xiaop_30259055_school";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$user=teacher_info_name($_COOKIE['teacher_username']);
$sql = "SELECT body FROM huodong WHERE head='$name' AND user='$user'";
    mysqli_query($conn,"set names utf8");
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
    $sql = "DELETE FROM huodong WHERE head='$name' AND user='$user'";
    mysqli_query($conn,"set names utf8");
    $result = $conn->query($sql); 
    echo "<h3 style=\"color:#00FF00\">删除成功</h3>";
}else{
    echo "<h3 style=\"color:#FF0000\">未找到相应的活动或无权限删除</h3>";
}
}