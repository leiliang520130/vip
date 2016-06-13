<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/4/27
 * Time: 0:46
 */
class userPlatController extends Controller{
    public function __construct()
    {
        //统一入口文件

        parent::__construct();
        if(PLATFROM == "Home" && CONTROLLER == "users" && in_array(ACTION,array('login','check'))){
            return;
        }

        //session_start();
        new sessionDBTool();
        //进行session的判断
        if(!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] != false){
            if(isset($_COOKIE['id']) && isset($_COOKIE['pwd'])){
                $model = new usersModel();
                $id = $_COOKIE['id'];
                $row = $model->getRow($id);
                if(md5($row['password']) == $_COOKIE['pwd']){
                    $_SESSION['isLogin'] = false;
//                    $this->display("index.html");
                }else{
                    static::jump("index.php?p=Admin&c=members&a=login");
                }
            }else{
                //cookie不存在
                static::jump("index.php?p=Admin&c=members&a=login");
            }
        }

    }
}