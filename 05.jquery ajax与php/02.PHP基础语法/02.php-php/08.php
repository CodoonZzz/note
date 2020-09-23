
<?php 
// header('Content-Type:text/plain;charset=utf-8');
// // $path = public_path() . "zhuce.txt";
// //要匹配的字段
// $str = file_get_contents('zhuce.txt');
// echo $str;
// $srr = '{"username1":'.'"sxy"'.',"password":'.'"123"'.'}';
// echo $srr;

// echo "\n";
// echo strpos($str, $srr);
// if(strpos($str, $srr)===false){
//     echo '匹配成功';
// }else{
//     echo '匹配失败';

function postback(){
    //申明message是全局变量
    global $message;
    $username=$_POST['username'];
    $password=$_POST['password'];
    if (empty($username)) {
        //没有提交用户名或用户名为空
        $message= "用户名为空";
        return;
    }
    if (empty($password)) {
        $message= "请输入密码";
        return;
    }
    // 用户输入进来用户名密码检验完成后获取文本数据并转化为数组
    $data_content = json_decode(file_get_contents('../zhuce.txt'),true) ;
    // 进行遍历
    foreach($data_content as $value){
        // 进行判定
        // 如果有匹配成功的的输出登录成功，并停止函数
        if($value['username']===$username&&$value['password']===$password){
            $message= "登录成功";
            return;
        }
    };
    // 如果遍历完都没有匹配成功的，则输出用户名密码错误
    $message = "用户名密码错误";       
}
//接受用户提交的数据，保存到文件
//1.接受并校验
if ($_SERVER['REQUEST_METHOD']==='POST') {
    postback();
}
//2.持久化
//3.响应（反馈）
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table border="1">
                <tr>
                    <td><label for="username">用户名:</label></td>
                    <td><input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>"></td>
                </tr>
                <tr>
                    <td><label for="password">密码：</label></td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <?php if (isset($message)): ?>
                    <tr>
                        <td></td>
                        <td><?php echo $message ?></td>
                    </tr>
                <?php endif ?>
                <tr>
                    <td></td>
                    <td><button>登录</button></td>
                </tr>
            </table>
        </form>
</body>
</html>