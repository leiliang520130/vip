<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/5/10
 * Time: 23:25
 */
class articleModel extends Model{
    //分页方法
    public function getList($fields="*",$page=1,$pageSize=2){
        return $this->getPage($fields,$page,$pageSize);
    }
    public function getRecordsCount(){
        return $this->getCount();
    }
    public function insert($post){
        return $this->insertValues($post);
    }
   /* public function getList(){
        return $this->getAll();
    }*/
    //通过id获取一条数据
    public function getRow($id){
        return $this->getRowByKey($id);
    }
    public function remove($id){
        return $this->delete($id);
    }
    public function update($post){
        return $this->modify($post);
    }
    public function getAllhuo($table="*"){
        $tName = $this->getTable();
        $sql = "select $table from `$tName` ORDER BY `time` DESC limit 10";
        return $this->db->fetchAll($sql);
    }
}