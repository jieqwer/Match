<meta charset="UTF-8">
<?php
session_start();
$name=$_POST["name"];
$position=$_POST["position"];
$sex=$_POST["sex"];
$tel=$_POST["tel"];
$password=md5($_POST['password']);
$password1=md5($_POST['password1']);

include_once("opensql.php");

if(empty($_POST['code'])){
    echo '<script type="text/javascript">alert("你没有输入验证码，请输入");</script>';
    header('refresh:0;url=login.php');
    die();
}else{
    $code=$_POST['code'];
}

if(!(strtolower($code)==strtolower($_SESSION['code1']))){
    echo '<script type="text/javascript">alert("验证码错误，请重新输入");</script>';
    header('refresh:0;url=login.php');
    exit();
}else{
    if(!preg_match("/^[a-zA-Z\d]{6,}$/", $password)){
        header("refresh:0;url=login.php");
        echo '<script>alert("密码格式有误");</script>';
        exit;
    }else{
        if($password!=$password1){
            echo '<script type="text/javascript">alert("两次密码不一致，请重新输入");</script>';
            header('refresh:0;url=login.php');
            exit();
        }else{
                $sql = "insert into tb_consumer(name,password,position,sex,tel) values('$name','$password1','$position','$sex','$tel')";
                $result = mysql_query($sql);
                if (!$result) {
                    echo '<script>alert("系统错误，用户注册失败，请稍后重试");</script>';
                    header("refresh:1;url=login.php");
                } else {
                    echo '<script>alert("用户注册成功");</script>';
                    header("refresh:1;url=login.php");
                }

        }
    }

}



?>