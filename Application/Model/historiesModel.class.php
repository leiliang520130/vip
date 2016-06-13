<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/10
 * Time: 11:23
 */
class historiesModel extends Model
{
    public function getRow($id)
    {//user_id获取一条数据
        return $this->getOne("*", "user_id='$id'");
    }

    public function getAllHis()
    {//获取消费表所有数据
        return $this->getAll();
    }

    public function getRowAll($id)
    {
        return $this->getAll("*", "user_id='$id'");
    }

    public function insert($post)
    {
        return $this->insertValues($post);
    }

    public function getAllH($table, $where)
    {//获取消费表所有数据
        return $this->getAll($table, $where);
}

    public function getAllHi($table, $where)
    {//获取消费表所有数据
        return $this->getA($table, $where);
    }

    public function getA($table = "*", $where = "")
    {
        $tName = $this->getTable();
        $sql = "select $table from `$tName` $where ";
        return $this->db->fetchAll($sql);
    }
    public function getRecordsCount($where){
        return $this->getCount1($where);
    }
    public function getList($fields="*",$page=1,$pageSize=2,$where){
        return $this->getPage1($fields,$page,$pageSize,$where);
    }
    public function getPage1($fields="*",$page=1,$pageSize=2,$where){
        $start = ($page-1)*$pageSize;
        $sql = "select $fields from `{$this->getTable()}` where $where limit $start,$pageSize";
        return $this->db->fetchAll($sql);
    }
    public function getCount1($where){
        $sql = "select count(*) from `{$this->getTable()}` where $where ";
        return $this->db->fetchColumn($sql);
    }


    //分页统计条数总条数
    public function getRecordsCountMoney($id)
    {
        $sql = "select count(*) from `histories`  where user_id='$id'";
        return $this->db->fetchColumn($sql);
    }
    public function getListMoney($fields = "*", $page = 1, $pageSize = 2, $id)
    {
        $start = ($page - 1) * $pageSize;
        $sql = "select $fields from `histories` where user_id='$id' limit $start,$pageSize";
        return $this->db->fetchAll($sql);
    }

}


//得到分页