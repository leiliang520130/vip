<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/5/10
 * Time: 22:40
 */
class articleController extends platController{
    public function showAction(){
        $username = $_SESSION['username'];        
        $this->assign("username",$username);
        $this->display("article/article.html");
    }
    public function listAction(){
        $model = new articleModel();
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
        $this->display("article/list.html");
    }
    public function insertAction(){
        $post = $_POST;
        $model = new articleModel();
        if($model->insert($post)){
            static::jump("index.php?p=Admin&c=article&a=list");
        }else{
            static::jump("index.php?p=Admin&c=article&a=list",3,"请添加日期");
        }
    }
    //编辑方法

    public function editAction(){
        $id = $_GET['id'];
        $model = new articleModel();
        $row = $model->getRow($id);
        $this->assign("row",$row);
        $this->display("article/edit.html");
    }

    public function removeAction(){
        $id = $_GET['id'];
        $model = new articleModel();
        if(!$model->remove($id)){
            static::jump("index.php?p=Admin&c=article&a=list",3,"删除失败");
        }else{
            static::jump("index.php?p=Admin&c=article&a=list");
        }
    }

    public function updateAction(){
        $post = $_POST;
        $model = new articleModel();
        if($model->update($post)){
            static::jump("index.php?p=Admin&c=article&a=list");
        }else{
            static::jump("index.php?p=Admin&c=article&a=list",3,"修改失败");
        }
    }

    public function contentAction(){
        $id = $_GET['id'];
        $model = new articleModel();
        $row = $model->getRow($id);
        $this->assign("row",$row);
        $this->display("article/content.html");
    }

}