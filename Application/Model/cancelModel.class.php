<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/14
 * Time: 16:22
 */
class cancelModel extends Model
{
    public function getList($fields="*",$page=1,$pageSize=2){
        return $this->getPage($fields,$page,$pageSize);
    }
    public function getPage($fields="*",$page=1,$pageSize=2){
        $start = ($page-1)*$pageSize;
        $sql = "select $fields from `{$this->getTable()}` limit $start,$pageSize";
        return $this->db->fetchAll($sql);
    }
    public function getRecordsCount(){
        return $this->getCount();
    }

}