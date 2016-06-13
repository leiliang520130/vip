<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/11
 * Time: 9:47
 */
class orderAdminController extends platController
{
    public function listAction(){
        $model=new orderModel();
        $pageSize = 5;//每页显示条数
        $showPage = 5; //页码
        //获取分页参数
        $page = isset($_GET['page'])?$_GET['page']:1;
        //判断分页点
        if($page <= 1) $page=1;
        $num = $model->getRecordsCount();
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
        $rows = $model->getList("*",$page,$pageSize);
        $this->assign("num",$num);
        $this->assign("total_pages",$total_pages);
        $this->assign("page",$page);
        $this->assign("stat",$stat);
        $this->assign("end",$end);
        $this->assign('rows',$rows);
        $this->display("order/order.html");
    }
    public function statusAction(){
        $post=$_POST;
        $orderid = $post['order_id'];
        $modelornum=new ornumModel();
        $row = $modelornum->getid("*","order_id=$orderid");
        if(empty($row)){
            if( $post['status']=="成功"){
                $post['date']=str_replace("-","",$post['date']);
                $post['number']=uniqid($post['date']);
                if(!$modelornum->insertValues($post)){
                    static::jump("index.php?p=Admin&c=orderAdmin&a=list", 3, "订单添加失败");
                    exit;
                }
            }
        }elseif($post['status']=="失败"&&!empty($row)){
                if(!$modelornum->orremove("order_id=$orderid")){
                    static::jump("index.php?p=Admin&c=orderAdmin&a=list", 3, "订单删除失败");
                    exit;
                }
        }
        $model=new orderModel();
        if ($model->editorder($post,"")) {//判断
            static::jump("index.php?p=Admin&c=orderAdmin&a=list");
        } else {
            static::jump("index.php?p=Admin&c=orderAdmin&a=list", 3, "修改失败");
        }
        
    }

}