<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/14
 * Time: 20:24
 */
class ornumController extends userPlatController
{
    public function listAction(){
        $name=$_SESSION['name'];
        $model=new ornumModel();
        $pageSize = 5;//每页显示条数
        $showPage = 5; //页码
        //获取分页参数
        $page = isset($_GET['page'])?$_GET['page']:1;
        //判断分页点
        if($page <= 1) $page=1;
        $num = $model->getRecordsCount("sta='未完成' and realname='$name' ");
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
        $rows = $model->getList("*",$page,$pageSize,"realname='$name' and sta='未完成'");
        $this->assign("num",$num);
        $this->assign("total_pages",$total_pages);
        $this->assign("page",$page);
        $this->assign("stat",$stat);
        $this->assign("end",$end);
        $this->assign('rows',$rows);
        $this->display("ornum/ornum.html");
    }
    public function finishAction(){
        $name=$_SESSION['name'];
        $model=new ornumModel();
        $pageSize = 5;//每页显示条数
        $showPage = 5; //页码
        //获取分页参数
        $page = isset($_GET['page'])?$_GET['page']:1;
        //判断分页点
        if($page <= 1) $page=1;
        $num = $model->getRecordsCount("sta='完成' or sta='已取消' and realname='$name' ");
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
        $rows = $model->getList("*",$page,$pageSize," sta='完成' or sta='已取消' and realname='$name'");
        $this->assign("num",$num);
        $this->assign("total_pages",$total_pages);
        $this->assign("page",$page);
        $this->assign("stat",$stat);
        $this->assign("end",$end);
        $this->assign('rows',$rows);
        $this->display("ornum/finish.html");
    }
    public function editAction(){
        $post=$_POST;
        $id=$_SESSION['user_id'];
        $arr['user_id']=$id;
        $arr['code']=uniqid("VS");
        $arr['money']=mt_rand(1,5);
        $modelcode=new codesModel();
        $strlen=strlen($post['comment']);
        if($strlen>=30){
            $modelcode->insertValues($arr);
        }
        $post['sta']="完成";
        $model=new ornumModel();
        if($model->modify($post)){
            static::jump("index.php?p=Home&c=ornum&a=list");
        }else{
            static::jump("index.php?p=Home&c=ornum&a=list",3,"确认失败");
        }
    }
}