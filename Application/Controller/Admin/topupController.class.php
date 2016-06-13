<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/13
 * Time: 13:27
 */
class topupController extends platController
{

    public function listAction(){
        $model=new topupModel();
        $rows=$model->getAll();
        $this->assign('rows',$rows);
        $this->display("topup/topup.html");
    }
    public function addAction(){
        $post=$_POST;
        $model=new topupModel();
        if($model->insertValues($post)){
            static::jump("index.php?p=Admin&c=topup&a=list");
        }else{
            static::jump("index.php?p=Admin&c=topup&a=list",2,"添加失败");
        }
    }
    public function removeAction(){
        $id=$_GET['id'];
        $model=new topupModel();
        if($model->delete($id)){
            static::jump("index.php?p=Admin&c=topup&a=list");
        }else{
            static::jump("index.php?p=Admin&c=topup&a=list",2,"添加失败");
        }
    }
    public function editAction(){
        $post=$_POST;
        $model=new topupModel();
        if($model->modify($post)){
            static::jump("index.php?p=Admin&c=topup&a=list");
        }else{
            static::jump("index.php?p=Admin&c=topup&a=list",2,"修改失败");
        }
    }
}