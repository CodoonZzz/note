<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php中的数组与处理较复杂的数据输出方式</title>
</head>
<body>
    <?php
        // php中创建数组的方式和JS中构造函数有点像
        $arr = array(1,2,3,4);

        // 而在输出整个数组时 不能再使用each，each只能处理简单数据，输出数组要使用 print_r()
        print_r($arr); //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )

        // 而要访问某一个键值时和JS类似，使用[]就行
        // 要访问数组中某个键值的时候 使用echo也可以
        echo $arr[0]; //输出1

        // 如果在不自定义键的时候，默认是是0，1，2...，在PHP中是可以自定义键的
        $arr1 = array('name'=>'sxy',123,'age'=>'22',456);
        print_r($arr1); //Array ( [name] => sxy [0] => 123 [age] => 22 [1] => 456 )
        // 由此可以看出 如果在自定义中又使用默认的键，那么会从0重新开始记录、
        // 当然 如果要是需要访问自定义键，就在[]中输入自定义的键就好


        // 还有一个输出方式
        var_dump($arr1);
        // array (size=4)
        // 'name' => string 'sxy' (length=3)
        // 0 => int 123
        // 'age' => string '22' (length=2)
        // 1 => int 456
        // var_dump在使用的时候会把数据的详细信息也打印出来，在我们调试的时候可以使用
        // 但是在实际使用过程中也不是很常用




        // -------------------------二维数组---------------------------------------------------
        $arr2 = array(array(1,2,3),array(4,5,6),array(7,8,9));
        print_r($arr2);
        // 对于二位数组我们可以这样写
        // 也可以一条一条加
        $arr3 = array();
        // Array ( 
        //     [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) 
        //     [1] => Array ( [0] => 4 [1] => 5 [2] => 6 ) 
        //     [2] => Array ( [0] => 7 [1] => 8 [2] => 9 ) )


        echo '<br>';



        $arr3[0] = array('sss','yyy','zzz');
        $arr3[1] = array('aaa','bbb','ccc');
        $arr3[2] = array('mmm','nnn');
        print_r($arr3);
        // Array ( 
        //     [0] => Array ( [0] => sss [1] => yyy [2] => zzz ) 
        //     [1] => Array ( [0] => aaa [1] => bbb [2] => ccc ) 
        //     [2] => Array ( [0] => mmm [1] => nnn ) )


        // 当然也可以这样：
        $arr3['apple'] = array('color'=>'red','shape'=>'round');
        print_r($arr3['apple']);
        //Array ( [color] => red [shape] => round )

    ?>
</body>
</html>