<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/13
 * Time: 12:30
 */
class vipController extends platController
{

    public function listAction(){
        $model=new vipModel();
        $rows=$model->getAll();
        $this->assign("rows",$rows);
        $this->display("vip/vip.html");
    }
    public function editAction(){
        $post=$_POST;
        $model=new vipModel();
        if($model->modify($post)){
            static::jump("index.php?p=Admin&c=vip&a=list");
        }else{
            static::jump("index.php?p=Admin&c=vip&a=list",3,"修改失败");
        }

    }
}