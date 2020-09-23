<?php
    header("Access-Control-Allow-Origin:*");
    // post请求我们需要获取相应的name值
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username==='sxy'&&$password==='123'){
        echo 0;
    }else{
        echo 1;
    }
?>