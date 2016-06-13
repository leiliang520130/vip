<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/14
 * Time: 20:27
 */
class ornumModel extends Model
{
    public function getList($fields="*",$page=1,$pageSize=2,$where){
        return $this->getPage1($fields,$page,$pageSize,$where);
    }
    public function getPage1($fields="*",$page=1,$pageSize=2,$where){
        $start = ($page-1)*$pageSize;
        if(!empty($where)){
            $sql = "select $fields from `ornum` WHERE $where ORDER BY `date` desc limit $start,$pageSize";
        }else{
            $sql = "select $fields from `{$this->getTable()}` ORDER BY `date` desc limit $start,$pageSize";
        }
        return $this->db->fetchAll($sql);
    }
    public function getRecordsCount($where){
        return $this->getCount1($where);
    }
    public function getCount1($where){
        $sql="select count(*) from `ornum` where $where ";
        return $this->db->fetchColumn($sql);
    }
    public function update($update,$id)
    {
        $sql="update `ornum` set $update where order_id=$id ";
        return $this->db->query($sql);
    }
    public function getid($table,$where){
        $sql = "select $table from ornum where $where ";
        return $this->db->fetchRow($sql);
    }
    public function orremove($where){
        $sql = "delete from `ornum` where $where";
        return $this->db->query($sql);
    }
}