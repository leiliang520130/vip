<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/5/9
 * Time: 18:28
 */
class usersController extends userPlatController{
    public function showAction(){
        $this->display("index.html");
//        echo 123;
    }
    public function loginAction(){
        $this->display("login.html");

    }
    //退出页面
    public function loginOutAction(){
        unset($_SESSION['isLogin']);
        unset($_SESSION['code']);
        if(isset($_COOKIE['id']) && $_COOKIE['pwd']){
            setcookie("id",$_COOKIE['id'],time()-1);
            setcookie("pwd",$_COOKIE['id'],time()-1);
        }
        static::jump("index.php?p=Admin&c=members&a=login",3,"退出成功3秒后跳转!");
    }
    //登陆验证方法
    public function checkAction(){
        //session_start();
        new sessionDBTool();
        $post = $_POST;
        $model = new usersModel();
        $row = $model->check($post);
        if(!CaptchaTool::checkCode($post['code'])){
           /* static::jump("index.php?p=Admin&c=members&a=login",3,"验证码错误!");
            exit;*/
            echo "<script>alert('验证码错误!');location.href='index.php?p=Admin&c=members&a=login';</script>";
            exit;
        }
       
        if($row){
            $_SESSION['isLogin'] = false;
            /*setcookie("name",$row['realname']);
            setcookie("username",$row['username']);
            setcookie("user_id",$row['user_id']);*/
            $_SESSION['name'] = $row['realname'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['user_id'];
            if(isset($_POST['remember'])){
                setcookie("id",$row['user_id'],time()+3600);
                setcookie("pwd",md5($row['password']),time()+3600);
            }else{
                setcookie("id",$row['user_id'],time()-1);
                setcookie("pwd",md5($row['password']),time()-1);
            }
            static::jump("index.php?p=Home&c=article&a=list");
        }else{
            static::jump("index.php?p=Admin&c=members&a=login",2,"用户名或密码错误!");
        }
    }
}