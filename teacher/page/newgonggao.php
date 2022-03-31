<?php 
require_once("../api/user.php");
$head=$_POST["head"]; 
$ishtml=$_POST["ishtml"];
$text=$_POST["text"];
$name=teacher_info_name($_COOKIE['teacher_username']); 
if($ishtml=="yes"){
    $class=1;
}else if($ishtml=="no"){
    $class=0;
}else{
    $class=2;
}
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
$sql = "INSERT INTO gonggao ".
        "(head,body,name,class) ".
        "VALUES ".
        "('$head','$text','$name','$class')";
    mysqli_query($conn,"set names utf8");
    $result = $conn->query($sql);
 
    if ($result->num_rows == 0) {
        echo "<h3 style=\"color:#00FF00\">发布成功</h3>";
}else{
    echo "<h3 style=\"color:#FF0000\">发布失败</h3>";

    }
 ?>