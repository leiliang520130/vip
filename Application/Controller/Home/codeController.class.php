<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/11
 * Time: 16:47
 */
class codeController extends userPlatController
{
    public function listAction(){
        $model=new usersModel();
        $name=$_SESSION['username'];
        $rows=$model->getOne("*","username='$name'");
        $id=$rows['user_id'];
        $model=new codesModel();
        $rowc=$model->getAll("*","user_id=$id and status='未使用'");
        $this->assign('rowc',$rowc);
        $this->display("code/code.html");
    }
}