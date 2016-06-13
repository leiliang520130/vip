<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/10
 * Time: 17:49
 */
class orderuserController extends userPlatController
{
    private $barber;
    public function barberAction(){
        $model=new membersModel();//显示理发师
        $this->barber=$model->getAll();
    }
    public function listAction(){//显示预约
        $name=$_SESSION['name'];
        $name="realname='$name' and status<>'已取消'";
        $model=new orderModel();
        $pageSize = 5;//每页显示条数
        $showPage = 5; //页码
        //获取分页参数
        $page = isset($_GET['page'])?$_GET['page']:1;
        //判断分页点
        if($page <= 1) $page=1;
        $num = $model->getRecordsCount2($name);
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
        $rows = $model->getList2("*",$page,$pageSize,$name);
        $this->assign("num",$num);
        $this->assign("total_pages",$total_pages);
        $this->assign("page",$page);
        $this->assign("stat",$stat);
        $this->assign("end",$end);
        $this->barberAction();
        $rowm=$this->barber;
        $this->assign('rowm',$rowm);
        $this->assign('rows',$rows);
        $this->display("order/list.html");
    }
    public function addAction(){//添加预约
        $post=$_POST;
        $post['realname']=$_SESSION['name'];
        $model=new orderModel;
        if($model->insertorder($post)){//判断返回结果
            static::jump("index.php?p=Home&c=orderuser&a=list");
        }else{
            static::jump("index.php?p=Home&c=orderuser&a=list",3,"添加失败");
        }
    }
    public function editAction(){//修改
        $post=$_POST;
        $model=new orderModel();
        $id=$post['id'];
        $where="order_id=$id";
        if($model->editorder($post,$where)){//判断返回结果
            static::jump("index.php?p=Home&c=orderuser&a=list");
        }else{
            static::jump("index.php?p=Home&c=orderuser&a=list",3,"修改失败");
        }
    }
    public function removeAction(){//删除
        $id['order_id']=$_GET['id'];
        $model=new orderModel();
        $row=$model->getRowByKey($id['order_id']);
        $post['off_id']=$row['order_id'];
        $post['telephone']=$row['phone'];
        $post['username']=$row['realname'];
        $post['time']=$row['date'];
        $modelornum=new ornumModel();
        if(!$modelornum->update("sta='已取消'",$id['order_id'])){
            static::jump("index.php?p=Home&c=ornum&a=finish",3,"取消失败");
        }
        $modelcancel=new cancelModel();
        $row=$modelcancel->insertValues($post);
        $id['status']="已取消";
        if($model->modify($id)){//判断返回结果
            static::jump("index.php?p=Home&c=orderuser&a=off");
        }else{
            static::jump("index.php?p=Home&c=orderuser&a=list",3,"取消失败");
        }
    }
    public function offAction(){
        $model=new orderModel();
        $name=$_SESSION['name'];
        $name="realname='$name' and status='已取消'";
        $pageSize = 5;//每页显示条数
        $showPage = 5; //页码
        //获取分页参数
        $page = isset($_GET['page'])?$_GET['page']:1;
        //判断分页点
        if($page <= 1) $page=1;
        $num = $model->getRecordsCount2($name);
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
        $rows = $model->getList2("*",$page,$pageSize,$name);
        $this->assign("num",$num);
        $this->assign("total_pages",$total_pages);
        $this->assign("page",$page);
        $this->assign("stat",$stat);
        $this->assign("end",$end);
        $this->assign('rows',$rows);
        $this->display("order/off.html");
    }


}