<html>
<head>
<style type="text/css">
 table.hovertable {
      font-family: verdana,arial,sans-serif;
      font-size:11px;
      color:#333333;
      border-width: 1px;
      border-color: #999999;
      border-collapse: collapse;
 }
 table.hovertable th {
     background-color:#c3dde0;
     border-width: 1px;
     padding: 8px;
     border-style: solid;
     border-color: #a9c6c9;
 }
 table.hovertable tr {
     background-color:#d4e3e5;
 }
 table.hovertable td {
     border-width: 1px;
     padding: 8px;
     border-style: solid;
     border-color: #a9c6c9;
 }
 </style>
</head>
    <body>
<?php
$servername = "sql103.xiaopangkj.space";
$username = "xiaop_30259055";
$password = "iostream";
$dbname = "xiaop_30259055_school";
require_once("../api/user.php"); 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "<table border='1'>";
echo "<tr>";
echo "<th onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">序号\星期</th>";
echo "<th onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">星期一</th>";
echo "<th onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">星期二</th>";
echo "<th onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">星期三</th>";
echo "<th onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">星期四</th>";
echo "<th onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">星期五</th>";
echo "</tr>";
$grade=info_grade($_COOKIE["username"]);
$class=info_class($_COOKIE["username"]); 
for($i=1; $i<=5; $i++)
{
    $sql = "SELECT name FROM school_class_list WHERE grade='$grade' AND class='$class' AND num='$i'";
    mysqli_query($conn,"set names utf8");
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
    echo "<tr>"; 
    echo "<th onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">{$i}</th>";   
        while($row = $result->fetch_assoc()) {
            echo "<td onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">".$row["name"]."</td>";
        }
    echo "</tr>";
    } else {
    echo "PHP debug：数据表sckechenglist为空";
    }
}
echo "<div>";
echo "<table border='1'>";
echo "<tr>";
echo "<th onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">序号</th>";
echo "<th onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">开始时间</th>";
echo "<th onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">结束时间</th>";
$sql = "SELECT num,start,end FROM kecheng_time ORDER BY id";
    mysqli_query($conn,"set names utf8");
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
     
        while($row = $result->fetch_assoc()) { 
            echo "<tr>";
            echo "<td onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">".$row["num"]."</td>";
            echo "<td onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">".$row["start"]."</td>";
            echo "<td onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">".$row["end"]."</td>";
            echo "</tr>";
        }
    } else {
    echo "PHP debug：数据表sckechenglist_time为空";
    }

$conn->close();
?>
</body>
</html>