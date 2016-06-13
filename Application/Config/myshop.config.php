<?php
/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/4/23
 * Time: 18:59
 */

return array(
    "db"=>array(
        'host'=>'localhost',
        'port'=>'3306',
        'user'=>'root',
        'password'=>'123456',
        'charset'=>'utf8',
        'dbName'=>'member'
    ),
    "app"=>array(
        'platFrame'=>'Admin',
        'controllerName'=>'members',
        'method'=>'login'
        /*'platFrame'=>'Home',
        'controllerName'=>'Index',
        'method'=>'show'*/
    ),
    "thumb"=>array(
        "width"=>100,
        "height"=>150,
        "savePath"=>"./Public/Thumb/",
        "pre"=>"thumb_"
    ),
    "upload"=>array(
        'maxSize'=>2048000,
        'path'=>"./Public/Upload/",
        'pre'=>"user_"
    )
);