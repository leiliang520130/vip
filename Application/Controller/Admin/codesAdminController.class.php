<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/11
 * Time: 14:52
 */
class codesAdminController extends platController
{
    private $name;
    private function nameAction(){//获取显示的会员名
        $model=new codesModel();
        $model1=new usersModel();
        $rows=$model->getlist("*","status='未使用'");
        foreach ($rows as $key=>$row){
           $rowu=$model1->getRow($row['user_id']);
            $rows[$key]['username']=$rowu['username'];
        }
        $this->name=$rows;
    }

    public function listAction(){
        $model=new usersModel();//获取添加所有会员姓名
        $rowu=$model->getAll();
        $this->nameAction();
        $rows=$this->name;
        $key=uniqid("VS");
        $this->assign('rows',$rows);
        $this->assign('rowu',$rowu);
        $this->assign('key',$key);
        $this->display("codes/codes.html");
    }
    public function addAction(){//添加
        $post=$_POST;
        $model=new codesModel();
        if ($model->insertCode($post)) {//判断
            static::jump("index.php?p=Admin&c=codesAdmin&a=list");exit;
        } else {
            static::jump("index.php?p=Admin&c=codesAdmin&a=list",3,"添加失败");
            exit;
        }
    }
    public function removeAction(){//删除
        $id=$_GET['id'];
        $model=new codesModel();
        if ($model->removeCode($id)) {//判断
            static::jump("index.php?p=Admin&c=codesAdmin&a=list");exit;
        } else {
            static::jump("index.php?p=Admin&c=codesAdmin&a=list",3,"添加失败");
            exit;
        }
    }
    public function editAction(){
        $post=$_POST;
        $model=new codesModel();
        if ($model->editCode($post)) {//判断
            static::jump("index.php?p=Admin&c=codesAdmin&a=list");exit;
        } else {
            static::jump("index.php?p=Admin&c=codesAdmin&a=list",3,"修改失败");
            exit;
        }
    }

}