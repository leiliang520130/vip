<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/5/11
 * Time: 11:01
 */
class plansController extends platController{
    public function listAction(){
        $model = new plansModel();
        $pageSize = 2;//每页显示条数
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
        $this->assign("rows",$rows);
        $this->display("plans/list.html");
    }
    public function insertAction(){
        $post = $_POST;
        $model = new plansModel();
        if($model->insert($post)){
            static::jump("index.php?p=Admin&c=plans&a=list");
        }else{
            static::jump("index.php?p=Admin&c=plans&a=list",3,"插入失败");
        }
    }

    public function removeAction(){
        $id = $_GET['id'];
        $model = new plansModel();
        if(!$model->remove($id)){
            static::jump("index.php?p=Admin&c=plans&a=list",3,"删除失败");
        }else{
            static::jump("index.php?p=Admin&c=plans&a=list");
        }
    }

    public function updateAction(){
        $post = $_POST;
        $model = new plansModel();
        if($model->update($post)){
            static::jump("index.php?p=Admin&c=plans&a=list");
        }else{
            static::jump("index.php?p=Admin&c=plans&a=list",3,"修改失败");
        }
    }

}