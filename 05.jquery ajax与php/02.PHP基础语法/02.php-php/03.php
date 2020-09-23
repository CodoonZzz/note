<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>数据类型与遍历</title>
</head>
<body>
    <?php
        // 在js中判断数据类型是使用tpyeof来辨别
        // 在PHP中我们使用gettype方法来判断
        $num = 123;
        $string = 'sss';
        $flag = true;
        $flot = 1.2;
        $n = null;
        $arr = array(1,2,3);

        echo gettype($num); //integer
        echo '<br>';
        echo gettype($string); //string
        echo '<br>';
        echo gettype($flag); //boolean
        echo '<br>';
        echo gettype($flot); //double
        echo '<br>';
        echo gettype($n); //NULL
        echo '<br>';
        echo gettype($arr); //array
        echo '<br>';


        // 遍历：
        // 遍历方法可以使用与JS相类似的for循环来遍历
        // 需要知道的是，在PHP获取数组长度需要使用count()来计算数组长度
        $arr1 = array(123,234,345);
        echo count($arr1); // 3
        echo '<br>';


        // 所以使用for循环则是：
        for($i=0;$i<count($arr1);$i++){
            echo $arr1[$i].'<br>'; // 在PHP中for循环中的分号一定要加上
        };





        // 不过在php中也有专门遍历的方法 类似for in
        foreach($arr1 as $val){
            echo $val.'<br>';
        };
        // 但是这种foreach as 的写法与for in遍历括号中相反，这个是对象在前，索引在后

        

        $arr2 = array('usename'=>'sxy','age'=>22);
        // 如果自定义键名怎么foreach as遍历
        // 方法与之前相同，但是需要自定义一下键名的索引
        foreach($arr2 as $key=>$val){
            echo $key.'====>'.$val.'<br>';
        }

    ?>
</body>
</html>