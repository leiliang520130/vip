<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/4/27
 * Time: 0:46
 */
class platController extends Controller{
    public function __construct()
    {
        //统一入口文件

        parent::__construct();
        if(PLATFROM == "Admin" && CONTROLLER == "members" && in_array(ACTION,array('login','check','content'))){
            return;
        }

        //session_start();
        new sessionDBTool();
        //进行session的判断
        if(!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] != true){
            if(isset($_COOKIE['id']) && isset($_COOKIE['pwd'])){
                $model = new membersModel();
                $id = $_COOKIE['id'];
                $row = $model->getRow($id);
                if(md5($row['password']) == $_COOKIE['pwd']){
                    $_SESSION['isLogin'] = true;
                    $this->display("index.html");
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