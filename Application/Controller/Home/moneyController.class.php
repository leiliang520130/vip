<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/12
 * Time: 13:28
 */
class moneyController extends userPlatController
{
    public function listAction(){
        $user_id=$_SESSION['user_id'];
        $model=new historiesModel();
        $pageSize = 2;//每页显示条数
        $showPage = 5; //页码
        //获取分页参数
        $page = isset($_GET['page'])?$_GET['page']:1;
        //判断分页点
        if($page <= 1) $page=1;
        $num = $model->getRecordsCount("user_id=$user_id and type='充值'");
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
        $rows = $model->getList("*",$page,$pageSize,"user_id=$user_id and type='充值'");
        $this->assign("num",$num);
        $this->assign("total_pages",$total_pages);
        $this->assign("page",$page);
        $this->assign("stat",$stat);
        $this->assign("end",$end);
        $this->assign("rows",$rows);
        $this->display("money/money.html");
    }
    public function list1Action(){
        $user_id=$_SESSION['user_id'];
        $model=new historiesModel();
        $pageSize = 2;//每页显示条数
        $showPage = 5; //页码
        //获取分页参数
        $page = isset($_GET['page'])?$_GET['page']:1;
        //判断分页点
        if($page <= 1) $page=1;
        $num = $model->getRecordsCount("user_id=$user_id and type='消费'");
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
        $rows = $model->getList("*",$page,$pageSize,"user_id=$user_id and type='消费'");
        $this->assign("num",$num);
        $this->assign("total_pages",$total_pages);
        $this->assign("page",$page);
        $this->assign("stat",$stat);
        $this->assign("end",$end);
        $this->assign("rows",$rows);
        $this->display("money/consume.html");
    }

}