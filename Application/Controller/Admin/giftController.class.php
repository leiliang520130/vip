<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/17
 * Time: 14:01
 */
class giftController extends platController
{
    public function listAction(){
        $model = new giftModel();
        $rows = $model->getAll();
        $this->assign('rows',$rows);
        $this->display("gift/gift.html");
    }
    public function addAction(){
        $post=$_POST;
        $file=$_FILES['file'];
        $upload = new FileUpLoadTool();
        $name = $upload->upload($file);
        $post['img']=$name;
        $model = new giftModel();
        if($model->insertValues($post)){//判断返回结果
            static::jump("index.php?p=Admin&c=gift&a=list");
        }else{
            static::jump("index.php?p=Admin&c=gift&a=list",3,'添加失败');
        }
        
    }
    public function editAction(){
        $post=$_POST;
        $file = $_FILES['file'];//获取文件
        if(!empty($file['name'])){
            $upload = new FileUpLoadTool();//实例化
            $name = $upload->upload($file);//拿到文件名字
            $post['img'] = $name;////把文件名字加入到post里以便添加数据
        }
        $model=new giftModel();
        if($model->modify($post)){//判断返回结果
            static::jump("index.php?p=Admin&c=gift&a=list");
        }else{
            static::jump("index.php?p=Admin&c=gift&a=list",3,'修改失败');
        }
    }
    public function removeAction(){
        $id=$_GET['id'];
        $model = new giftModel();
        if($model->delete($id)){//判断返回结果
            static::jump("index.php?p=Admin&c=gift&a=list");
        }else{
            static::jump("index.php?p=Admin&c=gift&a=list",3,'删除失败');
        }
    }

}