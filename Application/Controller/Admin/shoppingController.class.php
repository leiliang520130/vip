<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/17
 * Time: 10:16
 */
class shoppingController extends platController
{

    public function listAction(){
        
        $model = new shoppingModel();
        $pageSize = 4;//每页显示条数
        $showPage = 5; //页码
        //获取分页参数
        $page = isset($_GET['page'])?$_GET['page']:1;
        //$GLOBALS['page'] = $page;
        $keyword = isset($_GET['search']) ? $_GET['search']:"";
        //判断分页点
        if($page <= 1) $page=1;
        //$pageLeft = 1;
        $num = $model->getRecordsCount2($keyword);
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
        $rows=$model->getList2("*",$page,$pageSize,$keyword);//获取数据
        if(!$rows){
            static::jump("index.php?p=Admin&c=shopping&a=list",3,"搜索不存在!");
            exit;
        }
        $this->assign("rows",$rows);
        $this->display('shopping/shopping.html');
    }
}