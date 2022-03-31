<?php
$name=$_POST["name"];
$href=$_POST["href"];
$grade=$_POST["grade"];
$class=$_POST["class"];
require_once("../api/user.php");
if(isset($name)&&isset($href))
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
$sql = "INSERT INTO huodong ".
        "(user,head,body,grade,class) ".
        "VALUES ".
        "('$user','$name','$href','$grade','$class')";
    mysqli_query($conn,"set names utf8");
    $result = $conn->query($sql);
if ($result->num_rows == 0) {
    echo "<h3 style=\"color:#00FF00\">添加成功</h3>";
}else{
    echo "<h3 style=\"color:#FF0000\">添加失败</h3>";
}
}