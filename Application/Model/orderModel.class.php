<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/10
 * Time: 18:59
 */
class orderModel extends Model
{
    public function getList($fields="*",$page=1,$pageSize=2){
        return $this->getPage($fields,$page,$pageSize);
    }
    public function getPage($fields="*",$page=1,$pageSize=2){
        $start = ($page-1)*$pageSize;
        $sql = "select $fields from `{$this->getTable()}` ORDER BY `date` desc limit $start,$pageSize";
        return $this->db->fetchAll($sql);
    }
    public function getRecordsCount(){
        return $this->getCount();
    }
    public function getAllorder($table,$name){
        return $this->getAll($table,$name);
    }
    public function insertorder($post){
        return $this->insertValues($post);
    }
    public function editorder($post,$id){
        return $this->modify($post,$id);
    }
    public function removeorder($id){
        return $this->delete($id);
    }
    public function getRecordsCountMoney($id)
    {
        $sql = "select count(*) from `histories`  where user_id='$id'";
        return $this->db->fetchColumn($sql);
    }
    //得到分页
    public function getListMoney($fields = "*", $page = 1, $pageSize = 2, $id)
    {
        $start = ($page - 1) * $pageSize;
        $sql = "select $fields from `histories` where user_id='$id' limit $start,$pageSize";
        return $this->db->fetchAll($sql);
    }

    public function getList2($fields="*",$page=1,$pageSize=2,$where){
        return $this->getPage1($fields,$page,$pageSize,$where);
    }
    public function getPage1($fields="*",$page=1,$pageSize=2,$where){
        $start = ($page-1)*$pageSize;
            $sql = "select $fields from `order` WHERE $where ORDER BY `date` desc limit $start,$pageSize";
        return $this->db->fetchAll($sql);
    }
    public function getRecordsCount2($where){
        return $this->getCount2($where);
    }
    public function getCount2($where){
        $sql="select count(*) from `order` where $where ";
        return $this->db->fetchColumn($sql);
    }
    
    
}