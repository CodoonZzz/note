<?php 
function postback(){
    //申明message是全局变量
    global $message;
    //判定下如果不符合规则，则输出相应内容
    if (empty($_POST['username'])) {
        //没有提交用户名或用户名为空
        $message= "用户名为空";
        return;
    }
    if (empty($_POST['password'])) {
        $message= "请输入密码";
        return;
    }
    if (empty($_POST['confirm'])) {
        $message= "请输入确认密码";
        return;
    }
    if ($_POST['password']!==$_POST['confirm']) {
        echo "两次密码不一致";
        return;
    }
    if (!(isset($_POST['agree'])&&$_POST['agree']==='true')) {
        $message= "必须同意注册协议";
        return;
    }

    $username=$_POST['username'];
    $password=$_POST['password'];
    //这里判定是否用户名已存在，所以需要获取下文本内容
    $data_content = file_get_contents('../zhuce.txt');
    // 先进行判定
    if(empty($data_content)){
        // 如果文本为空，则创建一个新的数组,供后面使用
        $data_content = array();
    }else{
        // 如果不为空，就把文本里的字符串转化为数组
        $data_content = json_decode($data_content,true);
        // 然后在这里进行遍历 看是否有username重复
        foreach($data_content as $value){
            // 如果相同，则返回用户名已存在
            if($value['username']===$username){
                $message= "用户名已存在";
                return;
            }
        }
    };
    
    // 校验完成
    // 经过以上检查 确认用户名密码都符合规格，则向旧数组添加新的用户名密码
    array_push($data_content,array('username'=>$username,'password'=>$password));
    // 将这个数组转化为JSON格式
    $data_content = json_encode($data_content);
    // 将新的数据替换旧文本
    file_put_contents('../zhuce.txt',$data_content);
    $message= "注册成功";
       
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
    <title>注册</title>
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
                <tr>
                    <td><label for="confirm">确认密码：</label></td>
                    <td><input type="password" name="confirm" id="confirm"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><label ><input type="checkbox" name="agree" value="true">同意注册协议</label></td>
                </tr>
                <?php if (isset($message)): ?>
                    <tr>
                        <td></td>
                        <td><?php echo $message ?></td>
                    </tr>
                <?php endif ?>
                <tr>
                    <td></td>
                    <td><button>注册</button></td>
                </tr>
            </table>
        </form>
</body>
</html>