<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/5/11
 * Time: 11:11
 */
class plansModel extends Model{

    public function getList($fields="*",$page=1,$pageSize=2){
        return $this->getPage($fields,$page,$pageSize);
    }
    public function getRecordsCount(){
        return $this->getCount();
    }
    public function insert($post){
        return $this->insertValues($post);
    }
    public function getRowAll(){
         return $this->getAll();
    }
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

}