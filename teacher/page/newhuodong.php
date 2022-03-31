<html>
    <head>
        <meta charset="utu-8">
        <title>添加活动</title>
    </head>
    <body>
        <form action="new_huodong.php" method="post">
        <input type="text" name="name" autofocus required placeholder="请输入要添加的活动的名称"/><br>
        <input type="text" name="href" required placeholder="请输入要添加的活动的地址"/><br>
        <input type="text" name="grade" required pattern="[1-9]{1}" placeholder="请输入要添加的活动的年级"/><br>
        <input type="text" name="class" required pattern="[1-3]{1}" placeholder="请输入要添加的活动的班级"/><br>
        <input type="submit" value="确定" />
        </form>
    </body>
</html>