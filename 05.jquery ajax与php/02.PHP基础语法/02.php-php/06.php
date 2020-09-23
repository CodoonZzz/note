
<?php
    // post请求
    // 首先约定一下编码，否则乱码
    header('Content-Type:text/plain;charset=utf-8');
    // 与GET请求差不多，然后判断就好
    // 这里是获取表单中的name值
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username=='sxy'&&$password==123456){
        echo '登录成功';
    }else{
        echo '用户名密码不正确';
    }
?>