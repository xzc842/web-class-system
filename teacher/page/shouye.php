<html>
    <body>
    <div id="class" class="yuanjiaoback" style=" border-radius: 25px;padding: 20px;margin-top:0.5cm;margin-left:0.5cm;background-color:#87CEEB;height:100px;width:200px">
        <a herf="class/video.php" class="yuanjiaoback" style=" border-radius: 25px;padding: 20px;margin-top:5.5cm;margin-left:0.5cm;background-color:#00FF00">进入教室</a>
        <br>
        <h5 id="next_class">下一节:</h5>
    </div>
    <div class="yuanjiaoback" style=" border-radius: 25px;padding: 20px;margin-top:-2.5cm;margin-left:23.5cm;background-color:#F5DEB3;height:550px;width:200px">
        <h1 style="margin-top:-0.5cm;margin-left:0.5cm;">公告栏</h1>
        <script type='text/javascript'>
        function new_window(){
        window.open ('new_gonggao.php', '发布公告', 'height=600, width=1000, top=50,left=50, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no,status=no'); 
        }
        </script> 
        <button style='margin-top:0cm;margin-left:0cm;' onclick="new_window();">发布公告</button>
        <div id="gonggaolist" style="border-radius: 25px;padding: 20px;margin-top:0.5cm;margin-left:-0.1cm;background-color:#FFA500;height:430px;width:160px">
             
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
$sql = "SELECT head FROM gonggao";
    mysqli_query($conn,"set names utf8");
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
        echo "<ol>";
        while($row = $result->fetch_assoc()) {
            $head = $row["head"];
            echo "<li><a href='gonggao.php?head={$head}'>{$head}</a></li>";
        }
        echo "</ol>";

    } else {
    echo "<h3>暂无公告</h3>";
    }
?>
             
        </div> 
    </div>  
    <div style="margin-top:-10.5cm;margin-left:0.5cm;background-color:#F5F5F5;height:200px;width:700px">
        <iframe src="gongzuotai.php" height="200px" width="700px">
        
        </iframe>
    </div>     
    </body>
</html>