<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/10
 * Time: 14:07
 */
class usersAdminController extends platController
{
    public function listuserAction(){//显示会员管理
        
        $pageSize = 4;//每页显示条数
        $showPage = 5; //页码
        //获取分页参数
        $page = isset($_GET['page'])?$_GET['page']:1;
        //$GLOBALS['page'] = $page;
        $keyword = isset($_GET['search']) ? $_GET['search']:"";
        //判断分页点
        if($page <= 1) $page=1;
        //$pageLeft = 1;
        $model = new usersModel();
        $num = $model->getRecordsCount($keyword);
        $totalPage = ceil($num/$pageSize);
        if($page >= $totalPage) $page = $totalPage;
        //计算页数
        $total_pages = $totalPage;
        //计算偏移量
        $pageoffset = ($showPage-1)/2;
        //初始化数据
        $stat = 1;
        $end = $total_pages;
        if($total_pages>$showPage){
            if($page>$pageoffset+1){

            }
            if($page>$pageoffset){
                $stat = $page - $pageoffset;
                $end = $total_pages>$page+$pageoffset ? $page+$pageoffset : $total_pages;
            }else{
                $stat = 1;
                $end = $total_pages>$showPage ? $showPage : $total_pages;
            }
            if($page+$pageoffset>$total_pages){
                $stat=$stat-($page+$pageoffset-$end);
            }

        }
        if($page > $totalPage) $page = $totalPage;
        $this->assign("total_pages",$total_pages);
        $this->assign('keyword',$keyword);
        $this->assign("page",$page);
        $this->assign("stat",$stat);
        $this->assign("end",$end);
        $modelMenber = new membersModel();
        $rowMenber = $modelMenber->getAll();
        $this->assign("rowMenber",$rowMenber);
        $modelPlan = new plansModel();
        $rowPlan = $modelPlan->getAll();
        $this->assign("rowPlan",$rowPlan);
        $rows=$model->getList("*",$page,$pageSize,$keyword);//获取数据
        if(!$rows){
            static::jump("index.php?p=Admin&c=usersAdmin&a=listuser",3,"搜索不存在!");
            exit;
        }
        $member_id = $_SESSION['member_id'];
        $this->assign("member_id",$member_id);
        $this->assign('rows',$rows);//赋值
        $this->display('users/list.html');//赋值
    }
    public function adduserAction(){//会员添加方法
        $post=$_POST;//文本获取数据
        $post['password']=md5($post['password']);
        $file=$_FILES['file'];//获取文件数据
        $upload = new FileUpLoadTool();//实例化
        $name = $upload->upload($file);//拿到文件名字
        if(!$name){//判断是否为空
            $name='user_573142e2555dc.jpg';//默认值
        }
        $post['photo'] = $name;//把文件名字加入到post里以便添加数据
        $model=new usersModel();//实例化
        if($model->insert($post)){//判断返回结果
            static::jump("index.php?p=Admin&c=usersAdmin&a=listuser");
        }else{
            static::jump("index.php?p=Admin&c=usersAdmin&a=listuser",3,"添加失败");
        }

    }
    public function removeuserAction(){//会员删除方法
        //拿到id进行下一步删除操作
        $id = $_GET['id'];
        $model1=new historiesModel();
        $re=$model1->getRow($id);
        if($re){
            static::jump("index.php?p=Admin&c=usersAdmin&a=listuser",3,"不能删除有消费记录的会员");exit;}
        //创建一个删除model
        $model = new usersModel();
        //调用删除方法
        $model->remove($id);
        //删除后跳转到首页
        static::jump("index.php?p=Admin&c=usersAdmin&a=listuser");

    }
    public function edituserAction()
    {//修改会员信息
        $post = $_POST;//获取post
        if(empty($post['password'])){
            unset($post['password']);
        }else{
            $post['password'] = md5($post['password']);
        }
        $id = $post['id'];//获取id
        $id = "user_id=$id";//设置修改的条件
        $file = $_FILES['file'];//获取文件
        if(!empty($file['name'])){
            $upload = new FileUpLoadTool();//实例化
            $name = $upload->upload($file);//拿到文件名字
            $post['photo'] = $name;////把文件名字加入到post里以便添加数据
        }
        $model = new usersModel();//实例化
        $re = $model->updateuser($post, $id);//调用方法
        if ($re) {//判断
            static::jump("index.php?p=Admin&c=usersAdmin&a=listuser");
        } else {
            static::jump("index.php?p=Admin&c=usersAdmin&a=listuser", 3, "修改失败");
        }
    }

}