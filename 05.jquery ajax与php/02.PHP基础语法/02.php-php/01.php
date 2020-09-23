<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>初识PHP，变量声明与字符</title>
</head>
<body>
    <!-- 对于PHP 要把代码放在<?php ?>中 -->
    <!-- 输出 要使用 echo '' -->
    <?php echo '<div>欢迎</div>' ?>


    <!-- 在PHP中声明变量要使用$ 拼接字符串要使用. -->
    <?php
        // 这里的分号必须写上 不然会出错
        $num = 1234;
        echo '<div>'.$num.'</div>';
        // php中单引号与双引号不同，单引号会将一段代码处理成字符串
        // 但双引号中，如果有变量，那么会将变量解析
        echo "<div>$num</div>"
    ?>

    
</body>
</html>