<?php
    // 如果HTML在本地要访问这个服务器，那就牵扯跨域，后面详解
    // 如果吧html和php都放在服务器中跑，就不用写
    header("Access-Control-Allow-Origin:*");
    
    // gat请求获取之后，我们先对数据进行解码
    $username = urldecode($_GET['username']);
    $password = urldecode($_GET['password']);

    if($username==='sxy'&&$password==='123'){
        echo 0;
    }else{
        echo 1;
    }
?>