<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/17
 * Time: 9:38
 */
class shoppingController extends userPlatController
{
    public function listAction(){
        $model = new shoppingModel();
        $name=$_SESSION['name'];
        $pageSize = 5;//每页显示条数
        $showPage = 5; //页码
        //获取分页参数
        $page = isset($_GET['page'])?$_GET['page']:1;
        //判断分页点
        if($page <= 1) $page=1;
        $num = $model->getRecordsCount("realname='$name'");
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
        $rows = $model->getList("*",$page,$pageSize,"realname='$name'");
        $this->assign("num",$num);
        $this->assign("total_pages",$total_pages);
        $this->assign("page",$page);
        $this->assign("stat",$stat);
        $this->assign("end",$end);
        $this->assign('rows',$rows);
        $this->display("shopping/shopping.html");
    }
    public function editAction(){
        $post=$_POST;
        $post['status']="完成";
        $model = new shoppingModel();
        if($model->modify($post)){
            static::jump("index.php?p=Home&c=shopping&a=list");
        }else{
            static::jump("index.php?p=Home&c=shopping&a=list",3,"确认失败");
        }

    }

}