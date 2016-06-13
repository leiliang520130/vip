<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/17
 * Time: 9:47
 */
class shoppingModel extends Model
{

    public function getList($fields="*",$page=1,$pageSize=2,$where){
        return $this->getPage1($fields,$page,$pageSize,$where);
    }
    public function getPage1($fields="*",$page=1,$pageSize=2,$where){
        $start = ($page-1)*$pageSize;
        if(!empty($where)){
            $sql = "select $fields from `shopping` WHERE $where ORDER BY `time` DESC limit $start,$pageSize";
        }else{
            $sql = "select $fields from `{$this->getTable()}` ORDER BY `time` DESC  limit $start,$pageSize";
        }
        return $this->db->fetchAll($sql);
    }
    public function getRecordsCount($where){
        return $this->getCount1($where);
    }
    public function getCount1($where){
        $sql="select count(*) from `shopping` where $where ";
        return $this->db->fetchColumn($sql);
    }
    ///////////////////////////////////////
    public function getRecordsCount2($keyword){
        return $this->getCount($keyword);
    }
    public function getList2($fields="*",$page=1,$pageSize=2,$keyword){
        return $this->getPage($fields,$page,$pageSize,$keyword);
    }
    //分页开始
    public function getCount($keyword=""){
        $sql = "select count(*) from `{$this->getTable()}` where `number` like '%$keyword%' or `realname` like '%$keyword%'";
        return $this->db->fetchColumn($sql);
    }
    //获取分页
    public function getPage($fields="*",$page=1,$pageSize=2,$keyword=""){
        $start = ($page-1)*$pageSize;
        $sql = "select $fields from `{$this->getTable()}` where `number` like '%{$keyword}%' or `realname` or `phone` like '%{$keyword}%' ORDER BY `time` DESC limit $start,$pageSize";
        return $this->db->fetchAll($sql);
    }
}