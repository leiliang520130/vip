<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/4/25
 * Time: 17:38
 */
class Frame{
    public static function run(){
        self::initPath();
        self::initConfig();
        self::initParam();
        self::classMapping();
        self::iniAutoload();
        self::dispatcher();

    }
    protected static function initPath(){
//---------目录定义------------
//定义分隔符
        defined("DS") or define("DS",DIRECTORY_SEPARATOR);
//站点根目录
        defined("ROOT_PATH") or define("ROOT_PATH",dirname($_SERVER["SCRIPT_FILENAME"]).DS);
//应用程序路径
        defined("APP_PATH") or define("APP_PATH",ROOT_PATH."Application".DS);
//框架路径
        defined("FRAME_PATH") or define("FRAME_PATH",ROOT_PATH."Framework".DS);
//控制器路径
        defined("CONTROLLER_PATH") or define("CONTROLLER_PATH",APP_PATH."Controller".DS);
//Model路径
        defined("MODEL_PATH") or define("MODEL_PATH",APP_PATH."Model".DS);

//视图路径
        defined("VIEW_PATH") or define("VIEW_PATH",APP_PATH."View".DS);

//配置文件路径
        defined("CONFIG_PATH") or define("CONFIG_PATH",APP_PATH."Config".DS);

//工具路径
        defined("TOOL_PATH") or define("TOOL_PATH",FRAME_PATH."Tool".DS);
    }
    protected static function initConfig(){
        $GLOBALS['config'] = require CONFIG_PATH."myshop.config.php";
    }
    protected static function initParam(){
//获取平台
        $platFrom = isset($_GET['p'])?$_GET['p']:$GLOBALS['config']['app']['platFrame'];
//平台路径
        defined("PLATFROM") or define("PLATFROM",$platFrom);
        defined("CURRENT_CONTROLLER_PATH") or define("CURRENT_CONTROLLER_PATH",CONTROLLER_PATH.$platFrom.DS);
        defined("CURRENT_VIEW_PATH") or define("CURRENT_VIEW_PATH",VIEW_PATH.$platFrom.DS);
//获取控制器
        $Controller = isset($_GET['c'])?$_GET['c']:$GLOBALS['config']['app']['controllerName'];
//获取方法名称
        defined("CONTROLLER") or define("CONTROLLER",$Controller);
        $method = isset($_GET['a'])?$_GET['a']:$GLOBALS['config']['app']['method'];
//拼接控制器名称
        defined("ACTION") or define("ACTION",$method);
        $GLOBALS['ControllerName'] = $Controller."Controller";
        $GLOBALS['actionName'] = $method."Action";
    }
    protected static function classMapping(){
        $GLOBALS['mapping'] = array(
            "DB"=>TOOL_PATH."DB.class.php",
            "Model"=>FRAME_PATH."/Model.class.php",
            "Controller"=>FRAME_PATH."/Controller.class.php"
        );
    }
    protected static function iniAutoload(){
        //自动加载注册类
        spl_autoload_register("self::userAutoload");
    }
    protected static function userAutoload($class){
        if(isset($GLOBALS['mapping'][$class])){
            require $GLOBALS['mapping'][$class];
        }elseif(substr($class,-10) == "Controller"){
            require CURRENT_CONTROLLER_PATH.$class.".class.php";
        }elseif(substr($class,-5) == "Model"){
            require MODEL_PATH.$class.".class.php";
        }elseif(substr($class,-4) == "Tool"){
            require TOOL_PATH.$class.".class.php";
        }
    }
    protected static function dispatcher(){
//创建一个控制器
        $myController = new $GLOBALS['ControllerName'];
//拼接方法

//调用对应方法
        $myController->$GLOBALS['actionName']();
    }

}