<?php
require_once("../api/user.php");
$dbhost = 'sql103.xiaopangkj.space';  // mysql服务器主机地址
$dbuser = 'xiaop_30259055';            // mysql用户名
$dbpass = 'iostream';          // mysql用户名密码
$dbname = 'xiaop_30259055_school';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(!$conn)
{
    die('连接失败: ' . mysqli_error($conn));
}
// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");
 
$sql = 'SELECT grade,class,name,jf FROM userlogin
        ORDER BY jf DESC';
 
//mysqli_select_db( $conn, $conn );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('无法读取数据: ' . mysqli_error($conn));
}
echo '<div style="margin-top:0.5cm;margin-left:0.5cm;"';
echo '<h2>沈采学校积分排名<h2>';
echo '<table border="1"><tr><td>年级</td><td>班级</td><td>姓名</td><td>积分</td></tr>';
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
{
    echo "<tr><td> {$row['grade']}</td> ".
         "<td>{$row['class']} </td> ".
         "<td>{$row['name']} </td> ".
         "<td>{$row['jf']} </td> ".
         "</tr>";
}
echo '</table></div>';
//grade
$grade = info_grade($_COOKIE["username"]);
$sql = "SELECT class,name,jf FROM userlogin WHERE grade='{$grade}' ORDER BY jf DESC";
 
//mysqli_select_db( $conn, $conn );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('无法读取数据: ' . mysqli_error($conn));
}
echo '<div style="margin-top:-3cm;margin-left:5.5cm;"';
echo '<h2>年级积分排名<h2>';
echo '<table border="1"><tr><td>班级</td><td>姓名</td><td>积分</td></tr>';
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
{
    echo "<tr> ".
         "<td>{$row['class']} </td> ".
         "<td>{$row['name']} </td> ".
         "<td>{$row['jf']} </td> ".
         "</tr>";
}
echo '</table></div>';
//class
$grade = info_grade($_COOKIE["username"]);
$class = info_class($_COOKIE["username"]);
$sql = "SELECT name,jf FROM userlogin WHERE grade='{$grade}' AND class='{$class}' ORDER BY jf DESC";
 
//mysqli_select_db( $conn, $conn );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('无法读取数据: ' . mysqli_error($conn));
}
echo '<div style="margin-top:-3cm;margin-left:9.5cm;"';
echo '<h2>班级积分排名<h2>';
echo '<table border="1"><tr><td>姓名</td><td>积分</td></tr>';
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
{
    echo "<tr> ".
         "<td>{$row['name']} </td> ".
         "<td>{$row['jf']} </td> ".
         "</tr>";
}
echo '</table></div>';
mysqli_close($conn);
?>