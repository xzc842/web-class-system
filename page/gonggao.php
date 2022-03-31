<html>
    <body>
        <div style="background-color:#00FFFF;height:50px;width:1200px;">
          <div>
          <a href="shouye.php">返回首页</a>
          <?php  
          require_once("../api/user.php");
          require_once("../teacher/api/user.php");
          $id=$_GET["id"];
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
$sql = "SELECT name,head FROM gonggao";
    mysqli_query($conn,"set names utf8");
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name=$row["name"];
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["head"]."&nbsp;&nbsp;&nbsp;<br>";
        $user=info_name($name);
        $teacher=teacher_info_name($name);
        if($user != "error" && $teacher == "error"){
            echo "发布者：{$user}";
        }elseif($user == "error" && $teacher != "error"){
            echo "发布者：{$teacher}";
        }else{
            echo "发布者未知";
        }
    }
          ?>
          </div>
        </div>
        <div>
<?php  
          
          $id=$_GET["id"];
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
$sql = "SELECT body,class FROM gonggao";
    mysqli_query($conn,"set names utf8");
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {
        if($row["class"]==1){
            echo "<h5 style='color:#A9A9A9;'>------------------------------------------------------[page:type/html]------------------------------------------------</h5>";
            echo $row['body']; //echo "<iframe style='height:800px;width:1200px;'>{$row['body']}</iframe>";
        }else{
            echo $row['body'];
        }
    }
          ?>
          </div>
    </body>
</html>