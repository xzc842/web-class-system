<?php
require_once("../api/user.php");
?>
<html>
    <body>
        <div style="background-color:#00BFFF;height:50px;width:1200px;margin-top:0.5cm;margin-left:0cm;">
        <h3>个人信息</h3>
        </div>
        <div style="background-color:#FFFFFF;height:100px;width:1200px;margin-top:0cm;margin-left:0cm;">
        <h5>用户名：&nbsp;&nbsp;<?php echo $_COOKIE["username"];?></h5>
        <h5>姓名：<?php echo info_name($_COOKIE["username"]);?></h5>
        <h5>邮箱：<?php echo info_email($_COOKIE["username"]);?></h5>
        </div>
    </body>
</html>