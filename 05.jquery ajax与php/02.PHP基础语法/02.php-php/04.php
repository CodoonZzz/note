<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP中的函数</title>
</head>
<body>
    <?php
        // 在PHP中的自定义函数与JS类似,但要注意 形参需要使用$来声明
        // 在php中也有js中的预处理 所以我们完全可以和JS中一样先调用
        foo('hi'); 
        // php中，函数名不区分大小写，比如这里写FOO('hi)也是执行的
        function foo($int){
            echo $int;  // 与循环一样 这里是必须要写分号的
        };


        // PHP中系统的函数要说的是enjson方法
        $arr = array('a'=>111,'b'=>222,'c'=>333);
        echo json_encode($arr) //{"a":111,"b":222,"c":333}
        // 可见这个方法把PHP中的数组改成了json标准格式：对象
    ?>
</body>
</html>