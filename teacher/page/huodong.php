<?php
$servername = "sql103.xiaopangkj.space";
$username = "xiaop_30259055";
$password = "iostream";
$dbname = "xiaop_30259055_school";
require_once("../../api/user.php"); 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$grade=info_grade($_COOKIE["username"]);
$class=info_class($_COOKIE["username"]); 
$group=info_group($_COOKIE["username"]);
$sql = "SELECT user,head,body FROM huodong";
    mysqli_query($conn,"set names utf8");
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
        echo "<div style='margin-top:0.5cm;margin-left:1cm;background-color:#808080;height:20px;width:500px;'>
              <h5>&nbsp;活动名称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;创建者&nbsp;&nbsp;&nbsp;</h5>
        </div> 
        <script type='text/javascript'>
        function delete_window(){
        window.open ('delete.php', '删除活动', 'height=500, width=500, top=50,left=50, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no,status=no'); 
        }
        function new_window(){
        window.open ('newhuodong.php', '添加活动', 'height=500, width=500, top=50,left=50, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no,status=no'); 
        }
        </script> 
        <button style='margin-top:0cm;margin-left:10cm;' onclick=\"new_window();\">添加活动</button>
        <button style='margin-top:-0.6cm;margin-left:0cm;' onclick=\"delete_window();\">删除活动</button>";
        while($row = $result->fetch_assoc()) {
            echo "<div style=\'margin-left:1.5cm;background-color:#FFE4C4;height:70px;width:500px;\'>
            <nobr><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['head']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['user']}&nbsp;&nbsp;&nbsp;</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"http://scschool.xiaopangkj.space/{$row['body']}\" target=\"_blank\">进入活动</a></nobr>
            
            </div>";
        }
    } else {
    echo "<div style='margin-top:0.5cm;margin-left:1cm;background-color:#808080;height:20px;width:500px;'>
              <h5>&nbsp;活动名称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;创建者&nbsp;&nbsp;&nbsp;</h5>
        </div>
        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;暂无活动</h5>
        <script type='text/javascript'>
        function new_window(){
        window.open ('newhuodong.php', '添加活动', 'height=500, width=500, top=50,left=50, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no,status=no'); 
        }
        </script>
        <button style='margin-top:-1cm;margin-left:13cm;' onclick=\"new_window();\">添加活动</button>
        ";
        
    }
?>