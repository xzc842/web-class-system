<html>
 
    <body>
<?php
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
 
$sql = "SELECT id, firstname, lastname FROM school_class_list";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
echo "<table border='1'>";
echo "<tr>";
echo "<th>   </th>";
echo "<th>星期一</th>";
echo "<th>星期二</th>";
echo "<th>星期三</th>";
echo "<th>星期四</th>";
echo "<th>星期五</th>";
echo "</tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["a"]."</td>";
        echo "<td>".$row["b"]."</td>";
        echo "<td>".$row["c"]."</td>";
        echo "<td>".$row["d"]."</td>";
        echo "<td>".$row["e"]."</td>";
        echo "</tr>";
    }
} else {
echo "PHP debug：数据表sckechenglist为空";
}
$conn->close();
?></body>
</html>