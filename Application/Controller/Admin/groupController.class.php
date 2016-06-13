<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/5/10
 * Time: 9:13
 */
class groupController extends platController{
    public function listAction(){
        $model = new groupModel();
        $rows = $model->getAll();
        $this->assign("rows",$rows);
        $this->display("./group/group.html");
    }
    public function insertAction(){
        $post = $_POST;
        $model = new groupModel();
        if($model->insert($post)){
            static::jump("index.php?p=Admin&c=group&a=list");
        }else{
            static::jump("index.php?p=Admin&c=group&a=list",3,"部门已存在");
        }
    }
    public function removeAction(){
        $id = $_GET['id'];
        $membersModel = new membersModel();
        if($membersModel->getOne("*","group_id = $id")){
            static::jump("index.php?p=Admin&c=group&a=list",3,"部门还要员工");
        }
        $model = new groupModel();
        if(!$model->remove($id)){
            static::jump("index.php?p=Admin&c=group&a=list",3,"删除失败");
        }else{
            static::jump("index.php?p=Admin&c=group&a=list");
        }
    }
    public function updateAction(){
        $post = $_POST;
        $model = new groupModel();
        if($model->update($post)){
            static::jump("index.php?p=Admin&c=group&a=list");
        }else{
            static::jump("index.php?p=Admin&c=group&a=list",1,"部门已存在");
        }
    }
}