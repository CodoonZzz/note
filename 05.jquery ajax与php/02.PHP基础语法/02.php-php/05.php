<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>get请求</title>
</head>
<body>
    <?php
        // http协议常用的请求方式：（增删改查）
        // get         获取数据
        // post        添加数据
        // put         修改数据
        // delete      删除数据
        // 其中前两个是前端最常用的
        // 对于一个url地址，get请求会得到其中传递参数的值
        // 如：当前页面是如果是：http://localhost/01.php/05.php?abc=1
        // 那么使用get就可以获取1
        $abc = $_GET['abc'];
        if($abc==1){
            echo '<p>'.$abc.'</p>';
        }else{
            echo '<p>参数错误</p>';
        }
    ?>
</body>
</html>